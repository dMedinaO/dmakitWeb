<?php

session_start();
$idUSer = $_SESSION['idUser'];

  include("../connection.php");
  include("../readDocument.php");
  include("../checkResultDB.php");

  #recibimos los parametros...
  $job = $_REQUEST['job'];
  $responseFeature = $_REQUEST['response'];
  $scale = $_REQUEST['scale'];

  $algorithm = $_REQUEST['algorithm'];
  $NuSVC_kernel = $_REQUEST['NuSVC_kernel'];
  $NuSVC_gamma = $_REQUEST['NuSVC_gamma'];
  $NuSVC_degree = $_REQUEST['NuSVC_degree'];
  $NuSVC_nu = $_REQUEST['NuSVC_nu'];

  $params = "$NuSVC_kernel-$NuSVC_nu-$NuSVC_degree-$NuSVC_gamma";

  #obtenemos los datos desde la sesion...
  $response = [];

  #obtenemos el nombre del set de datos desde la bd segun el job
  $query = "select dataSet.nameDataSet as name from dataSet where dataSet.job = $job";
	$resultado = mysqli_query($conexion, $query);

	$nameData = "";
	if (!$resultado){
		die("Error");
	}else{

		while($data = mysqli_fetch_assoc($resultado)){

			$nameData = $data['name'];
		}
		$response['nameFile'] = $nameData;
	}

  //hacemos la ejecucion del script
  $nameFile = "/var/www/html/smartTraining/dataStorage/$idUSer/$job/$nameData";
  $pathRespone = "/var/www/html/smartTraining/dataStorage/";

  //hacemos la ejecucion del script
  $command = "python /var/www/html/smartTraining/model/launcherSupervisedPredictionWeb.py $nameFile $idUSer $job $pathRespone 7 $params $responseFeature $scale";
  $response['command'] = $command;
  exec($command);

  //preguntamos si este archivo existe...
  $responseFile = "../../../dataStorage/$idUSer/$job/responseTraining$job.json";
  $responseData = file_exists("/var/www/html/smartTraining/dataStorage/$idUSer/$job/responseTraining$job.json");

  if ($responseData == true){
    $response['fileResponse'] = $responseFile;
    $response['exec'] = "OK";
  }else{
    $response['exec'] = "ERROR";

    $query = "update job set job.statusJob = 'ERROR', job.modifiedJob = NOW() where job.idjob = $job";
    $resultado = mysqli_query($conexion, $query);
  }

  echo json_encode($response);

?>
