<?php

namespace App\Helpers;

class ServiceResponseHelper{



 	public function getServiceResponse($success,$message,$redirect,$custom) {
    	return array(
        	'success'   => $success,
        	'message'   => $message,
        	'redirect'  => $redirect,
        	'custom'    => $custom
    );
	
    }	
}