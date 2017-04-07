<?php

function paginar($url,$total,$por_pagina=10,$uris=4){
    $CI =& get_instance();
    $CI->load->helper('url','pagination'); // load library

    $config['base_url']=$url;
    $config['total_rows'] = $total;
    $config['per_page'] = $por_pagina;
    $config["uri_segment"] = $uris;
    $config["page"] = ($CI->uri->segment($uris)) ? $CI->uri->segment($uris) : 0;
    $CI->pagination->initialize($config);

    $data["links"] = $CI->pagination->create_links();
    $data["page"] = $config["page"];
    $data["per_page"] = $por_pagina;
    
    return $data;
}

