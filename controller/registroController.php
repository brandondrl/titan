<?php

  # Leemos las variables enviadas mediante Ajax
  $nomb = $_POST['name_php'];
  $user = $_POST['user_php'];
  $mail = $_POST['email_php'];
  $pass = $_POST['clave_php'];

  # Verificamos que los campos no esten vacios, el chiste de este if es que si almenos una variable (o campo) esta vacio mostrara error_1
  if(empty($nomb) || empty($user)|| empty($mail) || empty($pass)){

    echo 'error_1';

  }else{

    /*
       Si tu usuario require de una validacion de email,
       es decir que contenga @ y .com, .es etc.
       habilita las lineas 21, 32, 33 y 34
    */

    // if(filter_var($user, FILTER_VALIDATE_EMAIL)){

    require_once('../model/usuario.php');

    $usuario = new Usuario();

    $usuario -> registrar($nomb, $user, $mail, $pass);


  }



?>
