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
                            <input type="text" class="form-control" id="name-add"  name="name-add" placeholder="Nome do Aluno">
                        </div>
                    </div>
                </div>                
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-check"></i></span>

                            <input type="text" class="form-control" id="email-add"  name="email-add" placeholder="Email">
                        </div>
                    </div>
                </div>                
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>

                            <input type="password" class="form-control" id="pass-add"  name="pass-add" placeholder="Email">
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
<div class="modal fade" id="modal-students-edit">
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
                            <input type="text" class="form-control" id="nameStudent-edit" name="namStudent-edit">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-check"></i></span>
                            <input type="text" class="form-control" id="emailStudent-edit" name="emailStudent-edit">
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
                <h4 class="modal-title" id="title-modal-add">Escolha a(s) Categoria(s) do Usuário(s) </h4>
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
                                    <label for="notHave" >Escolha a(s) Categoria(s)</label>
                                    <input type="hidden" id="iduserstudents" value="">
                                    <select class="form-control" id="select-userstudents-modal">
                                         @foreach ($resp["list"]["custom"]["query"] as $studentsmodal)

                                             <option  value="{{$studentsmodal['id']}}" > {{$studentsmodal["nome"]}}</option>

                                         @endforeach
                                    </select>
                                </div>
                                <div class="col-1">
                                    <button type="button" class="btn btn-success addstudentsuser"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                            </div>
                        </form>
                        <table   class="table table-responsive-sm table-bordered table-striped table-sm " style="width: 100%"  >
                            <thead>
                                <tr >
                                    <th class="d-none" >#</th>
                                    <th>Categoria(s)</th>
                                    <th style="width: 10%;text-align: center">Ações</th>
                                </tr>
                            </thead>
                            <tbody id="tablestudentsmodal">
                                          
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
<div class="modal fade" id="modal-students"   >
    <div class="modal-dialog" style="max-width: 900px;margin-left: 25%">
        <div class="modal-content" >
            <div class="modal-header" >
                <h4 class="modal-title" id="title-modal-add">Escolha a(s) Categoria(s) do(s) Times(s) </h4>
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
                                    <label for="notHave" >Escolha a(s) Categoria(s)</label>
                                    <input type="hidden" id="idteamstudents" value="">
                                    <select class="form-control" id="select-teamstudents-modal">
                                         @foreach ($resp["list"]["custom"]["query"] as $studentsmodal)

                                             <option  value="{{$studentsmodal['id']}}" > {{$studentsmodal["name"]}}</option>

                                         @endforeach
                                    </select>
                                </div>
                                <div class="col-1">
                                    <button type="button" class="btn btn-success addstudentsteam"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                            </div>
                        </form>
                        <table   class="table table-responsive-sm table-bordered table-striped table-sm " style="width: 100%"  >
                            <thead>
                                <tr >
                                    <th class="d-none" >#</th>
                                    <th>Categoria(s)</th>
                                    <th style="width: 10%;text-align: center">Ações</th>
                                </tr>
                            </thead>
                            <tbody id="tableteamstudentsmodal">
                                          
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