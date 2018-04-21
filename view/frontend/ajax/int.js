
$('#btnregistrar').click( function() {
      alert("hola");        
    var dni=$.trim($('#txtdni').val());
    var nombres=$('#txtnombres').val().toUpperCase();    
    var apellidopat=$('#txtapellidopat').val().toUpperCase();
    var apellidomat=$('#txtapellidomat').val().toUpperCase();
    var usuario=$('#txtusuario').val();
    var contrasenia=$('#txtcontrasenia').val();
    var tipo=$('#cbtipo').val();

    var datos={"dni":dni,"nombres":nombres,"apellidopat":apellidopat,"apellidomat":apellidomat,"usuario":usuario,"contrasenia":contrasenia,"tipo":tipo};
    console.log("entré");
    $.ajax({        
        type: 'POST',
        url: '../controller/CIntegrante.php',
        data: {"op":"registrar","datos":datos},       
        success: function(resultado){     
            console.log(resultado);            
            console.log("que sucedeeeeeeeeeeeeeeeeeeeeee");  
            alert("llegará");
        }
    });
    
});