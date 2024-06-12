<?php

if (isset($_GET['peliculas'])) {
	$categoria = $_GET['peliculas'];
	$sql ="SELECT * FROM peliculas WHERE id = '{$peliculas}'";
	$conexion = new Conexion(); // Crear instancia de la clase Conexion
	$datos = $conexion->consultar($sql); // Llamar al método consultar() en la instancia

	foreach ($datos as $key) {
		$sql ="SELECT * FROM peliculas WHERE genero = '{$key['id']}' order by id desc";
		$datos = $conexion->consultar($sql); // Llamar al método consultar() en la misma instancia
	}
} else if (isset($_GET['buscar'])) {
	$buscar = $_GET['buscar'];
	$sql ="SELECT * FROM peliculas WHERE nombre LIKE '%{$buscar}%' OR descripcion LIKE '%{$buscar}%' OR genero LIKE '%{$buscar}%' order by id desc";
	$conexion = new Conexion(); // Crear instancia de la clase Conexion
	$datos = $conexion->consultar($sql); // Llamar al método consultar() en la instancia
} else {
	$sql ="SELECT * FROM peliculas order by id desc";
	$conexion = new Conexion(); // Crear instancia de la clase Conexion
	$datos = $conexion->consultar($sql); // Llamar al método consultar() en la instancia
}

if (count($datos) == null) {
	echo "<br> <h3 class='white-text center'>Busqueda no encontrada :(</h3> <br>";
}
?>