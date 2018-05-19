cargarRegiones();

function cargarRegiones() {        
    $.ajax({        
        type: 'POST',
        url: '../controller/CAuxiliar.php',
        data: {"op":"listarRegiones"},       
        success: function(resultado) {     
            console.log(resultado);   
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
    console.log(prefijo);
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
    console.log(prefijo);
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
            console.log(resultado);   
            if (resultado=="true") {
                $('#form-proyecto input').val("");                    
            }else{
                alert("No se pudo registrar: "+resultado);
            }            
        }
    })
   
});



//////////////// SCRIPT PARA PROYECT_SPACE /////////////////////////////////////////////////////////////////////

cargarIntegrantes();
cargarParticipantes();

function cargarParticipantes() {   
    //$('#tblintegrante').DataTable().destroy(); //obtiene una instancia del datatable y la destruye 
    var idproyecto=1;//$('#txtidproyecto').val();
    $.ajax({      
        type: 'POST',
        url: '../controller/CProyecto.php',
        data: {"op":"listarParticipantes","idproyecto":idproyecto},
        // beforeSend: function () { preloader();},//$('#tbody-integrantes').html('<tr><td colspan=6 class=center><h5> Cargando...</h5></td></tr>')},
        success: function(resultado){         
            console.log(resultado);
            if(resultado=="vacio"){ }
            else{
                var lstparticipantes=JSON.parse(resultado);            
                var $ul=$('#ul-participantes').html('');
                for (var i = 0; i < lstparticipantes.length; i++) {                    
                    $ul.append(
                    // $('#tbody-participantes').append(
                    	`<li>${lstparticipantes[i]["nombre"]}</li>
                    	 <li>${lstparticipantes[i]["cargo"]}</li>
           					`);
                }                 
            }
        }
    });
}

function cargarIntegrantes() {   
    //$('#tblintegrante').DataTable().destroy(); //obtiene una instancia del datatable y la destruye 
    $.ajax({      
        type: 'POST',
        url: '../controller/CIntegrante.php',
        data: {op:"listarintegrantes"},
        // beforeSend: function () { preloader();},//$('#tbody-integrantes').html('<tr><td colspan=6 class=center><h5> Cargando...</h5></td></tr>')},
        success: function(resultado){         
            // console.log(resultado);
            if(resultado=="vacio"){ }
            else{
                var lstintegrantes=JSON.parse(resultado);            
                var $tbody=$('#tbody-integrantes').html('');
                for (var i = 0; i < lstintegrantes.length; i++) {                    
                    $tbody.append(
                    // $('#tbody-integrantes').append(
                    	`<tr>
           					<td>
           						<label>
						        	<input type="checkbox" class="filled-in" id="chitem-${lstintegrantes[i]["idintegrante"]}" />
						        	<span>${lstintegrantes[i]["nombres"]} ${lstintegrantes[i]["apellidos"]}</span>
						        </label>                   						
           					</td>
           					<td>
           						<select class="cargo">
							      	<option value="" disabled selected>Elige su cargo</option>
							      	<option value="Coordinador General">Coordinador General</option>
							      	<option value="Coordinador de Campo">Coordinador de Campo</option>
							      	<option value="Coordinador de Laboratorio">Coordinador de Laboratorio</option>
							      	<option value="Coordinador de Logística">Coordinador de Logística</option>
							      	<option value="Coordinador de BBDD">Coordinador de BBDD</option>
							      	<option value="Editor de Informe">Editor de Informe</option>
							      	<option value="Especialista SIG">Especialista SIG</option>
							      	<option value="Asistente de Investigación">Asistente de Investigación</option>
							      	<option value="Otro">Otro</option>
							    </select>	
           					</td>
           				</tr>`);
                }     
                $('select').formSelect(); 
            }
        }
    });
}


$('#btnregistrar2').click(function(){     
    var idproyecto=1;//$('#txtidproyecto').val();
    var $checks=$('#tblintegrantes input:checkbox:checked');
    var lstparticipantes=new Array();
    console.log($checks);
    $.each($checks,function(){   
    	var idintegrante=(this.id).split("-")[1];
    	var cargo=(this.parentNode.parentNode.parentNode.getElementsByClassName("cargo"))[0].value;   
        console.log(cargo);
        console.log(idintegrante);
        var participante=[idintegrante,cargo];
        lstparticipantes.push(participante);

    });
    console.log(lstparticipantes);
    // var datos={"idproyecto":idproyecto,"lstparticipantes":lstparticipantes};    
    $.ajax({        
        type: 'POST',
        url: '../controller/CProyecto.php',
        data: {"op":"registrarParticipantes","idproyecto":idproyecto,"lstparticipantes":lstparticipantes},       
        success: function(resultado) {     
            console.log(resultado);   
            // if (resultado=="true") {
            //     $('#form-proyecto input').val("");                    
            // }else{
            //     alert("No se pudo registrar: "+resultado);
            // }
            
        }
    })
   
});