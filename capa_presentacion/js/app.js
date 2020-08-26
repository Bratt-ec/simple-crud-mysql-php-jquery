$(document).ready(function(){//INICIA FORMULARIO COMPLETO

	console.log('Formulario Iniciado'); //simple mensaje en al consola del navegador
	
	listarDatos(); // LLAMAR A LAFUNCION PARA QUE MESTRE LOS DATOS DE LA BD en la TABLA

	// EJECUTAR ACCION DE LOS BOTONES
$('#btnGuardar').click(function(event){
	guardar();
	});

$('#btnActualizar').click(function(event){
	actualizar();
	});

$('#btnEliminar').click(function(event){
	eliminar();
	});

$('#btnDesahacer').click(function(event){
	limpiar();
	});

// TERMINA EL FORMULARIO 	
});
// Función para limpiar INPUTS
function limpiar(){
	$('#txtNombre').val('');
	$('#txtApellido').val('');
	$('#txtDireccion').val('');
	$('txtReferencia').val('');
	$('#txtCuidad').val('');
	$('#txtEdad').val('');
}

// funcion para guardar datos en la BD
function guardar(){
	var nombre = $('#txtNombre').val();
	var apellido = $('#txtApellido').val();
	var direccion = $('#txtDireccion').val();
	var referencia = $('#txtReferencia').val();
	var cuidad = $('#txtCuidad').val();
	var edad = $('#txtEdad').val();

	var data= 'txtNombre='+nombre+'&txtApellido='+apellido+'&txtDireccion='+ direccion + '&txtReferencia='+ referencia + '&txtCuidad='+ cuidad + '&txtEdad='+ edad;

	$.ajax({
	type:'post',
    url: '../ajax/app.php?op=guardar',
    data: data,
    success:function(resp){
	// alert(resp);
		if(resp==1)
		{
			toastr.success('Registro Almacenado correctamente', 'INFORMACIÓN DEL SISTEMA');
			listarDatos();
			limpiar();
		}
		else
		{
			toastr.error('Registro no se pudo almacenar', 'INFORMACIÓN DEL SISTEMA');
		}
    }
	});
}

// funcion para actualizar los datos
function actualizar(){
	var id = $('#txtID').val();
	var nombre = $('#txtNombre').val();
	var apellido = $('#txtApellido').val();
	var direccion = $('#txtDireccion').val();
	var referencia = $('#txtReferencia').val();
	var cuidad = $('#txtCuidad').val();
	var edad = $('#txtEdad').val();

	var data= 'txtID='+ id +'&txtNombre='+nombre+'&txtApellido='+apellido+'&txtDireccion='+ direccion + '&txtReferencia='+ referencia + '&txtCuidad='+ cuidad + '&txtEdad='+ edad;

	$.ajax({
	type:'post',
    url: '../ajax/app.php?op=actualizar',
    data: data,
    success:function(resp){
	// alert(resp);
		if(resp==1)
		{
			toastr.success('Registro Actualizado correctamente', 'INFORMACIÓN DEL SISTEMA');
			listarDatos();
			limpiar();
		}
		else
		{
			toastr.error('Registro no se pudo Actualizar', 'INFORMACIÓN DEL SISTEMA');
		}
    }
	});
}
// funcion para eliminar datos
function eliminar(){
	var id = $('#txtID').val();

	var data = 'txtID='+ id;

	$.ajax({
	type:'post',
    url: '../ajax/app.php?op=eliminar',
    data: data,
    success:function(resp){
	// alert(resp);
		if(resp==1)
		{
			toastr.success('Registro Eliminado correctamente', 'INFORMACIÓN DEL SISTEMA');
			listarDatos();
			limpiar();
		}
		else
		{
			toastr.error('Registro no se pudo Eliminar', 'INFORMACIÓN DEL SISTEMA');
		}
    }
	});
}
// SUBIR LOS DATOS DE LA TABLA A LOS INPUTS
function agregar(fila)
{
	$("#txtID").val($('#lblid' + fila).html());
	$("#txtNombre").val($('#lblnombre' + fila).html());
	$("#txtApellido").val($('#lblapellido' + fila).html());
	$("#txtDireccion").val($('#lbldireccion' + fila).html());
	$("#txtReferencia").val($('#lblreferencias' + fila).html());
	$("#txtCuidad").val($('#lblcuidad' + fila).html());
	$("#txtEdad").val($('#lbledad'+fila).html());
}

// LLENAR TABLA DATOS
function listarDatos()
{
	tabla=$('#tblDatos').dataTable(
	{
		
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [
				  
		        ],
		"ajax":
				{
					url: '../ajax/app.php?op=datos_tabla',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);
						alert(e);						
					}
				},
		//"lengtMenu": [[5, 10, 50, 25, 50, -1], [5, 10, 50, 25, 50, "Todos"]],
		"columns" : [
					 {"data":0, 'orderable': true, 'searchable': true},
					 {"data":1, 'orderable': true, 'searchable': true},
					 {"data":2, 'orderable': true, 'searchable': true},
					 {"data":3, 'orderable': true, 'searchable': true},
					 {"data":4, 'orderable': true, 'searchable': true},
					 {"data":5, 'orderable': true, 'searchable': true},
					 {"data":6, 'orderable': false, 'searchable': false},
					 {"data":7, 'orderable': false, 'searchable': false},
					 
					 ],
		
		"bDestroy": true,
		"iDisplayLength": 10,//Paginación
	    "order": [[ 0, "asc" ]]//Ordenar (columna,orden)
	}).DataTable();
}