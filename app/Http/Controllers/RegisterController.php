<?php

namespace App\Http\Controllers;


#Autor: André Camargo
use App\Services\RegisterService;
use App\Services\CourseService;
use App\Services\StudentsService;
use Illuminate\Http\Request;
#use App\Services\UtilService;
use View;
use Session;


class RegisterController extends Controller{
    
    protected $registerservice;
    protected $courseservice;
    protected $studentsservice;

    #dependency injection
    public function __construct(registerService $registerService,courseService $courseService,studentsService $studentsService){
        #change service construct
        $this->registerservice = $registerService;
        $this->courseservice   = $courseService;
        $this->studentsservice = $studentsService;
    }

    public function index(){
        
        $resp=array(
            'resp'     =>  session('resp'),
            'menus'    =>  session('menus'),
            'list'     =>  $this->registerservice->lists(), 
            'course'   =>  $this->courseservice->lists(),
            'students' =>  $this->studentsservice->lists(),            
            'page'     => 'register.register'
        );

        #echo "<pre>" ,print_r($resp);
        #exit;

        return View::make('templates.default')
        ->with('resp', $resp)
        ->with('page', $resp['page']);        

    }

    public function add(){

        $data = $_REQUEST['data'];

        $resp = $this->registerservice->add($data);
        

        echo json_encode($resp); 

    }

    public function view(){



        $id = $_REQUEST['id'];
        $resp = $this->registerservice->view($id);

        echo json_encode($resp); 

    }


	public function edit(){


        $data = $_REQUEST['data'];

        $resp = $this->registerservice->edit($data);

        echo json_encode($resp); 

    }



    public function find(){

        $id = $_REQUEST['id'];

        $resp = $this->registerservice->find($id);

        echo json_encode($resp); 
    }



    public function del(){

        $id = $_REQUEST['id'];
        
        $data=$this->registerservice->del($id); 

        
        echo json_encode($data); 
    }



}    