<?php 

include('conexion.php');

function getUsuarios(){
		$conn = conectar();
		$sql = "SELECT * from usuario";
		$st = $conn -> prepare($sql);
		$st -> execute();
		$resultado = $st -> fetchAll();
		$conn = null;
		return $resultado;

} 

if ($_GET['param2'] == "upla" and isset($_GET['param2']))  {
	$res = getUsuarios();
	//echo "<input type='text' name='nombre".$_GET['param2']."'>";
	//$res [0]['nombre_usuario'];

	//$res es la var a recorrer
	//$key es un cont que empieza en cero
	//$value es el sobrenombre que se le da a $res
	foreach ($res as $key => $value) {
			
		echo $value['Nombre'];
		echo "<br>";
		echo $value['Contrasena'];
		echo "<br>";
		echo $value['Email'];

		echo "<br>";
		}	
	// echo "<pre>";
	// print_r($res);
	// echo "</pre>";
	// echo "<br>";
}else{
	echo "2";
}
 ?>