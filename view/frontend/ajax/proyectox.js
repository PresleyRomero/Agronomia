cargarProyectos();
cargarRegiones();


function cargarProyectos(){
    $.ajax({        
        type: 'POST',
        url: '../controller/CProyecto.php',
        data: {"op":"listarproyectos"},       
        success: function(resultado) {   
            if(resultado=="vacio"){ }
            else{
                var lst=JSON.parse(resultado);            
                var $div=$('#div-proyectos').html('');
                var j=0;
                while( j<lst.length ){
                    $div.append(`<div class="row" id="row-${j}">`);
                    var $row=$(`#row-${j}`);                    
                    for (var i = j; i < j+3; i++) {      
                        if(i<lst.length){              
                            $row.append(`                            
                                <div class="col s12 m6 l4">
                                  <div class="card red darken-1">
                                    <div class="card-content white-text">
                                      <span class="card-title">PROYECTO ${lst[i]["codigo"]}</span>
                                      <p class="center">${lst[i]["nombre"]}</p>
                                    </div>
                                    <div class="card-action">
                                      <a href="proyect_space.php?idproy=${lst[i]["idproyecto"]}" class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons">add</i></a>
                                    </div>
                                  </div>
                                </div>
                            `);
                        }   
                    }
                    $row.append(`</div>`);
                    j=j+3;
                }          
            }       
        }
    });    
}

function cargarRegiones() {        
    $.ajax({        
        type: 'POST',
        url: '../controller/CAuxiliar.php',
        data: {"op":"listarRegiones"},       
        success: function(resultado) {   
            if(resultado=="vacio"){ }
            else{
                var lst=JSON.parse(resultado);            
                var $cb=$('#cbregion').html('');
                $cb.append(`<option value="" disabled selected>REGIÓN</option>`);
                for (var i = 0; i < lst.length; i++) {                    
                    $cb.append(`<option value=${lst[i]["ubigeo"]}>${lst[i]["nombre"]}</option>`);
                }
                $('select').formSelect();                  
            }       
        }
    });   
}

$('#cbregion').on('change', function(){
    var prefijo=$('#cbregion').val().substr(0,2);
    $.ajax({            
        type: 'POST',
        url: '../controller/CAuxiliar.php',
        data: {"op":"listarProvincias","prefijo":prefijo},     
        success: function(resultado){
            $('#cbprovincia').html('').append('<option value="" disabled selected>PROVINCIA</option>'); 
            $('#cbdistrito').html('').append('<option value="" disabled selected>DISTRITO</option>');
            if(resultado=="vacio"){ }
            else{
                var lst=JSON.parse(resultado);     
                for (var i = 0; i < lst.length; i++) {                    
                    $('#cbprovincia').append(`<option value=${lst[i]["ubigeo"]}>${lst[i]["nombre"]}</option>`);
                }                 
            }
            $('select').formSelect(); 
        }
    });   
}); 

$('#cbprovincia').on('change', function(){
    var prefijo=$('#cbprovincia').val().substr(0,4);
    $.ajax({            
        type: 'POST',
        url: '../controller/CAuxiliar.php',
        data: {"op":"listarDistritos","prefijo":prefijo},     
        success: function(resultado){
            if(resultado=="vacio"){ }
            else{
                var lst=JSON.parse(resultado);     
                var $cb=$('#cbdistrito').html('');
                $cb.append(`<option value="" disabled selected>DISTRITO</option>`);
                for (var i = 0; i < lst.length; i++) {                    
                   $cb.append(`<option value=${lst[i]["idlugar"]}>${lst[i]["nombre"]}</option>`);
                }                 
            }
            $('select').formSelect(); 
        }
    });    
}); 



$('#btnregistrar').click(function(){     
    var nombre=$('#txtnombre').val().toUpperCase();    
    var idlugar=$('#cbdistrito').val();
    var datos={"nombre":nombre,"idlugar":idlugar};    
    $.ajax({        
        type: 'POST',
        url: '../controller/CProyecto.php',
        data: {"op":"registrar",datos},       
        success: function(resultado) {     
            if (resultado=="true") {
                $('#form-proyecto input').val("");                    
            }else{
                alert("No se pudo registrar: "+resultado);
            }            
        }
    })   
});



