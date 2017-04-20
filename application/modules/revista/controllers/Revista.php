<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Revista extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('form_validation', 'pagination','session','upload'));
        $this->load->helper(array('url', 'language','paginador'));
        $this->load->model(array('Revista_model'));
    }

  
    // redirect if needed, otherwise display the user list
    function index() {

        //Set the menu according with the type of user
        
            //$total = $this->Revista_model->total_registros();
	    $this->smarty1->assign("title", "Prueba DataTable");


            $this->smarty1->view('revista/master');
       
    }
    
    function lista() {

        //Set the menu according with the type of user
        
        
            $registros = $this->Revista_model->total_registros();
            
            
            
            
            $data= json_encode($registros);
         
            echo $data;           
       
    }
    
    

    // create a new category
    function crear() {
        

        //Set the menu according with the type of user

        $this->form_validation->set_rules('padre', 'Padre del Contenido', 'trim');
        $this->form_validation->set_rules('titulo', 'Titulo del Contenido', 'trim|required');        
        $this->form_validation->set_rules('descripcion', 'Descripción del Contenido', 'trim|required');        
        
        
                
        if ($this->form_validation->run() == TRUE) {
            

            $data['id_padre'] = $this->input->post('padre');
            $data['titulo'] = $this->input->post('titulo');
            $data['descripcion'] = $this->input->post('descripcion');
          
            $contenido = $this->revista_model->set_datos($data);
            
            $id_insertco = $contenido->add();
            
            
            if ($id_insertco) {
                $this->session->set_flashdata('message', 'Categoría Creada Exitósamente');
                redirect("revista/index/" . $this->idmenu);
            }
        }

            // check to see if we are creating the group
            // redirect them back to the admin page
        $this->data['padres'] = $this->revista_model->listar_padres();
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
        $this->smarty1->view('revista/form_contenido');
        
    }

    // edit a category
    function editar() {
  

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
          
            $contenido = $this->revista_model->set_datos($data);
            $id_insertco = $contenido->actualizar($data);

            // check to see if we are creating the group
            // redirect them back to the admin page
           
            
            if ($id_insertco) {
                $this->session->set_flashdata('message', 'Categoría Editada Exitósamente');
                redirect("revista/index/" . $this->idmenu, 'refresh');
            } else {
                $this->session->set_flashdata('message', 'Error al editar la Categoría');
            }
        }

        $datos = $this->revista_model->get_item($iditem);
        
        

            // redirect them back to the admin page
        $this->data['padres'] = $this->revista_model->listar_padres();
        $padres = array();
        foreach ($this->data['padres'] as $padre) {
            $padres[$padre->id_contenido] = $padre->titulo;
        }

       
        $this->smarty1->assign("listado", $this->listado);
        $this->smarty1->assign("padres", $padres);
    
        $this->smarty1->assign("data", $datos);
        $this->smarty1->assign("title", 'Editar Contenido');
        $this->smarty1->assign("idmenu", $this->idmenu);
        $this->smarty1->view('revista/form_contenido');
    }
  
    // delete a category
    function borrar() {

 

        $iditem = $this->uri->segment(5);


        // bail if no category id given
        if (!$iditem || empty($iditem) || !is_numeric($iditem)) {
            redirect('revista/index/' . $this->idmenu, 'refresh');
        }

        $categoria_delete = $this->revista_model->delete($iditem);

        redirect('revista/index/' . $this->idmenu);
    }


    function igual() {



        if($this->input->post('padre')==$this->input->post('contenido')){
            return FALSE;
        }else{
            return TRUE;
        }
    }
    
}
