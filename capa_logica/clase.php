<?php
require_once '../capa_datos/conexion.php';

class clase_persona{
	Public $id;
	Public $nombre;
	Public $apellido;
	Public $direccion;
	Public $referencia;
	Public $cuidad;
	Public $edad;
	const TABLA ='crud';
	/*   *****METODOS*****   */
	// metodo para guardar datos en la tabla crud
	public function guardar(){
	$conexion = new Conexion();
    $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (nombre, apellido,direccion,referencias,cuidad,edad) VALUES(:nombre, :apellido,:direccion,:referencia,:cuidad,:edad)');
    $consulta->bindParam(':nombre', $this->nombre, PDO::PARAM_STR);
    $consulta->bindParam(':apellido', $this->apellido, PDO::PARAM_STR);
    $consulta->bindParam(':direccion', $this->direccion, PDO::PARAM_STR);
    $consulta->bindParam(':referencia', $this->referencia, PDO::PARAM_STR);
    $consulta->bindParam(':cuidad', $this->cuidad, PDO::PARAM_STR);
    $consulta->bindParam(':edad', $this->edad, PDO::PARAM_INT);
  	return $consulta->execute();
	}
	// Método para actualizar la tabla crud
	public function actualizar(){
	$conexion = new Conexion();
    $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET nombre = :nombre, apellido = :apellido,direccion= :direccion,referencias = :referencia,cuidad = :cuidad,edad = :edad WHERE Id = :id ');
    $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
    $consulta->bindParam(':nombre', $this->nombre, PDO::PARAM_STR);
    $consulta->bindParam(':apellido', $this->apellido, PDO::PARAM_STR);
    $consulta->bindParam(':direccion', $this->direccion, PDO::PARAM_STR);
    $consulta->bindParam(':referencia', $this->referencia, PDO::PARAM_STR);
    $consulta->bindParam(':cuidad', $this->cuidad, PDO::PARAM_STR);
    $consulta->bindParam(':edad', $this->edad, PDO::PARAM_INT);
  	return $consulta->execute();
	}
	// Método para eliminar los datos
	public function eliminar(){
		$conexion =  new Conexion();
		$consulta = $conexion->prepare('DELETE FROM '. self::TABLA . ' where Id = :id');
		$consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
		return $consulta->execute(); 
	}
	// Extraer Datos de Base de datos
	public function tabla(){

	$query = "SELECT * from crud";

	$conexion = new Conexion();
    $consulta = $conexion->prepare($query);
    $consulta->execute();
    $registros = $consulta->fetchAll();
    return $registros;
	}
}


?>