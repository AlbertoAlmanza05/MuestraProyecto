<?php 
  $servidor = 'localhost';
  $usuario = 'root';
  $clave = '';
  $baseDatos = 'proyectoegresados';

  $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDatos);
  try {
    $conn = new PDO("mysql:host=$server;dbname=$database;",$usermane,$password);
  }catch(PDOException $error){
    die('Conección fallida: '.$error->getMessage());
  }
?>