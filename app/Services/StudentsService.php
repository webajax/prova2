<?php 

namespace App\Services;


# Autor: André Camargo

#injects
use App\Models\StudentsModel;
use App\Helpers\ServiceResponseHelper;

#input rules
class StudentsService  {
    
 
    protected $studentsmodel;
    protected $getmessage;

    #change injects
    function __construct(StudentsModel $studentsModel,ServiceResponseHelper $message) {
        $this->studentsmodel = $studentsModel;
        $this->getMessage    = $message;
    } 

    public function add($data){


    	$resp = $this->studentsmodel->add($data);   


        if($resp["success"] AND $resp["exception"] == null)
            $resp= $this->getMessage->getServiceResponse(TRUE,"Aluno Cadastrado com Sucesso!","",$resp);#case success
        else if($resp["exception"] != null)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Oppsssss! ocorreu um erro","",$resp["exception"]);#case error
 

        return $resp; 	

    }

    public function edit($data){


    	$resp=$this->studentsmodel->edit($data);

  
        if($resp["success"] AND $resp["exception"] == null)
            $resp= $this->getMessage->getServiceResponse(TRUE,"Aluno Salvo com Sucesso!","",$resp);#case success
        else if($resp["exception"] != null)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Oppsssss! ocorreu um erro","",$resp["exception"]);#case error
            

        return $resp;    
    }


    public function del($id){

        $resp=$this->studentsmodel->del($id);
  
        if($resp["success"] AND $resp["exception"] == null)
            $resp= $this->getMessage->getServiceResponse(TRUE,"Aluno Deletado com Sucesso!","",$resp);#case success
        else if($resp["exception"] != null)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Oppsssss! ocorreu um erro","",$resp["exception"]);#case error
            

        return $resp;    
    }    



    public function lists(){

        #show branchoffice general blade
        $resp=$this->studentsmodel->lists();


       if($resp["success"] AND $resp["count"]>0 AND $resp["exception"] == null)
            $resp= $this->getMessage->getServiceResponse(TRUE,"Aluno(s) Carregado(s) com Sucesso!","",$resp);#case success
        else if(count($resp["query"]) == 0)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Oppsssss! Aluno(s) não encontrado(s)","",$resp);#case error
        else if ($resp["exception"] != null)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Opsss! erro ao deletar Aluno!","",$resp["exception"]);#case empty
            

        return $resp;     

        
    }



    public function listsstudentsteam(){

        #show branchoffice general blade
        $resp=$this->studentsmodel->listsstudentsteam();

       

       if($resp["success"] AND $resp["count"]>0 AND $resp["exception"] == null)
            $resp= $this->getMessage->getServiceResponse(TRUE,"Aluno(s)  Carregado(s) com Sucesso!","",$resp);#case success
        else if(count($resp["query"]) == 0)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Oppsssss! Aluno(s)  não encontrado(s)","",$resp);#case error
        else if ($resp["exception"] != null)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Opsss! erro ao listar Aluno(s) !","",$resp["exception"]);#case empty
            

        return $resp;     

        
    }

     public function listsstudentsuser($iduser){

        #show branchoffice general blade
        $resp=$this->studentsmodel->listsstudentsuser($iduser);

       

       if($resp["success"] AND count($resp["count"])>0 AND $resp["exception"] == null)
            $resp= $this->getMessage->getServiceResponse(TRUE,"Aluno(s) Carregado(s) com Sucesso!","",$resp);#case success
        else if($resp["exception"] != null)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Oppsssss! ocorreu um erro","",$resp["exception"]);#case error
        else  if($resp["count"] == 0)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Opsss! categoria(s) não encontrado(s)!","",$resp);#case empty
            
           # echo "<pre>" ,print_r($resp);exit;    

        return $resp;     

        
    }

    public function view($id){

        #show company general blade
        $resp=$this->studentsmodel->view($id);

       #echo "<pre>" ,print_r($resp["query"][0]->id);exit;        

        if(count($resp)>0){

            #exits company show blade
            return $this->getMessage->getServiceResponse(TRUE,"","",$resp);
            

          }else{

            #not exist company 
			return $this->getMessage->getServiceResponse(FALSE,"","",$resp);
            

        }   
        
    }

    public function updateStatusStudents($data){

        $resp=$this->studentsmodel->updateStatusStudents($data);

        #echo "<pre>" ,print_r($data);exit;
  
        if($resp["success"] AND $resp["exception"] == null)
            $resp= $this->getMessage->getServiceResponse(TRUE,"Status Aluno Alterado com Sucesso!","",$resp);#case success
        else if($resp["exception"] != null)
            $resp= $this->getMessage->getServiceResponse(FALSE,"Oppsssss! ocorreu um erro","",$resp["exception"]);#case error
            

        return $resp;    
    }



}    