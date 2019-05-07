function llenar_lista(){
     // console.log("Se ha llenado lista");
    preCarga(1000,4);
    $.ajax({
        url:"llenarLista.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#lista").html(respuesta);
            $("#lista").slideDown("fast");
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });	
}

function ver_alta(){
    preCarga(800,4);
    $("#lista").slideUp('low');
    $("#alta").slideDown('low');
    $("#nombre").focus();
}

function ver_lista(){
    $("#alta").slideUp('low');
    $("#lista").slideDown('low');
}

$('#btnLista').on('click',function(){
    llenar_lista();
    ver_lista();
});

$("#frmAlta").submit(function(e){
  
    var idPersona = $("#idPersona").val();
    var Ncontrol   = $("#Ncontrol").val();
    var idCarrera  = $("#idCarrera").val();

    // validacion para no meter id de persona en 0
    if(idPersona==0){
        alertify.dialog('alert').set({transition:'zoom',message: 'Transition effect: zoom'}).show();

        alertify.alert()
        .setting({
            'title':'Información',
            'label':'Salir',
            'message': 'Debes seleccionar el dato de una persona.' ,
            'onok': function(){ alertify.message('Gracias !');}
        }).show();
        return false;       
    }
    
     // validacion para no meter id de carrera en 0
     if(idCarrera==0){
        alertify.dialog('alert').set({transition:'zoom',message: 'Transition effect: zoom'}).show();

        alertify.alert()
        .setting({
            'title':'Información',
            'label':'Salir',
            'message': 'Debes seleccionar el dato de una carrera.' ,
            'onok': function(){ alertify.message('Gracias !');}
        }).show();
        return false;       
    }
        $.ajax({
            url:"guardar.php",
            type:"POST",
            dateType:"html",
            data:{
                    'idPersona':idPersona,
                    'Ncontrol':Ncontrol,
                    'idCarrera':idCarrera
                 },
            success:function(respuesta){
              
            alertify.set('notifier','position', 'bottom-right');
            alertify.success('Se ha guardado el registro' );
            $("#frmAlta")[0].reset();
            llenar_persona();
            llenar_carrera();
            },
            error:function(xhr,status){
                alert(xhr);
            },
        });
        e.preventDefault();
        return false;
});

function abrirModalEditar(nomControl,idCarrera,idAlumno){
   
    $("#frmActuliza")[0].reset();
    $("#NcontrolE").val(nomControl);
    $("#idCarreraE").val(idCarrera);
    $("#idE").val(idAlumno);

    $(".select2").select2();

    $("#modalEditar").modal("show");

     $('#modalEditar').on('shown.bs.modal', function () {
         $('#NcontrolE').focus();
     });   
}

$("#frmActuliza").submit(function(e){
  
    var nomControl  = $("#NcontrolE").val();
    var idCarrera   = $("#idCarreraE").val();
    var ide         = $("#idE").val();

        $.ajax({
            url:"actualizar.php",
            type:"POST",
            dateType:"html",
            data:{
                    'Ncontrol': nomControl,
                    'idCarrera': idCarrera,
                    'ide':ide
                 },
            success:function(respuesta){

            alertify.set('notifier','position', 'bottom-right');
            alertify.success('Se ha actualizado el registro' );
            $("#frmActuliza")[0].reset();
            $("#modalEditar").modal("hide");
            llenar_lista();
            },
            error:function(xhr,status){
                alert(xhr);
            },
        });
        e.preventDefault();
        return false;
});

function status(concecutivo,id){
    var nomToggle = "#interruptor"+concecutivo;
    var nomBoton  = "#boton"+concecutivo;
    var numero    = "#tConsecutivo"+concecutivo;
    var nCompleto = "#tNcompleto"+concecutivo;
    var usuario   = "#tUsuario"+concecutivo;
    var registro  = "#tRegistro"+concecutivo;

    if( $(nomToggle).is(':checked') ) {
        // console.log("activado");
        var valor=0;
        alertify.success('Registro habilitado' );
        $(nomBoton).removeAttr("disabled");
        $(numero).removeClass("desabilita");
        $(nCompleto).removeClass("desabilita");
        $(usuario).removeClass("desabilita");
        $(registro).removeClass("desabilita");

    }else{
        // console.log("desactivado");
        var valor=1;
        alertify.error('Registro deshabilitado' );
        $(nomBoton).attr("disabled", "disabled");
        $(numero).addClass("desabilita");
        $(nCompleto).addClass("desabilita");
        $(usuario).addClass("desabilita");
        $(registro).addClass("desabilita");

    }
    // console.log(concecutivo+' | '+id);
    $.ajax({
        url:"status.php",
        type:"POST",
        dateType:"html",
        data:{
                'valor':valor,
                'id':id
             },
        success:function(respuesta){
            // console.log(respuesta);
        },
        error:function(xhr,status){
            alert(xhr);
        },
    });
}


function llenar_persona()
{
    // alert(idRepre);
    $.ajax({
        url : 'comboPersonas.php',
        // data : {'id':id},
        type : 'POST',
        dataType : 'html',
        success : function(respuesta) {
            $("#idPersona").empty();
            $("#idPersona").html(respuesta);      
        },
        error : function(xhr, status) {
            alert('Disculpe, existió un problema');
        },
    });
}

function llenar_carrera()
{
     // alert(idRepre);
     $.ajax({
        url : 'comboCarreras.php',
        // data : {'id':id},
        type : 'POST',
        dataType : 'html',
        success : function(respuesta) {
            $("#idCarrera").empty();
            $("#idCarrera").html(respuesta);      
        },
        error : function(xhr, status) {
            alert('Disculpe, existió un problema');
        },
    });

}