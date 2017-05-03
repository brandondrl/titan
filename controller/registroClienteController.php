<?php

  $nomb = $_POST['name_php'];
  $ci = $_POST['ci_php'];
  $dir = $_POST['dir_php'];
  $correo = $_POST['correo_php'];
  $tlf = $_POST['tlf_php'];
  $nombreEmpresa = $_POST['nombE_php'];
  $comentarios = $_POST['coment_php'];
  
  if(empty($nomb) || empty($ci)|| empty($dir) || empty($correo) || empty($tlf) || empty($nombreEmpresa)){

    echo 'error_1';

  }else{

    /*
       Si tu usuario require de una validacion de email,
       es decir que contenga @ y .com, .es etc.
       habilita las lineas 21, 32, 33 y 34
    */

    // if(filter_var($user, FILTER_VALIDATE_EMAIL)){

    require_once('../model/cliente.php');

    $cliente = new Cliente();

    $cliente -> registrarCliente($nomb, $ci, $dir, $correo, $tlf, $nombreEmpresa, $comentarios);


  }
   
?>