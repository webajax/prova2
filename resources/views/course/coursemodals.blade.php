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
                            <span class="input-group-text"><i class="fas fa-users"></i></span>
                            <input type="text" class="form-control" id="name-add"  name="name-add" placeholder="Nome do Curso">
                        </div>
                    </div>
                </div>                
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-check"></i></span>
                            <input type="date" class="form-control" id="date-init-add"  name="date-init-add" placeholder="Data Inicial">
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
                            <span class="input-group-text"><i class="fas fa-list"></i></span>
                            <input type="text" class="form-control" id="nameCourse-edit" name="nameCourse-edit">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-list"></i></span>
                            <input type="text" disabled class="form-control" id="dateInitCourse-edit" name="dateInitCourse-edit">
                        </div>
                    </div>
                </div>
            </div>            

        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-danger" id="btn-edit" >Salvar</button>
        </div>
    </div>
</div>    
</div>

<!--modal add -->
<div class="modal fade" id="modal-user"   >
    <div class="modal-dialog" style="max-width: 900px;margin-left: 25%">
        <div class="modal-content" >
            <div class="modal-header" >
                <h4 class="modal-title" id="title-modal-add">Escolha a(s) Curso(s) do Usuário(s) </h4>
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
                                    <label for="notHave" >Escolha a(s) Curso(s)</label>
                                    <input type="hidden" id="idusercourses" value="">
                                    <select class="form-control" id="select-usercourses-modal">
                                         @foreach ($resp["list"]["custom"]["query"] as $coursesmodal)

                                             <option  value="{{$coursesmodal['id']}}" > {{$coursesmodal["nome"]}}</option>

                                         @endforeach
                                    </select>
                                </div>
                                <div class="col-1">
                                    <button type="button" class="btn btn-success addcoursesuser"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                            </div>
                        </form>
                        <table   class="table table-responsive-sm table-bordered table-striped table-sm " style="width: 100%"  >
                            <thead>
                                <tr >
                                    <th class="d-none" >#</th>
                                    <th>Curso(s)</th>
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

<!--modal add task-283 -->
<div class="modal fade" id="modal-courses"   >
    <div class="modal-dialog" style="max-width: 900px;margin-left: 25%">
        <div class="modal-content" >
            <div class="modal-header" >
                <h4 class="modal-title" id="title-modal-add">Escolha a(s) Curso(s) do(s) Times(s) </h4>
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
                                    <label for="notHave" >Escolha a(s) Curso(s)</label>
                                    <input type="hidden" id="idteamcourses" value="">
                                    <select class="form-control" id="select-teamcourses-modal">
                                         @foreach ($resp["list"]["custom"]["query"] as $coursesmodal)

                                             <option  value="{{$coursesmodal['id']}}" > {{$coursesmodal["name"]}}</option>

                                         @endforeach
                                    </select>
                                </div>
                                <div class="col-1">
                                    <button type="button" class="btn btn-success addcoursesteam"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                            </div>
                        </form>
                        <table   class="table table-responsive-sm table-bordered table-striped table-sm " style="width: 100%"  >
                            <thead>
                                <tr >
                                    <th class="d-none" >#</th>
                                    <th>Curso(s)</th>
                                    <th style="width: 10%;text-align: center">Ações</th>
                                </tr>
                            </thead>
                            <tbody id="tableteamcoursesmodal">
                                          
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