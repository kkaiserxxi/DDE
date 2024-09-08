<?php 

$db_name = 'mysql:host=localhost;dbname=deepdiveexpo';
$user_name = 'MSI';
$user_password = 'msi12';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
       //SILENT
       //WARNING
  );
$conn = new PDO($db_name, $user_name, $user_password,$options);

