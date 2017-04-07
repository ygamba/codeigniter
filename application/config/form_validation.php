<?php 
if( ! defined('BASEPATH') ) exit('No direct script access allowed');


$config = array(

    'perfil_post' => array(
                        array( 'field'=>'id_tipodoc', 'label'=>'Tipo de documento','rules'=>'trim|required' ),
                        array( 'field'=>'documento', 'label'=>'Número de documento','rules'=>'trim|required' ),
                        array( 'field'=>'nombres', 'label'=>'nombre','rules'=>'trim|required|min_length[2]|max_length[255]' ),
                        array( 'field'=>'apellidos', 'label'=>'nombre','rules'=>'trim|required|min_length[2]|max_length[255]' ),
                        array( 'field'=>'id_genero', 'label'=>'Genero','rules'=>'trim|required' ),
                        array( 'field'=>'id_pais_residencia', 'label'=>'Pais residencia','rules'=>'trim|required' ),
                        array( 'field'=>'dir_residencia', 'label'=>'Dirección residencia','rules'=>'trim|required|min_length[2]|max_length[255]' ),
                        array( 'field'=>'telefono', 'label'=>'Número telefonico','rules'=>'trim|required|min_length[2]|max_length[255]' ),
                        array( 'field'=>'celular', 'label'=>'Número celular','rules'=>'trim|required|integer|min_length[1]|max_length[13]' )
		),
    'estudios_put' => array(
                        array( 'field'=>'id_nivelacademico', 'label'=>'Nivel acádemico','rules'=>'trim|required|integer' ),
                        array( 'field'=>'tituloObtenido', 'label'=>'Titulo obtenido','rules'=>'trim|required|min_length[2]|max_length[255]' ),
                        array( 'field'=>'grado', 'label'=>'Graduado','rules'=>'trim|required|integer' ),
                        array( 'field'=>'anioGrado', 'label'=>'Año del grado','rules'=>'trim|required|integer' )
                ),
    'idioma_post' => array(
                        array( 'field'=>'idioma', 'label'=>'Idioma','rules'=>'trim|required|min_length[2]|max_length[255]' ),
                        array( 'field'=>'loHabla', 'label'=>'Nivel de habla','rules'=>'trim|required|integer' ),
                        array( 'field'=>'loLee', 'label'=>'Nivel de lectura','rules'=>'trim|required|integer' ),
                        array( 'field'=>'loEscribe', 'label'=>'Nivel de escritura','rules'=>'trim|required|integer' ),
                        array( 'field'=>'loEntiende', 'label'=>'Nivel de comprensión','rules'=>'trim|required|integer' )
                ),
    
    'cliente_post' => array(
                        array( 'field'=>'id', 'label'=>'cliente id','rules'=>'trim|required|integer' ),
			array( 'field'=>'correo', 'label'=>'correo electronico','rules'=>'trim|required|valid_email' ),
			array( 'field'=>'nombre', 'label'=>'nombre','rules'=>'trim|required|min_length[2]|max_length[255]' ),
			array( 'field'=>'zip', 'label'=>'zip','rules'=>'trim|required|min_length[2]|max_length[5]' )
		)


);




?>