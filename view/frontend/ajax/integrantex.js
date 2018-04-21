// $(document).ready(function() {$('#tblintegrante').dataTable({ responsive:true ,ordering:false }); //});
//$(document).ready(function() {$('#tblintegrante').DataTable({ responsive:true ,ordering:false }); //});


$.ajax({      
    type: 'POST',
    url: '../controller/CIntegrante.php',
    data: {op:"listarintegrantes"},
    success: function(resultado){         
        console.log(resultado);
        if(resultado=="vacio"){ }
        else{
            lstintegrantes=JSON.parse(resultado);            
            //cargarIntegrantes(lstintegrantes);
            console.log(lstintegrantes);            
            $('#tblintegrante').DataTable({                
                data: lstintegrantes,
                columns: [                    
                    { data: 'dni' },
                    { data: 'nombres' },
                    { data: 'apellidopat' },                    
                    { data: 'usuario' },
                    {'<a class=btn modal-trigger>NUEVO</a>'},
                    // { data: 'contrasenia' },
                    { data: 'tipo' }
                ]
            });
        }
    }
});

//});



function cargarIntegrantes(listaint) {        
    //var tblintegrantes=$('#tblintegrante').dataTable();
    //tblintegrantes.destroy();
    // $('#tblintegrante').dataTable().destroy();
    $('#tblintegrante').DataTable().destroy();
    $('#tbody-integrantes').html('');
    for (var i = 0; i < listaint.length; i++) {                    
        $('#tbody-integrantes').append(
            `<tr>                
                <td> ${listaint[i]["dni"]}</td>
                <td> ${listaint[i]["nombres"]}</td>
                <td> ${listaint[i]["apellidopat"]}  ${listaint[i]["apellidomat"]}</td>
                <td> ${listaint[i]["usuario"]}</td>
                <td> ${listaint[i]["tipo"]}</td>
                <td class=center><button data-toggle="modal" data-target="#modificar" class="btn btn-primar" id="btneditar-${listaint[i]["idintegrante"]}" title="Editar" onclick="cargarIntegrante(this.id)"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;</button></td>
            </tr> `);
    }
    // $('#tblintegrante').addClass("display").DataTable();    
    $('#tblintegrante').DataTable();//{responsive:true});
    // $('#tblintegrante').DataTable();//{responsive:true});
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

/*
////MODIFICAR
function cargarIntegrante(idbtn){
    var idintegrante=idbtn.split('-')[1];
    $.ajax({   
        type: 'POST',
        url: '../CIntegrante',
        data: {op:"cargarintegrante",idintegrante:idintegrante},
        success: function(resultado){  
            if(resultado=='nulo'){ }
            else{                
                var datosproducto=resultado.split('?');
                $('#txtidintegrante2').val(datosproducto[0]);
                $('#txtnombres2').val(datosproducto[1]);
                if(datosproducto[2]!="null") $('#txtdniruc2').val(datosproducto[2]);
                else $('#txtdniruc2').val(datosproducto[3]);                
                $('#txttelefono12').val(datosproducto[4]);
                $('#txttelefono22').val(datosproducto[5]);
                $('#txtdireccion2').val(datosproducto[6]);                
            }    
        }
    }); 
}

$( "#formintegrantes2" ).validate({ //Validación
    rules:{ txtnombres2: {obligatorio: true, noespeciales:true}, txtdniruc2:{obligatorio: true,dniruc:true},txttelefono12:{noespeciales:true}, txttelefono22:{noespeciales:true}, txtdireccion2:{noespeciales:true} },    
    submitHandler: function(form){ modificar(); }
});

function modificar(){
    var idintegrante=$('#txtidintegrante2').val();
    var nombres=$('#txtnombres2').val().toUpperCase();
    var dniruc=$.trim($('#txtdniruc2').val());
    var telefono1=$('#txttelefono12').val();
    var telefono2=$('#txttelefono22').val();
    var direccion=$('#txtdireccion2').val().toUpperCase();  
    $('#tbintegrante').DataTable().destroy();
    $.ajax({     
        type: 'POST',
        url: '../CIntegrante',
        data: {op:"modificar",txtidintegrante2:idintegrante,txtnombres2:nombres,txtdniruc2:dniruc,txttelefono12:telefono1,txttelefono22:telefono2,txtdireccion2:direccion},
        success: function(resultado){                
            if(resultado=='true'){
                $('#modificar').modal('toggle');
                swal({title:'Integrante Modificado',type:'success',showConfirmButton:false,timer:2000});
                var tbody=document.getElementById("tabla");
                var tr=tbody.getElementsByTagName("tr");
                for (var i = 0; i < tbody.rows.length; i++) {
                    var td=tr[i].getElementsByTagName("td");
                    if (td[0].textContent==idintegrante) {
                        td[1].textContent=nombres;
                        td[2].textContent=dniruc;
                        td[3].textContent=telefono1+"   "+telefono2;
                        td[4].textContent=direccion;
                        break;
                    }
                }
                limpiar2();                
            }else{
                swal({title:'Error: '+resultado,type:'error',showConfirmButton:false,timer:4000});
            } 
            $('#tbintegrante').DataTable({responsive:true,ordering:false});
        }
    });
}

$('#btncancelar2').click(function (){
    limpiar2();
    $('#modificar').modal('toggle');
});

function limpiar2(){
    $( "#formintegrantes2" ).validate().resetForm();
    $('#formintegrantes2 input').val('');
}
    */