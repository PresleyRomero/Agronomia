
//---------------------------*************ARCHIVO PARA FUNCIONES GENERALES (AMBOS TIPOS DE USUARIOS)*****************----------------------------

$('#btnconfiguracion').click(function (){
    $('#modal-configuracion').modal();
});

$('#btncambiarpass').click(function (){
    var passactual=$('#txtpassactual');
    var passnew=$('#txtpassnew');
    var passconfirma=$('#txtpassconfirma');
    if(passnew.val()==""){
        $('#mensaje-pass').addClass('alert alert-warning').html("Campos vacíos no permitidos");
        setTimeout(function(){ $('#mensaje-pass').removeClass('alert alert-warning').html("");},3000);
    }else{
        if (passnew.val()!=passconfirma.val()){
            $('#mensaje-pass').addClass('alert alert-danger').html("La contraseñas no coinciden");
            setTimeout(function(){ $('#mensaje-pass').removeClass('alert alert-danger').html("");},3000);
        }else{
            $.ajax({            
                url: '../COperador',
                data: {op:"modificarpass",txtpassactual:passactual.val(),txtpassnew:passnew.val()},
                success: function(resultado){  
                    console.log(resultado);
                    if(resultado=="true"){
                        $('#mensaje-pass').addClass('alert alert-success').html("Contraseña cambiada");
                        passactual.val("");
                        passnew.val("");
                        passconfirma.val("");
                    }else{
                        $('#mensaje-pass').addClass('alert alert-danger').html("La contraseña actual es incorrecta");
                        setTimeout(function(){ $('#mensaje-pass').removeClass('alert alert-danger').html("");},3000);
                    }
                }
            });
        }
    }   
});