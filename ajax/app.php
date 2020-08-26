<?php
require_once "../capa_logica/clase.php";
$objPersona = new clase_persona();

switch ($_GET["op"]){

case 'datos_tabla':
	
		$respuesta=$objPersona->tabla();
		//var_dump($respuesta);
		
		$c=0;
		$data= Array();
		foreach($respuesta as $row => $item)
		{
		$c++;
					
 			$data[]=array(
 				"0"=>"<label id='lblid$c'>" . $item["Id"] . "</label>",
 				"1"=>"<label id='lblnombre$c'>" . $item["nombre"] . "</label>",
 				"2"=>"<label id='lblapellido$c'>" . $item["apellido"] . "</label>",
 				"3"=>"<label id='lbldireccion$c'>". $item["direccion"]."</label>",
				"4"=>"<label id='lblreferencias$c'>" . $item["referencias"] . "</label>",
				"5"=>"<label id='lblcuidad$c'>" . $item["cuidad"] . "</label>",
				"6"=>"<label id='lbledad$c'>" . $item["edad"] . "</label>",									
				"7"=>"<button class='btn btn-primary' onclick='agregar(" . $c . ")'>Editar<i class='fa fa-edit'></i></button> "
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);


	break;

case 'guardar':
	$nombre = $_POST['txtNombre'];
	$apellido = $_POST['txtApellido'];
	$direccion = $_POST['txtDireccion'];
	$referencia = $_POST['txtReferencia'];
	$cuidad = $_POST['txtCuidad'];
	$edad = $_POST['txtEdad'];

	$objPersona->nombre = $nombre;
	$objPersona->apellido =  $apellido;
	$objPersona->direccion = $direccion;
	$objPersona->referencia = $referencia;
	$objPersona->cuidad =  $cuidad;
	$objPersona->edad = $edad;
	echo $objPersona->guardar();
break;

case 'actualizar':

	$id = $_POST['txtID'];
	$nombre = $_POST['txtNombre'];
	$apellido = $_POST['txtApellido'];
	$direccion = $_POST['txtDireccion'];
	$referencia = $_POST['txtReferencia'];
	$cuidad = $_POST['txtCuidad'];
	$edad = $_POST['txtEdad'];

	$objPersona->id = $id;
	$objPersona->nombre = $nombre;
	$objPersona->apellido =  $apellido;
	$objPersona->direccion = $direccion;
	$objPersona->referencia = $referencia;
	$objPersona->cuidad =  $cuidad;
	$objPersona->edad = $edad;
	echo $objPersona->actualizar();
break;

case 'eliminar':
	$id = $_POST['txtID'];

	$objPersona->id = $id;
	echo $objPersona->eliminar();
break;


} //Cerrar el switch

?>