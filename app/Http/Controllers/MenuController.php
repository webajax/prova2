<?php

namespace App\Http\Controllers;


#Autor: André Camargo
#use App\Services\StudentsService;
use Illuminate\Http\Request;
#use App\Services\UtilService;
use View;
use Session;


class MenuController extends Controller{
    
    #protected $studentsservice;
   
    #dependency injection
    #public function __construct(StudentsService $studentsService){
    public function __construct(){ 
        #change service construct
        #$this->studentsservice = $studentsService;
    
    }

    public function index(){   

        $menus = array();

        $x = 0;

        while($x<=3){
            
              if($x==1){  
                $menus[] = array(
                    "color_text"  => "white",
                    "name"        => "Alunos",
                    "link"        => "students",
                    "color"       => "red",
                    "icon_module" => "list",

                );
              }  

              if($x==2){  
                $menus[] = array(
                    "color_text"  => "white",
                    "name"        => "Matrícula",
                    "link"        => "register",
                    "color"       => "red",
                    "icon_module" => "edit",                    
                );
              }
                
              if($x==3){  
                $menus[] = array(
                    "color_text"  => "white",
                    "name"        => "Cursos",
                    "link"        => "course",
                    "color"       => "red",
                    "icon_module" => "pen",                    
                );
              } 

           $x++;    
        }        
    
        $resp=array(
            'menus'    => $menus,
            'page'     => 'index.index'
        );

        session(['resp'     => $resp]);
        session(['menus'    => $menus]);


        return View::make('templates.default')
        ->with('resp', $resp)
        ->with('page', $resp['page']);      
    	
    }







}    