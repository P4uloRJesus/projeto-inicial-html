<?php

/* header("Location: index.php");
exit; */
//POO - Programação orientada a objeto (Sempre inicia classe com letra maiúscula)
class Empresa {

  //Atributos
  private $name;
  private $cnpj;
  private $contact;

//Função sempre inicia com nome minúsculo
 public function setName($name){
  $this->name = $name;
 }

 public function getName() {

  //var_dump();
  //die();

  //Atribuição de variável
  $name = 'teste';

  //$this->name <> $name
  return $this->name;

 }

}

//criando objetos da class empresa
$empresa = new Empresa();
$empresa2 = new Empresa();

$test = (bool) 0;

$empresa->setName($test === false);
$empresa2->setName('    IPAC Prime     ');


$nomeEmpresa = null;

var_dump($nomeEmpresa ? 'OK' : 'falso');

$nomeEmpresa = 'outra empresa';
$empresa->setName($nomeEmpresa);

var_dump($nomeEmpresa, $empresa->getName());
die();


// phpinfo()

$dados = $_POST;

echo "<h1>formulario </h1> <br>";
var_dump($dados); 
//die;

/* echo $dados['nome'];
 echo "<p><b>{$dados['sobrenome']}</b></p>";
echo "<p><b>{$dados['email']}</b></p>";  */



?>

<p>
  <strong>
    <?php
    echo "seu nome é: " . $dados['nome'] . " " .  $dados['sobrenome'] .  "<br>";
    echo "seu email é: " . $dados['email'] . "<br>";
    echo "você é um desenvolvedor de: " . $dados['devweb'] . "<br>";
    echo "que vai ganhar a copa: " . $dados['vencedor'];

    ?>
  </strong>
</p>

<?php
if (isset($dados['tecnologia'])) : ?>
  
  <p> voce escolheu essas tecnologias: </p>
  <ol>
  <?php foreach ($dados['tecnologia'] as $tec):  
    //var_dump($tec);?>

      <li><?= $tec ?></li>
      
    <?php
    endforeach;?>
  </ol>   
  
 <?php

endif;

  if ($dados['experiencia']){
    echo "Sua experiência: {$dados['experiencia']}";
}

?>




  <?php
  /* se tecnologia existe fazer foreach e depois exibir em uma lista 

*/

  ?>

  <?php
  /* if (isset($dados['tecnologia1'])):
  echo "<li>{$dados['tecnologia1']}</li>";
endif;

if (isset($dados['tecnologia2'])){
  echo "<li>{$dados['tecnologia2']}</li>";
}

 if (isset($dados['tecnologia3'])){
  echo "<li>{$dados['tecnologia3']}</li>";
 }

if (isset($dados['tecnologia4'])){
  echo "<li>{$dados['tecnologia4']}</li>";
 }

if (isset($dados['tecnologia5'])){
  echo "<li>{$dados['tecnologia5']}</li>";
 }

if (isset($dados['tecnologia6'])){
  echo "<li>{$dados['tecnologia6']}</li>"; 
}
  
if ($dados['experiencia']){
  echo "experiencia: ";
}
 */

  ?>


<?php



?>