<?php
require("includes/sessao.php");

class formulario{
  private $nome;
  private $sobrenome;
  private $email;
  private $tecnologias;

  function listar(){
    if (isset($dados['enviado'])) {
      unset($dados['enviado']); 
      
      $dados = $_POST;

      $dadosVal=[];
      
  
      $dadosVal['nome'] = trim($dados['nome']);
  
      var_dump($dados['nome'],$dadosVal['nome']);
  
      if ($dadosVal['nome']){
          echo "seu nome é {$dadosVal['nome']}";
      }
      header("Location: index.php");
      exit;
    }  

    }
  }
