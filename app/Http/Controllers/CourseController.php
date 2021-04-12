<?php

namespace App\Http\Controllers;


#Autor: André Camargo
use App\Services\CourseService;
use Illuminate\Http\Request;
#use App\Services\UtilService;
use View;
use Session;


class CourseController extends Controller{
    
    protected $courseservice;
   
    #dependency injection
    public function __construct(courseService $courseService){
        #change service construct
        $this->courseservice = $courseService;
    }

    public function index(){
        
        $resp=array(
            'resp'     =>  session('resp'),
            'menus'    =>  session('menus'),
            'list'     =>  $this->courseservice->lists(),            
            'page'     => 'course.course'
        );
        


        return View::make('templates.default')
        ->with('resp', $resp)
        ->with('page', $resp['page']);        

    }

    public function add(){

        $data = $_REQUEST['data'];

        $resp = $this->courseservice->add($data);
        

        echo json_encode($resp); 

    }

    public function view(){



        $id = $_REQUEST['id'];
        $resp = $this->courseservice->view($id);

        echo json_encode($resp); 

    }


	public function edit(){


        $data = $_REQUEST['data'];
        $resp = $this->courseservice->edit($data);

        echo json_encode($resp); 

    }



    public function find(){

        $id = $_REQUEST['id'];
        $resp = $this->courseservice->find($id);

        echo json_encode($resp); 

    }



    public function del(){

        $id = $_REQUEST['id'];
        
        $data=$this->courseservice->del($id); 

        
        echo json_encode($data); 
    }



}    