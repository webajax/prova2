<?php

namespace App\Http\Controllers;


#Autor: André Camargo
use App\Services\StudentsService;
use Illuminate\Http\Request;
#use App\Services\UtilService;
use View;
use Session;


class StudentsController extends Controller{
    
    protected $studentsservice;
   
    #dependency injection
    public function __construct(StudentsService $studentsService){
        #change service construct
        $this->studentsservice = $studentsService;
    }

    public function index(){
        
        $resp=array(
            'resp'     =>  session('resp'),
            'menus'    =>  session('menus'),
            'list'     =>  $this->studentsservice->lists(),            
            'page'     => 'students.students'
        );
        


        return View::make('templates.default')
        ->with('resp', $resp)
        ->with('page', $resp['page']);        

    }

    public function add(){

        $data = $_REQUEST['data'];

        $resp = $this->studentsservice->add($data);
        #echo "<pre>" ,print_r($resp);exit;

        echo json_encode($resp); 

    }

    public function view(){



        $id = $_REQUEST['id'];
        $resp = $this->studentsservice->view($id);

        echo json_encode($resp); 

    }


	public function edit(){


        $data = $_REQUEST['data'];
        $resp = $this->studentsservice->edit($data);

        echo json_encode($resp); 

    }



    public function lists(){

        #$resp = $this->studentsservice->lists();

        //response $resp;

    }



    public function del(){

        $id = $_REQUEST['id'];
        
        $data=$this->studentsservice->del($id); 

        
        echo json_encode($data); 
    }



}    