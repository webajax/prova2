<?php

namespace App\Helpers;

use DateTime;
use DateTimeZone;

class ServiceDateHelper{


 	public function getServiceDate($date) {



 		if($date!=""){
 			$date = str_replace("/", "-", $date);
 			$date=date('Y-m-d H:i:s',strtotime($date) );
 			
 		}else{
 			$date="";
 		}



 		return $date;


    }

    public function  getDateTimeZone($date){

    	#time zone exact
        #$dt_obj  = new DateTime(date("Y-m-d H:m:s") ." UTC");
        #$dt_obj->setTimezone(new DateTimeZone('America/Sao_Paulo'));
        date_default_timezone_set('America/Sao_Paulo');
        #$created = date_format($dt_obj, 'Y-m-d H:i:s');
        $created = date($date);

        return $created;


    }	
}