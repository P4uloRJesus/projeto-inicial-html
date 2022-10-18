<?php

/* header("Location: index.php");
exit; */
//POO - Programação orientada a objeto (Sempre inicia classe com letra maiúscula)
class Empresa {

  //Atributos
  private $name;
  private $cnpj;
  private $contact;
  public $country;

  function __construct($country){
    $this->country = $country;
  }

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

 public function getCountry(){

  return $this->country;
 }

}

//criando objetos da class empresa
$empresa = new Empresa("Brasil");
$empresa2 = new Empresa("EUA");

$test = (bool) 0;

$empresa ;

$empresa->setName($test === false);
$empresa2->setName('    IPAC Prime     ');


$nomeEmpresa = null;

var_dump($nomeEmpresa ? 'OK' : 'falso');

$nomeEmpresa = 'outra empresa';
$empresa->setName($nomeEmpresa);

var_dump($nomeEmpresa, $empresa->getName(),$empresa->getCountry());
die();