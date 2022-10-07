<?php

// phpinfo()

$dados = $_POST;

echo "hello wolrd <br>";
// var_dump($dados); 
// die;

echo $dados["nome"];
echo "<p><b>{$dados['sobrenome']}</b></p>";
echo "<p><b>{$dados['email']}</b></p>";



?>

<!-- <p>
  <small>
    <?php echo $dados['email'] ?> 
  </small>
</p> -->
