<table   class="table table-responsive-sm table-bordered table-striped table-sm list-datatable" style="width: 100%"  >
    <thead>
        <tr >
            <th class="d-none" >#</th>
            <th>Alunos</th>
            <th style="width: 10%;text-align: center">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($resp["students"]["custom"]["query"] as $students)
            <tr style="position: relative;max-height: -5px" class="id-student" data-value="{{ $students['id'] }}">
                <td class="d-none"> {{ $students["id"] }}</td>
                <td >{{ $students["nome"] }}</td>
                <td style="text-align: center" colspan="2">
                    <button type="button" class="btn btn-success btn-sm btn-add-courses" data-toggle="modal" data-target="#modal-courses" data-value="{{$students['id']}}"><i class="fas fa-plus"></i></button>
                </td> 
            </tr>
        @endforeach            
    </tbody>  
</table> 