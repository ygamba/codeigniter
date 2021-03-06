<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contenidos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('ion_auth', 'form_validation', 'pagination','session','upload'));
        $this->load->helper(array('url', 'language','paginador'));
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
        $this->load->model(array('Contenidos_model'));
        $this->lang->load('auth');
        $this->idmenu = $this->uri->segment(4);
        $this->listado = $this->ion_auth->menu_group($this->ion_auth->user()->row());
    }

  
    // redirect if needed, otherwise display the user list
    function index() {
        $this->ion_auth->validate_login();
        //Set the menu according with the type of user
        
        
            $total = $this->Contenidos_model->total_registros();

            $paginar=paginar(base_url() . 'contenidos/index/'.$this->idmenu, $total, 25,5);
            

            $paginar["data"] = $this->Contenidos_model->listar_todos($paginar["per_page"], $paginar["page"]);

            
            $this->smarty1->assign("data", $paginar["data"]);
            $this->smarty1->assign("links", $paginar["links"]);
            $this->smarty1->assign("listado", $this->listado);
            $this->smarty1->assign("title", 'Contenidos');          
            $this->smarty1->assign("linkCrear",base_url()."contenidos/crear/".$this->idmenu);
            $this->smarty1->assign("linkEditar",base_url()."contenidos/editar/".$this->idmenu  );
            $this->smarty1->assign("linkEliminar",base_url()."contenidos/borrar/".$this->idmenu); 
            $this->smarty1->view('contenidos/master');
       
    }

    // create a new category
    function crear() {
        $this->ion_auth->validate_login();

        //Set the menu according with the type of user

        $this->form_validation->set_rules('padre', 'Padre del Contenido', 'trim');
        $this->form_validation->set_rules('titulo', 'Titulo del Contenido', 'trim|required');        
        $this->form_validation->set_rules('descripcion', 'Descripción del Contenido', 'trim|required');        
        
        
                
        if ($this->form_validation->run() == TRUE) {
            

            $data['id_padre'] = $this->input->post('padre');
            $data['titulo'] = $this->input->post('titulo');
            $data['descripcion'] = $this->input->post('descripcion');
          
            $contenido = $this->Contenidos_model->set_datos($data);
            
            $id_insertco = $contenido->add();
            
            
            if ($id_insertco) {
                $this->session->set_flashdata('message', 'Categoría Creada Exitósamente');
                redirect("contenidos/index/" . $this->idmenu);
            }
        }

            // check to see if we are creating the group
            // redirect them back to the admin page
        $this->data['padres'] = $this->Contenidos_model->listar_padres();
        $padres = array();
        foreach ($this->data['padres'] as $padre) {
            $padres[$padre->id_contenido] = $padre->titulo;
        }
        
        $datos= new stdClass();
        $datos->titulo = '';
        $datos->descripcion = '';
        $datos->id_contenido = '';
        
        $this->smarty1->assign("data", $datos);
        $this->smarty1->assign("listado", $this->listado);
        $this->smarty1->assign("padres", $padres);        
        $this->smarty1->assign("title", 'Crear Contenido');
        $this->smarty1->assign("idmenu", $this->idmenu);
        $this->smarty1->view('contenidos/form_contenido');
        
    }

    // edit a category
    function editar() {
        $this->ion_auth->validate_login();

        $iditem = $this->uri->segment(5);

        //Set the menu according with the type of user
        $this->form_validation->set_rules('padre', 'Padre del Contenido', 'trim|callback_igual');
        $this->form_validation->set_message('igual', 'No puede eligir como Contenido Padre el mismo Contenido');
        $this->form_validation->set_rules('titulo', 'Titulo del Contenido', 'trim|required');        
        $this->form_validation->set_rules('descripcion', 'Descripción del Contenido', 'trim|required');        

       
        
        if ($this->form_validation->run() === TRUE) {

       
            $data['id_padre'] = $this->input->post('padre');
            $data['titulo'] = $this->input->post('titulo');
            $data['descripcion'] = $this->input->post('descripcion');
            $data['id_contenido']= $iditem;
          
            $contenido = $this->Contenidos_model->set_datos($data);
            $id_insertco = $contenido->actualizar($data);

            // check to see if we are creating the group
            // redirect them back to the admin page
           
            
            if ($id_insertco) {
                $this->session->set_flashdata('message', 'Categoría Editada Exitósamente');
                redirect("contenidos/index/" . $this->idmenu, 'refresh');
            } else {
                $this->session->set_flashdata('message', 'Error al editar la Categoría');
            }
        }

        $datos = $this->Contenidos_model->get_item($iditem);
        
        

            // redirect them back to the admin page
        $this->data['padres'] = $this->Contenidos_model->listar_padres();
        $padres = array();
        foreach ($this->data['padres'] as $padre) {
            $padres[$padre->id_contenido] = $padre->titulo;
        }

       
        $this->smarty1->assign("listado", $this->listado);
        $this->smarty1->assign("padres", $padres);
    
        $this->smarty1->assign("data", $datos);
        $this->smarty1->assign("title", 'Editar Contenido');
        $this->smarty1->assign("idmenu", $this->idmenu);
        $this->smarty1->view('contenidos/form_contenido');
    }
  
    // delete a category
    function borrar() {

        $this->ion_auth->validate_login();

        $iditem = $this->uri->segment(5);


        // bail if no category id given
        if (!$iditem || empty($iditem) || !is_numeric($iditem)) {
            redirect('contenidos/index/' . $this->idmenu, 'refresh');
        }

        $categoria_delete = $this->Contenidos_model->delete($iditem);

        redirect('contenidos/index/' . $this->idmenu);
    }


    function igual() {

        $this->ion_auth->validate_login();

        if($this->input->post('padre')==$this->input->post('contenido')){
            return FALSE;
        }else{
            return TRUE;
        }
    }
    
}
