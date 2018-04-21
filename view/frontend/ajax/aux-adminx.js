
//----------------------------*************ARCHIVO EXCLUSIVAMENTE PARA FUNCIONES DEL ADMIN*****************-------------------------------

////////////////////////////////////////////----INICIO: FUNCION CAMBIO SUCURSAL----////////////////////////////////////////////
$.ajax({   
    type: 'POST',
    url: '../CSucursal', 
    data: {op:"listar"},
    success: function(resultado){
        var fila=resultado.split('/');
        for (var i = 0; i < (fila.length-1); i++) {
            var celda=fila[i].split('?');
            $('#div-sucursal').append('<li><a onclick="cambiarSucursal('+celda[0]+');">'+celda[1]+'</a></li>');
        }  
    }
});

function cambiarSucursal(idsucursal){
    $.ajax({   
        type: 'POST',
        url: '../Session', 
        data: {op:'cambiar-sucursal',sucursal:idsucursal},
        success: function(resultado){
            document.location.href='home.jsp';  
        }
    });
}
////////////////////////////////////////////////////------ FIN ------///////////////////////////////////////////////////////////

///////////////////////////////////////////----INICIO: NOTIFICACIONES----//////////////////////////////////////////////////////
$.ajax({   
    type: 'POST',
    url: '../CNotificacion', 
    data: {},
    success: function(resultado){
        var consultas=resultado.split('*');
        //Notificaciones de Letras 
        var columnas=consultas[0].split('/');
        var cantidadLetra=columnas.length-1;
        if(0<cantidadLetra) {
            $('#notificacion-letra').prepend('Letras <button class="circulo-notificacion">'+cantidadLetra+'</button>');
            for (var i = 0; i < cantidadLetra; i++) {
                var celda=columnas[i].split('?');
                $('#notificacion-letra-ul').append(
                    '<li><a><div><i class="fa fa-comment fa-fw"></i> '+celda[0]+" - S/."+celda[2]+'<span class="pull-right text-muted small">'+celda[1]+'</span></div></a></li>'+
                    '<li class="divider"></li>');
            }
        }else{
            $('#notificacion-letra').prepend('Letras ');
        }
        //Notificaciones de Creditos - EXCEPCIÓN: También se visualiza en cEmpleado
        var columnas2=consultas[1].split('/');
        var cantidadCredito=columnas2.length-1;
        if (0<cantidadCredito) {
            $('#notificacion-credito').prepend('Créditos <button class="circulo-notificacion">'+cantidadCredito+'</button>');
            for (var i = 0; i < cantidadCredito; i++){
                var celda=columnas2[i].split('?');
                $('#notificacion-credito-ul').append(
                    '<li><a><div><i class="fa fa-comment fa-fw"></i> '+celda[0]+" - S/."+celda[1]+'<span class="pull-right text-muted small">falta '+celda[3]+' días</span></div></a></li>'+
                    '<li class="divider"></li>');
            }
        }else{
            $('#notificacion-credito').prepend('Crédito ');
        }
    }
});
////////////////////////////////////////////////////------ FIN ------///////////////////////////////////////////////////////////


