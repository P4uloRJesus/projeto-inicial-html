<?php 
include_once("conexao.php");

$nome = filter_input( INPUT_POST, 'nome', FILTER_DEFAULT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

var_dump($nome,$email);
//die;

 $result_usuario = "INSERT INTO usuarios (nome, email, created) VALUES ('$nome', '$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn) ) {

  header("location: formulario.php");
}

else{
  header("location: formulario.php");
}