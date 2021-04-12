<table   class="table table-responsive-sm table-bordered table-striped table-sm list-datatable" width="100%"  >
    <thead>
        <tr >
            <th style="width: 10%;" class="d-none" >#</th>
            <th>Nome</th>
            <th>Email</th>
            <th style="width: 10%;text-align: center" >Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($resp["list"]["custom"]["query"] as $students)
            <tr style="position: relative;max-height: -5px">
                <td class="d-none">{{$students["id"]}}</td>
                <td id="change{{$students['id']}}"><span id="categoria{{$students['id']}}">{{$students["nome"]}}</span></td>
                <td style="color: red"><span >{{$students["email"]}}</span></td>

                <td style="text-align: center" colspan="2">
                    <div class="btn-group">
                        <div  class="col-sm-4 mr-3">
                            <button type="button" class="btn btn-default btn-sm  edit-course"  data-toggle="modal" data-target="#modal-edit" data-value="{{$students['id']}}"><i class="fas fa-edit"></i></button>
                        </div>
                        <div  class="col-sm-1">
                            <button type="button" class="btn btn-danger btn-sm bt-del" data-value="{{$students['id']}}" ><i class="fas fa-trash"></i></button>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach               
    </tbody>  
</table>                                
