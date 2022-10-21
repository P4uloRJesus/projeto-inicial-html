<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <title>CRUD- Listar</title>
</head>

<body>
  <a href="index.php">Home</a><br>
  <a href="formulario.php">Formulario</a><br>

  <h1>Listar Usuário</h1>
  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }

  //receber o número da pagina
  $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
  $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

  //setar a qunatidade de itens por paginas 
  $qnt_result_pg = 5;

  //calcular o inicio visualização
  $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

  $result_usuarios = "SELECT * FROM usuarios LIMIT $inicio,$qnt_result_pg";
  $result_usuarios = mysqli_query($conn, $result_usuarios);
  while ($row_usuarios = mysqli_fetch_assoc($result_usuarios)) {
    // var_dump($result_usuarios);

    echo "ID: " . $row_usuarios['id'] . "<br>";
    echo "Nome: " . $row_usuarios['nome'] . "<br>";
    echo "E-mail: " . $row_usuarios['email'] . "<br>";
    echo "<a href='visualizar.php'>Visualizar</a><br>";
    echo "<hr>";
  } 


  //paginção - somar a quantidade de usuários


  $result_pg = "SELECT COUNT(id) AS num_result FROM usuarios";
  $resultado_pg = mysqli_query($conn, $result_pg);

  if ($error = mysqli_error($conn)) {

    echo $error;
    die();
  }

  $row_pg = mysqli_fetch_assoc($resultado_pg);

  //echo $row_pg['num_result'];
  //quantidade de paginas 
  $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

  //limitar os links antes depois 
  $max_links = 2;
  echo "<a href='listar.php?pagina=1'> primeira </a>";

  for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
    if ($pag_ant >= 1) {
      echo "<a href='listar.php?pagina= $pag_ant '> $pag_ant </a>";
    }
  }
  echo "$pagina ";

  for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
    if ($pag_dep <= $quantidade_pg) {
      echo "<a href='listar.php?pagina= $pag_dep '> $pag_dep </a>";
    }
  }

  echo "<a href='listar.php?pagina= $quantidade_pg '> ultima </a>";

  ?>

</body>

</html>