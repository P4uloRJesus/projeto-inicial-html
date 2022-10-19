<?php 
session_start();
include_once("conexao.php");

$nome = filter_input( INPUT_POST, 'nome', FILTER_DEFAULT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

var_dump($nome,$email);
//die;

 $result_usuario = "INSERT INTO usuarios (nome, email, created) VALUES ('$nome', '$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn) ) {
  $_SESSION['msg'] = "<p style ='color:green;'>Usuario cadastrado com sucesso</p>";
  header("location: formulario.php");
}

else{
  $_SESSION['msg'] = "<p style='color:red;'>Usuario não foi cadastrado com sucesso</p>";
  header("location: formulario.php");
}