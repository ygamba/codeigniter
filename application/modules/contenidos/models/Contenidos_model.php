<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contenidos_model extends CI_Model {

    public $id_contenido; 
    public $id_padre; 
    public $titulo;
    public $descripcion;
    public $activo;
    public $fechac;
    public $fechad; 
    
    
    
    
    
    public function set_datos($data_cruda){
        foreach ($data_cruda as $nombre_campo => $valor_campo){
                if(property_exists('Contenidos_model', $nombre_campo)){
                        $this->$nombre_campo=$valor_campo;
                }
        }        

         if($this->activo==NULL){
            $this->activo=1;
        }
        return $this;
        
    }
    function listar_todos($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->select('*');       
        $this->db->from('contenidos');     
        $this->db->where('activo = 1');
        $query = $this->db->get();  
        //echo $this->db->last_query();
        return $query->result();
    }
    
    function listar_padres() {
        $this->db->select('*');
        $this->db->from('contenidos');
        //$this->db->where('id_padre = 0');
        $this->db->where('activo = 1');
        $query = $this->db->get();          
        return $query->result();
    }
   
    
    
    public function add() {
    
        $id=$this->db->insert('contenidos', $this);

        return $this->db->insert_id();
    }
    
   

    public function actualizar($data) {
        $this->db->where('id_contenido =', $this->id_contenido);
        $id=$this->db->update('contenidos', $data);
        //echo $this->db->last_query();

        return $id;
    }
    public function delete($id) {
        $timestamp = date('Y-m-d G:i:s');        
        $data['activo']= 0;
        $data['fechad']= $timestamp;
        $this->db->where('id_contenido=', $id);
        $id=$this->db->update('contenidos', $data);
        
	return $id;
    }    
    
    public function get_item($id){
        
        $this->db->where(array('id_contenido'=>$id));
        $query= $this->db->get('contenidos');
        
        $row = $query->custom_row_object(0, 'Contenidos_model');
       
        return $row;
    }
    
   
    public function total_registros() {
        $this->db->from("contenidos");     
        $this->db->where('activo = 1');

        return $this->db->count_all_results();
        //echo $this->db->last_query();

    }
}
