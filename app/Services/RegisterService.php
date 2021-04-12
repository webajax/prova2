<?php 

namespace App\Services;


# Autor: André Camargo

#injects
use App\Models\RegisterModel;
use App\Helpers\ServiceResponseHelper;
use App\Helpers\ServiceDateHelper;

#input rules
class RegisterService  {
    
 
    protected $registermodel;
    protected $getmessage;
    protected $getdate;

    #change injects
    function __construct(RegisterModel $registerModel,ServiceResponseHelper $message,ServiceDateHelper $date) {
        $this->registermodel = $registerModel;
        $this->getDate     = $date;
        $this->getMessage  = $message;
    } 

    public function add($data){



        #$data["data_inicio"] = $this->getDate->getServiceDate($data["data_inicio"]);
        $data["created_at"] = now();

    	$resp = $this->registermodel->add($data);   

        if($resp["success"] AND $resp["exception"] == null)
            $resp= $this->getMessage->getServiceResponse(TRUE,"Curso Cadastrado com Sucesso!","",$resp);#case success
        else if($resp["exception"] != null)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Oppsssss! ocorreu um erro","",$resp["exception"]);#case error
 

        return $resp; 	

    }

    public function edit($data){

        $data["updated_at"] = now();
        #$data["data_inicio"] = $this->getDate->getServiceDate($data["data_inicio"]);

    	$resp=$this->registermodel->edit($data);

  
        if($resp["success"] AND $resp["exception"] == null)
            $resp= $this->getMessage->getServiceResponse(TRUE,"Curso Salvo com Sucesso!","",$resp);#case success
        else if($resp["exception"] != null)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Oppsssss! ocorreu um erro","",$resp["exception"]);#case error
            

        return $resp;    
    }


    public function del($id){

        $resp=$this->registermodel->del($id);
  
        if($resp["success"] AND $resp["exception"] == null)
            $resp= $this->getMessage->getServiceResponse(TRUE,"Curso Deletado com Sucesso!","",$resp);#case success
        else if($resp["exception"] != null)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Oppsssss! ocorreu um erro","",$resp["exception"]);#case error
            

        return $resp;    
    }    


    public function find($id){

        $resp=$this->registermodel->find($id);
  
        if($resp["success"] AND $resp["exception"] == null)
            $resp= $this->getMessage->getServiceResponse(TRUE,"Curso Encontrado com Sucesso!","",$resp);#case success
        else if($resp["exception"] != null)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Oppsssss! ocorreu um erro","",$resp["exception"]);#case error
            

        return $resp;    
    }    

    public function lists(){

        #show branchoffice general blade
        $resp=$this->registermodel->lists();

        $resp = json_decode(json_encode($resp),true); #convert stdclass for array   



       if($resp["success"] AND $resp["count"]>0 AND $resp["exception"] == null)
            $resp= $this->getMessage->getServiceResponse(TRUE,"Curso(s) Carregado(s) com Sucesso!","",$resp);#case success
        else if($resp["query"] == 0)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Oppsssss! Curso(s) não encontrado(s)","",$resp);#case error
        else if ($resp["exception"] != null)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Opsss! erro ao deletar Curso!","",$resp["exception"]);#case empty
            

        return $resp;     

        
    }


    public function view($id){

        #show company general blade
        $resp=$this->registermodel->view($id);

       #echo "<pre>" ,print_r($resp["query"][0]->id);exit;        

        if(count($resp)>0){

            #exits company show blade
            return $this->getMessage->getServiceResponse(TRUE,"","",$resp);
            

          }else{

            #not exist company 
			return $this->getMessage->getServiceResponse(FALSE,"","",$resp);
            

        }   
        
    }





}    