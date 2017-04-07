<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once( APPPATH.'third_party/smarty/libs/Smarty.class.php' );

class Smarty1 extends Smarty
{
    public function __construct()
    {
        parent::__construct();

        $this->setTemplateDir( APPPATH . "modules/views");
        $this->setCompileDir( APPPATH . "views/templates_c");
        $this->setCacheDir( APPPATH . 'third_party/smarty/cache');
        $this->assign( 'APPPATH', APPPATH );
        $this->assign( 'BASEPATH', BASEPATH );

        // Assign CodeIgniter object by reference to CI
        if( method_exists( $this, 'assignByRef') )
        {
            $ci =& get_instance();
            $this->assignByRef("ci", $ci);
        }

        //log_message('debug', "Smarty Class Initialized");
    }

    function view($template, $data = array(), $return = FALSE)
    {
        foreach($data as $key => $val)
        {
            $this->assign($key, $val);
        }

        if($return == FALSE)
        {
            $CI =& get_instance();
            if(method_exists( $CI->output, 'set_output' ))
            {
                $CI->output->set_output( $this->fetch($template . '.htm') );
            }
            else
            {
                $CI->output->final_output = $this->fetch($template . 'htm');
            }
            return;
        }
        else
        {
            return $this->fetch($template);
        }
    }
}
