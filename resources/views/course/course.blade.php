<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row" style="height:  15px;width: 100%;margin-top: 45px;" >
          <div class="col-sm-6">
            <h2>Cursos</h2>
          </div>
          <div class="col-sm-7" style="margin-left: -10%">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cursos</li>
              
            </ol>
          </div>
          <div style="position: relative;top:-200%;margin-left: 93%;z-index: 3" >
            <button type="button"   class="btn  btn-sm  btn-danger "  data-toggle="modal" id="bt-open-modal-add" data-target="#modal-add" >Adicionar</button>
          </div>
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
                                <a class="nav-link active" id="tab-company" data-toggle="pill" href="#custom-tabs-category" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Cursos</a>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade active show" id="custom-tabs-category" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                <!--start content-->
                                <div class="card"  >
                                    <div class="card-body div-list" style="position:relative;margin-top: -0.2%;overflow-y: auto;height: 520px;">

                                        @include('course.courselist') <!--page list 'categorieslist.blade.php' ticket-->                                        
                                     </div>
                                </div>
                            <!--end-->
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



@include('course.coursemodals') 
<script src="<?php echo URL::to('assets/system/js/global.js') ?>"></script><!--validate fields-->
<script src="<?php echo URL::to('assets/system/js/courses/courses.js') ?>"></script>
