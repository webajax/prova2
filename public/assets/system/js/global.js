

function validateCombo(name,field){

        var btn  = $(this),
        show = btn.data('show'),
        hide = btn.data('hide');

        $('.'+name).addClass('is-invalid');

    $.jAlert({

      'title':'Oppssss!',
      'content':'O campo '+ field + ' não pode ser vazio.',
          'theme': 'yellow',
          'showAnimation' : show,
          'hideAnimation' : hide,
          'btns': { 'text': 'Fechar' },       
                'onOpen': function(alert){
                    window.setTimeout(function(){
                        alert.closeAlert();
                    }, 2000);
                }
       });




}

function validateFields(name,field){

        var btn  = $(this),
        show = btn.data('show'),
        hide = btn.data('hide');

        $('#'+name).addClass('is-invalid');

    $.jAlert({

      'title':'Oppssss!',
      'content':'O campo '+ field + ' não pode ser vazio.',
          'theme': 'yellow',
          'showAnimation' : show,
          'hideAnimation' : hide,
          'btns': { 'text': 'Fechar' },       
                'onOpen': function(alert){
                    window.setTimeout(function(){
                        alert.closeAlert();
                    }, 2000);
                }
       });




}

var table = $('.table.list-datatable').DataTable({
      "dom": 'Bfrtip',
      "buttons": [ 'excel',
                   'csv',
                   {
                      extend: 'pdf',
                      orientation: 'landscape',
                      pageSize: 'LEGAL'
                    } 
      ],
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "info": true,
      "autoWidth": false,
      "displayLength": 20,
      "order": [],
          "columnDefs": [ {
              'targets': [1],
              'orderable': true, 
          }],
      "language": {
        "sEmptyTable": "Nenhum registro encontrado",
        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
        "sInfoPostFix": "",
        "sInfoThousands": ".ssss",
        //"sLengthMenu": 5,
        "sLoadingRecords": "Carregando...",
        "sProcessing": "Processando...",
        "sZeroRecords": "Nenhum registro encontrado",
        "sSearch": "<i class='fas fa-search'></i>",

      },
      "oAria": {
          "sSortAscending": ": Ordenar colunas de forma ascendente",
          "sSortDescending": ": Ordenar colunas de forma descendente"
      } 


    });





function message(thiss,message,color){

    var btn  = thiss,
      show = btn.data('show'),
      hide = btn.data('hide');


  $.jAlert({

    'title':'Oppssss!',
    'content':message,
        'theme': color,
        'showAnimation' : show,
        'hideAnimation' : hide,
        'btns': { 'text': 'Fechar' },       
              'onOpen': function(alert){
                  window.setTimeout(function(){
                      alert.closeAlert();
                  }, 2000);
              }
     });
}

function isCNPJValid(cnpj) {
 
    cnpj = cnpj.replace(/[^\d]+/g, '');
    if (cnpj == '') return false;
    if (cnpj.length != 14)
        return false;
    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" ||
        cnpj == "11111111111111" ||
        cnpj == "22222222222222" ||
        cnpj == "33333333333333" ||
        cnpj == "44444444444444" ||
        cnpj == "55555555555555" ||
        cnpj == "66666666666666" ||
        cnpj == "77777777777777" ||
        cnpj == "88888888888888" ||
        cnpj == "99999999999999")
        return false;

    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0, tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
        return false;

    tamanho = tamanho + 1;
    numeros = cnpj.substring(0, tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
        return false;



    return true;
}

function upload(file,idticket2,complfile){


      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 1000
      });

      var url=window.location.href; //reuse edit
      url = url.replace('#custom-tabs-response','');
      url = url.replace('ticket','uploadfiles/uploadfile');

        
        
        var fd = new FormData();
        fd.append("resume", file[0] );
        fd.append("idticket", file[0] , idticket2); ////file not repeat ticket
        fd.append("complfile", file[0] , complfile); //file not repeat responseticket
        fd.append("path", file[0] , $('#path').val()); //file not repeat responseticket
        fd.append("idticketoriginal", file[0] , idticket)


      //upload files
       $.ajax({
          cache:false,
          type: 'POST',
          url: url,
          data:fd,
          contentType: false,
          processData: false,
          dataType: "json",
          success: function(data) {

               if(data.success){//upload file success
                   originalfile = data.custom.originalfile;


                   Toast.fire({
                      type: 'success',
                      title: data.message
                   })

               }else{
                   
                   Toast.fire({
                      type: 'DANGER',
                      title: data.message
                   }) 

               }
         }

       });

       //end upload



}