<?php

namespace App\Models;


# Autor: André Camargo

use Eloquent;
use DB;


use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class StudentsModel extends Eloquent{
     
     /**
     * @var bool
     */
    public $timestamps = false;

    #name table
    protected $table='cursoprova.alunos';    


    public function add($data){

      try{

         # echo "<pre>" ,print_r($data);exit;

         $data["senha"]      = base64_encode($data["senha"]);
         $data["created_at"] = now();

         $query = StudentsModel::insert($data);
         $query = array(
              'exception' => null,
              'query'     => $query,
              'success'   => TRUE,
              'lastid'    => DB::getPdo()->lastInsertId()
          );
          return $query;

      }catch(\Illuminate\Database\QueryException $exception){
        
          $query = array(
              'exception' => $exception->errorInfo,
              'query'     => "", 
              'success'   => FALSE
          );

          return $query;

       } 


    }


    public function edit($data){
      try{



          $query= StudentsModel::where('id', '=', $data["id"])->update(['nome' => $data["nome"],'email' => $data["email"],'updated_at' => now()]); 

          $query = array(
               'exception' => null,
               'query'     => $query,
               'success'   => TRUE
          );

           return $query;
      }catch(\Illuminate\Database\QueryException $exception){
          $query = array(
              'exception' => $exception->errorInfo,
              'query'     => "", 
              'success'   => FALSE
          );
          return $query;
      }
    }

    public function view($id){


      try{

          #select with join ELOQUENT if company exist show blade general ...
         $query= DB::table('cursoprova.alunos')->select('*')->where('id','=', $id)->get();


         #echo "<pre>" ,print_r($query);exit;
          $query=array(
            'exception' => null,
            'success'   => TRUE,
            'query'     => $query,
            'count'     => $query->count(), #number reg
          );

          return $query;

       }catch(\Illuminate\Database\QueryException $exception){
          $query=array(
            'exception' =>$exception->errorInfo,
            'query'     => false,
            'success'   => FALSE
          );
          return $query;
      }


      
    }

   
    #list company(s)

    public function lists(){

      try{

        $query= StudentsModel::select('*')
        ->orderBy('nome','asc')
        ->get();
        #->toSql();
       #echo "<pre>",print_r(count($query));exit;

        $query=array(
          'exception' => null,
          'success'   => TRUE,
          'query'     => $query,
          'count'     => count($query), #number reg
        );

         return $query;

       }catch(\Illuminate\Database\QueryException $exception){
          
          $query=array(
            'exception' =>$exception->errorInfo,
            'query'     => NULL,
            'success'   => FALSE
          );
          
          return $query;

      }        

  }


 
  public function del($id){

    try{
        #select with join ELOQUENT profiles menus ...
        $query= DB::table('cursoprova.alunos')->where('id', '=', $id)
        ->delete();

        #alter idcompany table user
        $query=array(
        'exception' =>null,
        'query'=> $query,
        'success' => TRUE
        );

        return $query;

    }catch(\Illuminate\Database\QueryException $exception){
        $query=array(
          'exception' =>$exception->errorInfo,
          'query'     => NULL,
          'success'   => FALSE
        );
        return $query;

    }


  }

    public function updateStudents($data){
      try{

          $query= StudentsModel::where('id', '=', $data["id"])->update(['email' => $data["email"],'nome' => $data["nome"]]); 

          $query = array(
               'exception' => null,
               'query'     => $query,
               'success'   => TRUE
          );

           return $query;
      }catch(\Illuminate\Database\QueryException $exception){
          $query = array(
              'exception' => $exception->errorInfo,
              'query'     => "", 
              'success'   => FALSE
          );
          return $query;
      }
    }


}    