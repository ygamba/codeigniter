<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'third_party/phpmailer/PHPMailerAutoload.php';
require_once(APPPATH.'third_party/phpmailer/class.phpmailer.php'); 


class My_PHPMailer extends PHPMailer{

public function __construct()
	{
		parent::__construct();
                //$this->IsSMTP();
                $this->SMTPDebug = 1;
                $this->CharSet="UTF-8";
                $this->SMTPAuth  = true;
                //$this->SMTPSecure   = "tls";
                $this->Host = "mail.colneurons.org";
                $this->Port =26;
                $this->Username="relay@colneurons.org";
                $this->Password="Qaz123qaz#";
                $this->correo='relay@colneurons.org';
	}
        
        
public function sendmail($to, $to_name, $subject, $body){
    try{
        
        $this->From = $this->correo;
        $this->FromName =$to_name;
        $this->Subject = $subject;
        $this->AddAddress($to);
        $this->AddBCC("efvargas@pedagogica.edu.co");
        $this->msgHTML($body);
        if(!$this->Send()) {
            echo "Mailer Error: " . $this->ErrorInfo;
            exit();
        }else{
            $resultado=1;
        }
        
        return $resultado;
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        echo $e->getMessage(); //Boring error messages from anything else!
    }
}

}


