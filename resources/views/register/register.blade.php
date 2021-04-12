<?php  #dd($resp["course"]["custom"]["query"][0]["nome"]) ?>
<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row" style="height:  15px;width: 100%;margin-top: 45px;" >
          <div class="col-sm-6">
            <h2>Matrículas</h2>
          </div>
          <div class="col-sm-7" style="margin-left: -10%">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Matrículas</li>
              
            </ol>
          </div>
          <!--<div style="position: relative;top:-200%;margin-left: 93%;z-index: 3" >
            <button type="button"   class="btn  btn-sm  btn-danger "  data-toggle="modal" id="bt-open-modal-add" data-target="#modal-add" >Adicionar</button>
          </div>-->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <style type="text/css">

      .form-inline{
          display:block;
      }

       .dataTables_filter{
        position: relative ;        
      }

      .dataTables_length{
        position: relative;
      }

      .select2-selection__rendered {
          line-height: 16px !important;
      }


    </style>

    <div class="card"  >
        <!-- /.card-header -->
        <div class="card-body div-list" style="position:relative;margin-top: -0.2%;overflow-y: auto;height: 800px;">
        
            <div class="col-12 col-sm-6 col-lg-12">
                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="tab-company" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-company" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Matrículas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="tab-company" data-toggle="pill" href="#custom-tabs-userregister" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Matrículas x Alunos x Cursos</a>
                            </li>

                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                <!--start content-->
                                <div class="card"  >
                                    <div class="card-body div-list" style="position:relative;margin-top: -0.2%;overflow-y: auto;height: 520px;">

                                        <table   class="table table-responsive-sm table-bordered table-striped table-sm list-datatable" width="100%"  >
                                            <thead>
                                                <tr >
                                                    <th style="width: 10%;" class="d-none" >#</th>
                                                    <th  >Curso</th>
                                                    <th  >Aluno</th>
                                                    <th  >Status</th>
                                                    <th  >Data Admissão</th>
                                                    <th style="width: 10%;text-align: center" >Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @isset($resp["list"]["custom"]["query"])  
                                                @foreach ($resp["list"]["custom"]["query"] as $register)
                                                    <tr style="position: relative;max-height: -5px">
                                                        <td class="d-none">{{$register["id"]}}</td>
                                                        <td id="change{{$register['id']}}"><span id="register{{$register['id']}}">{{$register["coursename"]}}</span></td>
                                                        <td>{{$register["studentname"]}}</td>
                                                        @if($register["ativo"] == 0)
                                                          <td>Inativo</td>
                                                        @else
                                                          <td>Ativo</td>
                                                        @endif

                                                        <td>{{$register["data_admissao"]}}</td>
                                                        <td style="text-align: center" colspan="2">
                                                            <div class="btn-group">
                                                                <div  class="col-sm-4 mr-3">
                                                                    <button type="button" class="btn btn-default btn-sm  edit-register-list"  data-toggle="modal" data-target="#modal-edit" data-value="{{$register['id']}}"><i class="fas fa-edit"></i></button>
                                                                </div>
                                                                <div  class="col-sm-1">
                                                                    <button type="button" class="btn btn-danger btn-sm bt-del" data-value="{{$register['id']}}" ><i class="fas fa-trash"></i></button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach 
                                               @endisset 

                                            </tbody>  
                                        </table> 

                               
                                    </div>
                                </div>
                            <!--end-->
                            </div>

                            <div class="tab-pane fade div-bo" id="custom-tabs-userregister" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                <div class="card"  >
                                    <div class="card-body div-list" style="position:relative;margin-top: -0.2%;overflow-y: auto;min-height: 520px;">
                                       @include('register.registercourselist')  
                            
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
    
        </div>
        <!-- /.card-body -->
    </div>
</div>


@include('register.registermodals') 

<script src="<?php echo URL::to('assets/system/js/global.js') ?>"></script><!--validate fields-->
<script src="<?php echo URL::to('assets/system/js/register/register.js') ?>"></script>
<script src="<?php echo URL::to('assets/system/js/registerstudentscourse/registerstudentscourse.js') ?>"></script>