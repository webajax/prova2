<!--modal add -->
<div class="modal fade" id="modal-add"   >
    <div class="modal-dialog" style="max-width: 900px;margin-left: 25%">
        <div class="modal-content" >
            <div class="modal-header" >
                <h4 class="modal-title" id="title-modal-add">Adicionar </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-building"></i></span>
                                    <select class="form-control" id="select-course-modal">
                                         @foreach ($resp["course"]["custom"]["query"] as $course)
                                             <option  value="{{$course['id']}}" > {{$course["nome"]}}</option>
                                         @endforeach
                                    </select>
                            </div>
                        </div>
                    </div>                
                </div>
               <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-building"></i></span>
                                    <select class="form-control" id="select-course-modal">
                                         @foreach ($resp["students"]["custom"]["query"] as $students)
                                             <option  value="{{$students['id']}}" > {{$students["nome"]}}</option>
                                         @endforeach
                                    </select>
                            </div>
                        </div>
                    </div>                
                </div>                
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-building"></i></span>
                                <input type="date" class="form-control" id="name-add"  name="name-add" placeholder="Data Admissão">
                            </div>
                        </div>
                    </div>                
                </div>                
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger" id="btn-add" >Cadastrar</button>
            </div>
        </div>
    </div>
</div>

<!--modal edit -->
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog" style="max-width: 900px;margin-left: 25%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input type="hidden" id="id-modal-edit">
            <div class="modal-body">
                <!--line 1 -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <label for="notHave" >Status Ativo/Inativo</label><br>
                               

                                    <select class="form-control" id="select-course-modal-edit">
                                            
                                             <option value="1"  > Sim</option>
                                             <option value="0"  > Não</option>
                                        
                                    </select>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger" id="btn-edit-register" >Salvar</button>
            </div>
        </div>
    </div>    
</div>


  <!--modal add -->
    <div class="modal fade" id="modal-courses"   >
        <div class="modal-dialog" style="max-width: 900px;margin-left: 25%">
            <div class="modal-content" >
                <div class="modal-header" >
                    <h4 class="modal-title" id="title-modal-add">Escolha o(s) Cursos(s) </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" >
                    <div class="row">
                        <div class="col">
                            <form>
                                <div class="form-group">
                                    <div class="row d-flex align-items-end">
                                    <div class="col-11">
                                        <label for="notHave" >Escolha o(s) Curso(s)</label>
                                        <input type="hidden" id="idstudent-modal" value="">
                                        <select class="form-control" id="select-courses-modal">
                                             @foreach ($resp["course"]["custom"]["query"] as $course)
                                                 <option  value="{{$course['id']}}" > {{$course["nome"]}}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                 
                                    <div class="col-1">
                                        <button type="button" class="btn btn-success addcourses"><i class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="col-12">
                                        <label for="notHave" >Escolha a Data de Admissão</label><br>
                                        <input type="date" class="form-control" id="date-now" value="">
                                        
                                    </div> 
                                </div>
                                </div>
                            </form>
                            <table   class="table table-responsive-sm table-bordered table-striped table-sm " style="width: 100%"  >
                                <thead>
                                    <tr >
                                        <th class="d-none" >#</th>
                                        <th>Curso(s)</th>
                                        <th>Data de Admissão</th>
                                        <th style="width: 10%;text-align: center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody id="tablecoursesmodal">
                                              
                                </tbody>  
                            </table>
                        </div>                
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>