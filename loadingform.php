<?php
require("includes/logica-usuario.php");
 
$dados = $_POST;

 if (isset($dados['enviado'])) {
  unset($dados['enviado']); 

  $dadosVal=[];
  

  $dadosVal['nome'] = trim($dados['nome']);

  //var_dump($dados['nome'],$dadosVal['nome']);

  if ($dadosVal['nome']){
      //echo "seu nome é {$dadosVal['nome']}";
  }

$_SESSION['dados'] = $dadosVal;

/* var_dump($_SESSION);
die(); */


  header("Location: formulario.php");
  exit;
}else {
  header("Location: formulario.php");
  exit;
} 
  /*include("Form.php"); $form = new formulario();

  $form->listar(); */

?>