$(document).ready(function() {

    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 1000
    });

    $(document).on('click', '.edit-course', function() {
       
        $('#nameCourse-edit').val('');
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

                    //format date
                    var dateupdate                  = new Date(data.custom.query[0].data_inicio);
                    var day                         = addZero(dateupdate.getDate());
                    var month                       = addZero(dateupdate.getMonth() + 1);
                    var year                        = dateupdate.getFullYear();
                    var hour                        = addZero(dateupdate.getHours());



                    //created first rows dinamic
                   var  created = day + "/" + month + "/" + year ; // + ":" + seconds;

                    console.log(created);

                $('#nameCourse-edit').val(data.custom.query[0].nome);
                $('#dateInitCourse-edit').val(created);
                $("#id-modal-edit").val(id);    
            } 
        });
            
    });




    $('#btn-edit').on('click',function(){

        //token json POST
        /*$.ajaxSetup({
            headers:{'X-CSRF-Token': '{{ csrf_token() }}'}
        });*/

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });   
    
        var url=window.location.href+'/edit';    
        //validate Fields
        if($('#nameCourse-edit').val() == "" ){
            //first param name field error and second parameter name BOX message 
            validateFields('nameCourse-edit','Nome do Curso');
            return;      
        }    
    
        if($('#dateInitCourse-edit').val() == "" ){
            //first param name field error and second parameter name BOX message 
            validateFields('dateInitCourse-edit','Data Inicial');
            return;      
        }    
 

        var data = {    
            'id'         : $('#id-modal-edit').val(),
            'nome'       : $('#nameCourse-edit').val(),
            'data_inicio': $('#dateInitCourse-edit').val(),
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
                    $('#nameCourse-edit').val('');
                    $('#dateInitCourse-edit').val('');

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


        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });  
        
        var id=$(this).data('value');           

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





    $('#btn-add').on('click',function(){

        //token json POST
        /*$.ajaxSetup({
            headers:{'X-CSRF-Token': '{{ csrf_token() }}'}
        });*/

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });           
        
        var url=window.location.href+'/add';    
        //validate Fields
        if($('#name-add').val() == "" ){
            //first param name field error and second parameter name BOX message 
            validateFields('name-add','Nome do Curso');
            return;      
        }    

        if($('#date-init-add').val() == "" ){
            //first param name field error and second parameter name BOX message 
            validateFields('date-init-add','Data Início');
            return;      
        }

       
        
        var data_add = {
            'nome'        :$('#name-add').val(),
            'data_inicio' :$('#date-init-add').val(),
          
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
                    $('#email-add').val('');
                    $('#pass-add').val('');

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

});

  //add o date hour
  function addZero(i) {
    if (i < 10) {
      i = "0" + i;
    }
    return i;
  }