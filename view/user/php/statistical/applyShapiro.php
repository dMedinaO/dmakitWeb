<?php

session_start();
$idUSer = $_SESSION['idUser'];

	#script para hacer la carga de informacion desde la base de datos a la tabla
	include ("../connection.php");

	$job = $_REQUEST['job'];
	$feature = $_REQUEST['feature'];

	$query = "select dataSet.nameDataSet as name from dataSet where dataSet.job = $job";
	$resultado = mysqli_query($conexion, $query);

	$nameData = "";
	if (!$resultado){
		die("Error");
	}else{

		while($data = mysqli_fetch_assoc($resultado)){

			$nameData = $data['name'];
		}
	}

	//hacemos la ejecucion...
	$output = [];

	$dataSet = "/var/www/html/smartTraining/dataStorage/$idUSer/$job/$nameData";
	$command = "python /var/www/html/smartTraining/model/evaluateShapiro.py $dataSet $feature";
	exec($command, $output);
	echo $output[0];

	mysqli_free_result($resultado);
	mysqli_close($conexion);
?>
