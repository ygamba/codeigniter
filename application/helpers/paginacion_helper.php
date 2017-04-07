<?php

function paginar_todo($tabla,$pagina=1,$por_pagina=20,$campos,$idusuario){
        
    $CI =& get_instance();
    $CI->load->database();
    
    $CI->db->where('id_usuario',$idusuario);
    $total_tabla    =$CI->db->count_all_results($tabla);    
    $total_paginas  =ceil($total_tabla/ $por_pagina);
        
        if($pagina > $total_paginas){
            $pagina=$total_paginas;
        }
        
        $pagina -=1;
        $desde= $pagina*$por_pagina;
        
        if($pagina >= $total_paginas-1 ){
            $pag_siguiente=1;
        }else{
            $pag_siguiente=$pagina + 2;
        }
        
        if($pagina < 1){
            $pag_anterior = $total_paginas;
        }else{
            $pag_anterior = $pagina;
        }
        $CI->db->select('id_estudio,id_nivelacademico,grado,anioGrado');
        $CI->db->select('nivel_academico.nivel_academico');
        $this->db->from($tabla);
        $this->db->join('tipo_modalidad', 'tipo_modalidad.id_modalidad = cursos.id_modalidad');  
        $query=$CI->db->get($tabla,$por_pagina,$desde);
        
        $respuesta=array(
            'err'=>FALSE,
            'cuantos'=>$total_tabla,
            'total_paginas' =>$total_paginas,
            'pag_actual' => $pagina+1,
            'pag_siguiente' => $pag_siguiente,
            'pag_anterior' => $pag_anterior,
            $tabla => $query->result()
        );
        
        return $respuesta;
    
}
