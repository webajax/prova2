<?php

namespace App\Models;


# Autor: André Camargo

use Eloquent;
use DB;


use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class RegisterModel extends Eloquent{
     
     /**
     * @var bool
     */
    public $timestamps = false;

    #name table
    protected $table='cursoprova.matriculas';    


    public function add($data){

      try{

         # echo "<pre>" ,print_r($data);exit;

         $query = RegisterModel::insert($data);
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


          $query= RegisterModel::where('id', '=', $data["id"])->update(['ativo' => $data["ativo"],'updated_at' => now()]); 

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
         $query= DB::table('cursoprova.matriculas')->select('*')->where('id','=', $id)->get();


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

        #$query= RegisterModel::select('*')
        #->orderBy('id','asc')
        #->get();

        $sql = "SELECT c.nome as coursename ,a.nome studentname,m.id ,m.ativo,m.data_admissao FROM cursoprova.matriculas m";
        $sql = $sql ." INNER JOIN cursoprova.alunos a ON a.id = m.aluno_id "; 
        $sql = $sql ." INNER JOIN cursoprova.cursos c ON c.id = m.curso_id ";
        $sql = $sql ." order by m.id asc ";


        $query = DB::select($sql);

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
        $query= DB::table('cursoprova.matriculas')->where('id', '=', $id)
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
          'query'     => $query,
          'success'   => FALSE
        );
        return $query;

    }


  }


    public function find($id){

      try{

        #$query= RegisterModel::select('*')
        #->orderBy('id','asc')
        #->get();

        $sql = "SELECT c.nome as coursename ,a.nome studentname,m.id ,m.ativo,m.data_admissao FROM cursoprova.matriculas m";
        $sql = $sql ." INNER JOIN cursoprova.alunos a ON a.id = m.aluno_id "; 
        $sql = $sql ." INNER JOIN cursoprova.cursos c ON c.id = m.curso_id ";
        $sql = $sql ." WHERE m.aluno_id = $id ";
        $sql = $sql ." order by m.id asc ";


        $query = DB::select($sql);

        #->toSql();
       #echo "<pre>",print_r($query);exit;

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


    public function updateRegister($data){
      try{

          $query= RegisterModel::where('id', '=', $data["id"])->update(['email' => $data["email"],'nome' => $data["nome"]]); 

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