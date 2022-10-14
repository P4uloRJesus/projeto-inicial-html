<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script src="https://kit.fontawesome.com/d35376beee.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/formulario.css " media="">


    <title>formulario</title>
</head>

<body>

    <a href="index.php" class="link"> <i class="fas fa-arrow-left" src="http://localhost/formulario-cadastro/"> </i></a>



    <div>
        <!-- <a href="index.html"> <img src="img/seta.png" alt="setinha" width="20px"  ></a> -->
        <h1 id="titulo">Formulario teste</h1>
        <p id="subtitulo">Complete com suas informações abaixo</p>
        <br>
    </div>
    <!-- action="recebe.php" -->
 <form autocomplete="on" method="post" > 
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" name="nome" id="nome">
            </div>

            <div class="campo">
                <label for="sobrenome"><strong>Sobrenome</strong></label>
                <input type="text" name="sobrenome" id="sobrenome">
            </div>
        </fieldset>

        <div class="campo">
            <label for="email"><strong>Email</strong></label>
            <input type="email" name="email" id="email">
        </div>

        <div class="campo campo-opcoes">
            <label><strong> qual lado de aplicação você desenvolve? </strong></label>
            <label>
                <input type="radio" name="devweb" value="front-end">Front-end
            </label>
            <label>
                <input type="radio" name="devweb" value="back-end">Back-end
            </label>
            <label>
                <input type="radio" name="devweb" value="fullstack">Fullstack
            </label>
        </div>

        <div class="campo">
            <label for="quem ira ganhar a copa"><strong>quem ira ganhar a copa</strong></label>
            <select id="quem ira ganhar a copa" name="vencedor">
                <option selected disabled value="">selecione</option>
                <option value="Brasil">Brasil</option>
                <option value="Brazil">Brazil</option>
                <option value="BR">BR</option>
            </select>
        </div>

        <?php

        $tecnologias = [
            "HTML",
            "PHP",
            "JAVASCRIPT",
            "JAVA",
            "PYTHON",
            "C#",
            "C++",
            "REACT"
        ];

        

        //var_dump($tecnologias);

        ?>
        <fieldset class="grupo2">
            <div id="check">
                <label><strong>selecione as tecnologias que utiliza:</strong></label><br><br>

                <?php

                $max = count($tecnologias);
                echo "o total de tecnologias é $max <br>";

                $cont = 1;

                foreach ($tecnologias as $tec) : 
                 

                //var_dump($key,$tec);
                ?>

                <input type="checkbox" name="tecnologia<?= $cont ?>" id="tecnologia<?= $cont ?>" value="<?= $tec ?>">
                    <label for="tecnologia<?= $cont ?>"><strong><?= $tec ?></strong></label> 
                <?php
                  $cont++;                
                endforeach  ?>


                <?php

                /* $max = count($tecnologias);
                    echo "o total de tecnologias é $max <br>";
                     */
                //$cont = 1;
                
                 

                /* for ($cont = 0; $cont <= 6; $cont++) :


                   // var_dump($tecnologias[$cont]);

                   // die;
                ?>
                ?>
                    <input type="checkbox" name="tecnologia[]" id="tecnologia<?= $cont + 1?>" value="<?= $tecnologias[$cont] ?>">
                    <label for="tecnologia<?= $cont + 1 ?>"><strong><?= $tecnologias[$cont] ?></strong></label>
                <?php
                //$cont++;                
                endfor ?>
 */
?>




            </div>
            <!-- <div id="check">
                <label><strong>selecione as tecnologias que utiliza:</strong></label><br><br>
                <input type="checkbox" name="tecnologia1" id="tecnologia1" value="HTML">
                <label for="tecnologia1"><strong>HTML</strong></label>
                <input type="checkbox" name="tecnologia2" id="tecnologia2" value="PHP">
                <label for="tecnologia2"><strong>PHP</strong></label>
                <input type="checkbox" name="tecnologia3" id="tecnologia3" value="JAVASCRIPT">
                <label for="tecnologia3"><strong>JAVASCRIPT</strong></label>
                <input type="checkbox" name="tecnologia4" id="tecnologia4" value="JAVA">
                <label for="tecnologia4"><strong>JAVA</strong></label>
                <input type="checkbox" name="tecnologia5" id="tecnologia5" value="PYTHON">
                <label for="tecnologia5"><strong>PYTHON</strong></label>
                <input type="checkbox" name="tecnologia6" id="tecnologia6" value="C#">
                <label for="tecnologia6"><strong>C#</strong></label>

            </div> -->

            <div class="campo">

                <label><strong>Conte um pouco da sua experiencia</strong></label>
                <textarea rows="5" style="width:26em;" id="experiencia " name="experiencia" placeholder="escreva sua experiencia aqui"></textarea>
            </div>

            <button name="enviado" class="botao" type="submit">Concluido</button>
            <input type="reset" value="Limpar">
        </fieldset>


    </form>
    <?php
    
    $dados = $_POST;
    /* var_dump($dados);
    die(); */
     if (isset($dados['enviado'])) {

        echo $dados['nome'];
     }

    ?>


</body>

</html>