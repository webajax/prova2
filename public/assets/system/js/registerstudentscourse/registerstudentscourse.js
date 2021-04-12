$(document).ready(function() {

    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 1000
    });


    $(document).on("click",".btn-add-courses" ,function(){
        
        $('#tablecoursesmodal').text('');
        var id = $(this).data('value');
        $("#idstudent-modal").val(id);
        getRegisterCourses(id);

    })

    var idr ;

    $(document).on('click', '.edit-register-list', function() {
         idr = $(this).data('value');  

         
        var url=window.location.href+'/view';

        $.ajax({
            cache:false,
            type: 'GET',
            url: url,
            data: {id:  idr},
            dataType: "json",
            success: function(data) {  


            $('#select-course-modal-edit')
              .find('option')
              .remove()
              .end();

             if(data.custom.query[0].ativo == 0){   
                
                $('#select-course-modal-edit').append($('<option>', { 
                    value: "1",
                    text : "Não" 
                })); 

                $('#select-course-modal-edit').append($('<option>', { 
                    value: "1",
                    text : "Sim" 
                }));                 

             }else{
                 console.log("aaaa")
                $('#select-course-modal-edit').append($('<option>', { 
                    value: "1",
                    text : "Sim" 
                }));   

                $('#select-course-modal-edit').append($('<option>', { 
                    value: "0",
                    text : "Não" 
                }));                              
             }   

                
            } 
        });

                
    });




    $('#btn-edit-register').on('click',function(){


        //token json POST
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });     
    
        var url=window.location.href+'/edit';    
    
        var data = {    
            'id'    : idr ,
            'ativo' : $('#select-course-modal-edit').val(),

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


    $(document).on("click",".bt-del-courses" ,function(){


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


 $(document).on("click",".addcourses" ,function(){

        var idcourses = $('#select-courses-modal').val();
        var idstudent = $('#idstudent-modal').val();
        var datenow   = $('#date-now').val();

        var url=window.location.href+'/add';
        
        url = url.replace("courses","register");

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });   
        
        var data = {
            'curso_id'     : idcourses,
            'aluno_id'     : idstudent,
            'data_admissao': datenow ,
            'ativo'        : 0
        };




        if(idcourses == ""){
            validateFields('select-courses-modal','Cursos');
            return
        }
        
        if(idstudent == ""){
            validateFields('students','Aluno');
            return
        }        

        if(datenow == ""){
            validateFields('date-now','Data de Admissão');
            return
        } 

        $('#tablecourses').text('');

        $.ajax({
            cache:false,
            type: 'POST',
            url: url,                   
            data: {data:  data},
            dataType: "json",
            beforeSend: function(){
                $('body').css('cursor', 'progress')
            },
            success: function(data) {
                $('body').css('cursor', 'auto');

                getRegisterCourses(idstudent);

                window.setTimeout(function(){
                                location.reload();
                }, 3000); 


            }
        });

    });

})    



function getRegisterCourses(id){


    var url=window.location.href;


    url = url.replace("register","register/find");

 
    $('#tablecoursemodal').html('');
    //$('#notHave').html('');

    console.log(url)

        $.ajax({
            cache:false,
            type: 'GET',
            url: url,
            data: {id:  id},
            dataType: "json",

            success: function(data) {

                $('body').css('cursor', 'auto')
                $('#idstudent-modal').val(id);


               /* if(data["list"]["custom"]["count"] > 0){
                    $.each( data["list"]["custom"]["query"], function( key, value ) {
                        $('#select-userdepartament-modal').append('\
                            <option value="'+value.id+'">'+value.namedepartament+'</option>\
                        ');
                    });
                }else{
                    $('#select-userdepartament-modal').append('\
                            <option disabled >Sem times a adicionar</option>\
                        ');
                }*/
                
                if(data["custom"]["count"] > 0){
                    $.each( data["custom"]["query"], function( key, value ) {
 
                        $('#tablecoursesmodal').append('\
                        <tr style="position: relative;max-height: -5px">\
                            <td class="d-none">'+value.id+'</td>\
                            <td >'+value.coursename+'</td>\
                            <td >'+value.data_admissao+'</td>\
                            <td style="text-align: center" colspan="2">\
                                <button type="button" class="btn btn-danger btn-sm bt-del-courses" data-value="'+value.id+'"><i class="fas fa-trash"></i></button>\
                            </td>\
                        </tr>\
                        ');
                    });

                }else{
                    $('#tablecoursesmodal').append('\
                        <tr style="position: relative;max-height: -5px">\
                            <td colspan="2">Sem Registro</td>\
                        </tr>\
                        ');
                }

              
                
            }
        });
     }  