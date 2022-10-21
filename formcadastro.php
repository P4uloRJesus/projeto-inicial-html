<?php
session_start();
include_once("conexao2.php");
/* include("header.php");
require("includes/sessao.php"); */
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">

  <title>Cadastro</title>
</head>

<body>
  <h1>Formulario de Cadastro PDO</h1>
  <a href="index.php">Home</a><br><br>
  <?php
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

  if (!empty($dados['CadUsuario'])) {
    var_dump($dados);

    //palavra chave para acessar a tabela.
    $query_usuario = "INSERT INTO cadastros (nome, email) VALUES ('" . $dados["nome"] . "', '" . $dados["email"] . "')";
    $cad_usuario = $conn->prepare($query_usuario);
    $cad_usuario->execute();
    if($cad_usuario->rowCount()){
      echo "<p style='color: green;'>Usuário cadastrado com sucesso!</p><br>";
    }else{
      echo "<p style='color: red;'>Erro: Usuário não cadastrado com sucesso!</p><br>";
    
    }
  }
  ?>
  <form name="cad-usuario" method="POST" action="">
    <label>Nome: </label>
    <input type="text" name="nome" id="nome" placeholder="Nome Completo"><br><br>

    <label>E-mail: </label>
    <input type="email" name="email" id="email" placeholder="seu melhor e-mail"><br><br>

    <input type="submit" value="cadastrar" name="CadUsuario">


</body>

</html>