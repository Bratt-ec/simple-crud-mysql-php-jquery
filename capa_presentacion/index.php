<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CRUD | PHP</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
	<!--  CSS BOOTSTRAP-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<!-- TOAST  -->
	<link href="toastr-master/build/toastr.css" rel="stylesheet" type="text/css" />
	<!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="scripts/datatables/jquery.dataTables.min.css">    
    <link href="scripts/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="scripts/datatables/responsive.dataTables.min.css" rel="stylesheet"/>
	
</head>
<body>
<div class="container">
	<!-- FORMULARIO -->
	<h2>SIMPLE CRUD PHP</h2>
	<div class="row">

		<div class="form-row">
		    <div class="form-group col-md-3">
		      <input type="text" id="txtID" style="display: none;">
		      <label for="inputEmail4">Nombre</label>
		      <input type="text" class="form-control" id="txtNombre">
		    </div>
		    <div class="form-group col-md-3">
		      <label for="inputPassword4">Apellido</label>
		      <input type="text" class="form-control" id="txtApellido">
		    </div>
		    		<div class="form-group col-md-4">
		    <label for="inputAddress">Dirección</label>
		    <input type="text" class="form-control" id="txtDireccion" placeholder="Av. Juan Montalvo...">
		</div>
		  <div class="form-group col-md-4">
		    <label for="inputAddress2">Referencias Geograficas</label>
		    <input type="text" class="form-control" id="txtReferencia" placeholder="Hay una arbol cerca...">
		  </div>
		</div>


		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputCity">Ciudad</label>
		      <input type="text" class="form-control" id="txtCuidad">
		    </div>		    
		    <div class="form-group col-md-2">
		      <label for="inputZip">Edad</label>
		      <input type="text" class="form-control" id="txtEdad">
		    </div>


		  </div>
	</div>
			  <div class="form-row">
		  	<div class="form-group col-md-12">
		    <button type="button" class="btn btn-primary" id="btnGuardar">GUARDAR</button>
		  	<button type="button" class="btn btn-primary" id="btnActualizar">ACTUALIZAR</button>
		  	<button type="button" class="btn btn-primary" id="btnEliminar">ELIMINAR</button>
		  	<button type="button" class="btn btn-primary" id="btnDeshacer">DESHACER</button>
		    </div>	

		  </div>
		 
</div>

<!-- TABLA DE DATOS -->
<table id="tblDatos">
  <thead>
    <tr>
      <td>ID</td>
      <td>Nombre</td>
      <td>Apellido</td>
      <td>Dirección</td>
      <td>Referencias Geograficas</td>    
      <td>Cuidad</td> 
      <td>Edad</td> 
      <td>Opciones</td>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>



  	<!-- REQUIRED JS SCRIPTS -->
	<script src="scripts/jquery-3.4.1.min.js"></script>	    
	<script src="toastr-master/toastr.js"></script>
	<script src="js/app.js"></script>
	<!-- DATATABLES -->
    <script src="scripts/datatables/jquery.dataTables.min.js"></script>    
    <script src="scripts/datatables/dataTables.buttons.min.js"></script>
    <script src="scripts/datatables/buttons.html5.min.js"></script>
    <script src="scripts/datatables/buttons.colVis.min.js"></script>
    <script src="scripts/datatables/jszip.min.js"></script>
    <script src="scripts/datatables/pdfmake.min.js"></script>
    <script src="scripts/datatables/vfs_fonts.js"></script>
</body>
</html>