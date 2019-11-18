<?php

  session_start();
  $user = $_SESSION['idUser'];

  #recibimos la data
  $job = $_GET['job'];

  #hacemos la ejecucion del script...
  $varPath = "/var/www/html/smartTraining/dataStorage/$user/$job/correlationMatrix_$job.csv";

  $command = "python /var/www/html/smartTraining/model/LauncherreadCSV.py $varPath";
  $output = [];

  exec($command, $output);

  echo $output[0];
?>
