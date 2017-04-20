<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Revista_model extends CI_Model {

  function total_registros(){
		
		$cadena_sql = "SELECT                   id_contenido,
							titulo,
							descripcion
						FROM
							contenidos;";
        $query = $this->db->query($cadena_sql);
        return $query->result();
		
	}
}
