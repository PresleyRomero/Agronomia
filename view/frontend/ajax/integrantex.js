// $(document).ready(function() {$('#tblintegrante').dataTable({ responsive:true ,ordering:false }); //});
//$(document).ready(function() {$('#tblintegrante').DataTable({ responsive:true ,ordering:false }); //});

cargarTabla();

function cargarTabla() {   
    $('#tblintegrante').DataTable().destroy(); //obtiene una instancia del datatable y la destruye 
    $.ajax({      
        type: 'POST',
        url: '../controller/CIntegrante.php',
        data: {op:"listarintegrantes"},
        beforeSend: function () { preloader();},//$('#tbody-integrantes').html('<tr><td colspan=6 class=center><h5> Cargando...</h5></td></tr>')},
        success: function(resultado){         
            // console.log(resultado);
            if(resultado=="vacio"){ }
            else{
                var lstintegrantes=JSON.parse(resultado);            
                $('#tbody-integrantes').html('');
                for (var i = 0; i < lstintegrantes.length; i++) {                    
                    $('#tbody-integrantes').append(
                        `<tr>                
                            <td> ${lstintegrantes[i]["dni"]}</td>
                            <td> ${lstintegrantes[i]["nombres"]}</td>
                            <td> ${lstintegrantes[i]["apellidos"]}</td>
                            <td> ${lstintegrantes[i]["usuario"]}</td>
                            <td> ${lstintegrantes[i]["tipo"]}</td>
                            <td class=center><button class="btn modal-trigger" data-target="modal-editarintegrante" id="btneditar-${lstintegrantes[i]["idintegrante"]}" title="Editar" onclick="cargarDatos(this.id)"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;</button></td>
                        </tr> `);
                } 
                $('#tblintegrante').DataTable();//{responsive:true});                 
            }
        }
    });
}


function preloader(){

    $('#tbody-integrantes').html(`<tr><td colspan=6 class=center> <div class="preloader-wrapper small active">
                                <div class="spinner-layer spinner-green-only">
                                  <div class="circle-clipper left">
                                    <div class="circle"></div>
                                  </div><div class="gap-patch">
                                    <div class="circle"></div>
                                  </div><div class="circle-clipper right">
                                    <div class="circle"></div>
                                  </div>
                                </div>
                            </div> <h5> Cargando...</h5></td></tr>`);

    
}

////OTRO FORMA DE LLENAR UNA TABLA CON DATATABLE

                /*$('#tblintegrante').DataTable().destroy();//obtiene una instancia del datatable y la destruye       
                $('#tblintegrante').DataTable({  
                    data: lstintegrantes,
                    columns: [                    
                        { data: 'dni' },
                        { data: 'nombres' },
                        { data: 'apellidos' },                    
                        { data: 'usuario' },
                        { data: 'tipo' },
                        { render: function () {                            
                            return '<a class="btn" href="#">Editar</a>';
                          } 
                        }                    
                    ]
                    
                });*/


/*
function cargarIntegrantes(listaint) {   
    $('#tblintegrante').DataTable().destroy();
    $('#tbody-integrantes').html('');
    for (var i = 0; i < listaint.length; i++) {                    
        $('#tbody-integrantes').append(
            `<tr>                
                <td> ${listaint[i]["dni"]}</td>
                <td> ${listaint[i]["nombres"]}</td>
                <td> ${listaint[i]["apellidos"]}</td>
                <td> ${listaint[i]["usuario"]}</td>
                <td> ${listaint[i]["tipo"]}</td>
                <td class=center><button data-toggle="modal" data-target="#modificar" class="btn btn-primar" id="btneditar-${listaint[i]["idintegrante"]}" title="Editar" onclick="cargarIntegrante(this.id)"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;</button></td>
            </tr> `);
    } 
    $('#tblintegrante').DataTable();//{responsive:true});    
}



////REGISTRAR

/*$("#form-integrante").validate({ //Validación
    rules:{ txtnombres: {obligatorio: true, noespeciales:true}, txtdniruc:{obligatorio: true,dniruc:true},txttelefono1:{noespeciales:true}, txttelefono2:{noespeciales:true}, txtdireccion:{noespeciales:true} },
    submitHandler:function(form){ registrar(); }
});*/

//function registrar(){    


