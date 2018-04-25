
function cargarParticipantes() {   
    //$('#tblintegrante').DataTable().destroy(); //obtiene una instancia del datatable y la destruye 
    var idproyecto=1;//$('#txtidproyecto').val();
    $.ajax({      
        type: 'POST',
        url: '../controller/CProyecto.php',
        data: {"op":"listarParticipantes","idproyecto":idproyecto},
        // beforeSend: function () { preloader();},//$('#tbody-integrantes').html('<tr><td colspan=6 class=center><h5> Cargando...</h5></td></tr>')},
        success: function(resultado){         
            //console.log(resultado);
            if(resultado=="vacio"){ }
            else{                
                var lstparticipantes=JSON.parse(resultado);            
                var $select=$('#cbparticipantes').html('');
                $select.append(`<option value="" disabled selected>Elige participante</option>`);
                for (var i = 0; i < lstparticipantes.length; i++) {                    
                    $select.append(`<option value="${lstparticipantes[i]["idintegrante"]}"> ${lstparticipantes[i]["nombre"]} </option>`);
                } 
                $('select').formSelect(); //se necesita inicializar por cada select generado dinamicamente     
            }
        }
    });
}

$('#btnregistrar').click(function(){         
    var coordx=$.trim($('#txtcoordx').val());
    var coordy=$('#txtcoordy').val().toUpperCase();    
    var altitud=$('#txtaltitud').val().toUpperCase();
    var fecha=$('#txtfecha').val().toUpperCase();
    var hora=$('#txthora').val();
    if (hora.substr(6)=="PM") { hora=(Number(hora.substr(0,2))+12)+hora.substr(2,3); }    
    var localidad=$('#txtlocalidad').val();
    var idintegrante=$('#cbparticipantes').val();
    var datos={"coordx":coordx,"coordy":coordy,"altitud":altitud,"fecha":fecha,"hora":hora,"localidad":localidad,"idintegrante":idintegrante};        
    $.ajax({        
        type: 'POST',
        url: '../controller/CPunto.php',
        data: {"op":"registrar",datos},       
        success: function(resultado) {     
            console.log(resultado);   
            if (resultado=="true") {
                $('#form-punto input').val("");
                 // cargarTabla();                
            }else{
                alert("No se pudo registrar: "+resultado);
            }            
        }
    });
   
});


