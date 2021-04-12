$(document).ready(function() {

    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 1000
    });

    $('#btn-add').on('click',function(){

        //token json POST
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });   
        
        var url=window.location.href+'/add';    
        //validate Fields
        if($('#name-add').val() == "" ){
            //first param name field error and second parameter name BOX message 
            validateFields('name-add','nome da categoria');
            return;      
        }    
        
        var data_add = {
            'name':$('#name-add').val()
        };               
    
        $.ajax({
            cache:false,
            type: 'POST',
            url: url,                   
            data: {data:  data_add},
            dataType: "json",
            success: function(data) {    
                if(data.success && data.redirect == ""){   
                    Toast.fire({
                        type: 'success',
                        title: data.message
                    })    
    
                    $('#name-add').val('');


                    window.setTimeout(function(){
                        location.reload();
                    }, 1000);

                }else{   
                    if(data.redirect=='1'){
                        Toast.fire({
                        type: 'warning',
                        title: data.message
                        })
                    }else{
                        Toast.fire({
                        type: 'danger',
                        title: data.message
                        })
                    }                                
                }
            }
        });
        
        return false; 
    
    });



    $(document).on('click', '.edit-register', function() {

  

        $('#nameDepartament-edit').val('');
        $("#id-modal-edit").val(''); 
        var id=$(this).data('value');
        var url=window.location.href+'/view';

        $.ajax({
            cache:false,
            type: 'GET',
            url: url,
            data: {id:  id},
            dataType: "json",
            success: function(data) {  
                $('#nameRegister-edit').val(data.custom.query[0].name);
                $("#id-modal-edit").val(id);    
            } 
        });
            
    });

    $('#btn-edit').on('click',function(){

        //token json POST
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });     
    
        var url=window.location.href+'/edit';    
        //validate Fields
        if($('#select-course-modal-edit').val() == "" ){
            //first param name field error and second parameter name BOX message 
            validateFields('select-course-modal-edit','Status Aluno');
            return;      
        }    
    
        var data = {    
            'id'          : $('#id-modal-edit').val(),
            'name'        : $('#nameDepartament-edit').val()
        };       
    
        $.ajax({
            cache:false,
            type: 'POST',
            url: url,                   
            data: {data:  data},
            dataType: "json",
            success: function(data) {   
                if(data.success && data.redirect == ""){
                    Toast.fire({
                        type: 'success',
                        title: data.message
                    })    
                    $('#nameDepartament-edit').val('');

                    window.setTimeout(function(){
                        location.reload();
                    }, 1000);
    
                }else{    
                    if(data.redirect=='1'){
                        Toast.fire({
                            type: 'warning',
                            title: data.message
                        })
                    }else{
                        Toast.fire({
                            type: 'danger',
                            title: data.message
                        })
                    }                      
                }
            }
        });
        return false;   
    });

    $(document).on("click",".bt-del" ,function(){

        var id=$(this).data('value');   

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });                 

        var url=window.location.href+'/del';

        var tr  = $(this),
          show    = tr.data('show'),
          hide    = tr.data('hide');

        //confirm yes no
        $.jAlert({
            'title':'Excluir?',
            'type':'confirm',
            'content':'Deseja realmente excluir ?',
            'theme': 'blue',
            'showAnimation' : show,
            'hideAnimation' : hide,
            'confirmBtnText': "Sim, com Certeza!",
            'denyBtnText': 'Não, Prefiro Não!',
            'onConfirm': function() {
                $.ajax({
                    cache:false,
                    type: 'POST',
                    url: url,
                    data: {id:  id},
                    dataType: "json",
                    success: function(data) {
                        if(data.success){
                            Toast.fire({
                              type: 'success',
                              title: data.message
                            })
                            
                            window.setTimeout(function(){
                                location.reload();
                            }, 3000);
                        }else{
                           Toast.fire({
                              type: 'DANGER',
                              title: data.message
                           })
                        }
                    }  
                });
            },
        });          
    });

});