$('#btnregistrar').click(function(){         
    var dni=$.trim($('#txtdni').val());
    var nombres=$('#txtnombres').val().toUpperCase();    
    var apellidopat=$('#txtapellidopat').val().toUpperCase();
    var apellidomat=$('#txtapellidomat').val().toUpperCase();
    var usuario=$('#txtusuario').val();
    var contrasenia=$('#txtcontrasenia').val();
    var tipo=$('#cbtipo').val();
    var datos={"dni":dni,"nombres":nombres,"apellidopat":apellidopat,"apellidomat":apellidomat,"usuario":usuario,"contrasenia":contrasenia,"tipo":tipo};    
    $.ajax({        
        type: 'POST',
        url: '../controller/CIntegrante.php',
        data: {"op":"registrar",datos},       
        success: function(resultado) {     
            console.log(resultado);   
            if (resultado=="true") {
                $('#form-integrante input').val("");
                 cargarTabla();                
            }else{
                alert("No se pudo registrar: "+resultado);
            }
            
        }
    })
   
});


/*

$('#btncancelar').click(function(){
    limpiar();
    $('#nuevo').modal('toggle');
    //cargarIntegrantes();
});

function limpiar(){
    var txtidintegrante=$('#txtidintegrante').val();
    $("#formintegrante").validate().resetForm();
    $('#formintegrante input').val('');
    $('#txtidintegrante').val(txtidintegrante);
}
*/

////MODIFICAR
function cargarDatos(idbtn){
    var idintegrante=idbtn.split('-')[1];
    $.ajax({   
        type: 'POST',
        url: '../controller/CIntegrante.php',
        data: {"op":"cargardatos","idintegrante":idintegrante},
        success: function(resultado){  
            if(resultado=="vacio"){ }
            else{  
                var datos=JSON.parse(resultado);                  
                $('#txtnombres2').val("").focus().val(datos[0]["nombres"]);                                          
                $('#txtapellidopat2').val("").focus().val(datos[0]["apellidopat"]);
                $('#txtapellidomat2').val("").focus().val(datos[0]["apellidomat"]);
                $('#txtdni2').val("").focus().val(datos[0]["dni"]);  
                $('#txtidintegrante2').val("").val(datos[0]["idintegrante"]);
                //YYYYYY EL COMBO DE TIPO  ???????????????????????????????????''
            }    
        }
    }); 
}
/*
$( "#formintegrantes2" ).validate({ //Validación
    rules:{ txtnombres2: {obligatorio: true, noespeciales:true}, txtdniruc2:{obligatorio: true,dniruc:true},txttelefono12:{noespeciales:true}, txttelefono22:{noespeciales:true}, txtdireccion2:{noespeciales:true} },    
    submitHandler: function(form){ modificar(); }
});
*/
$('#btnguardarcambios').click(function(){  
    var idintegrante=$('#txtidintegrante2').val();
    var dni=$.trim($('#txtdni2').val());
    var nombres=$('#txtnombres2').val().toUpperCase();    
    var apellidopat=$('#txtapellidopat2').val().toUpperCase();
    var apellidomat=$('#txtapellidomat2').val().toUpperCase();
    var tipo=$('#cbtipo').val();
    var datos={"id":idintegrante,"dni":dni,"nombres":nombres,"apellidopat":apellidopat,"apellidomat":apellidomat,"tipo":tipo};    
    $.ajax({        
        type: 'POST',
        url: '../controller/CIntegrante.php',
        data: {"op":"editar",datos},       
        success: function(resultado) {     
            console.log(resultado);   
            if (resultado=="true") {
                $('#form-integrante2 input').val("");
                 cargarTabla();                
            }else{
                alert("No se pudo registrar: "+resultado);
            }
            
        }
    })


        // success: function(resultado){                
        //     if(resultado=='true'){
        //         $('#modificar').modal('toggle');
        //         swal({title:'Integrante Modificado',type:'success',showConfirmButton:false,timer:2000});
        //         var tbody=document.getElementById("tabla");
        //         var tr=tbody.getElementsByTagName("tr");
        //         for (var i = 0; i < tbody.rows.length; i++) {
        //             var td=tr[i].getElementsByTagName("td");
        //             if (td[0].textContent==idintegrante) {
        //                 td[1].textContent=nombres;
        //                 td[2].textContent=dniruc;
        //                 td[3].textContent=telefono1+"   "+telefono2;
        //                 td[4].textContent=direccion;
        //                 break;
        //             }
        //         }
        //         limpiar2();                
        //     }else{
        //         swal({title:'Error: '+resultado,type:'error',showConfirmButton:false,timer:4000});
        //     } 
        //     $('#tbintegrante').DataTable({responsive:true,ordering:false});
        // }
});


/*
$('#btncancelar2').click(function (){
    limpiar2();
    $('#modificar').modal('toggle');
});

function limpiar2(){
    $( "#formintegrantes2" ).validate().resetForm();
    $('#formintegrantes2 input').val('');
}
    */