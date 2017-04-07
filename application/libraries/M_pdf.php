<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once APPPATH.'/third_party/mpdf/mpdf.php';

class M_pdf extends mPDF {

    public function __construct()
    {
       		parent::__construct();
    }
}

