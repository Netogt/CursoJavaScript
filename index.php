<?php
//incluindo banco de dados 

  include("conectbd.php");
	
   ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logojavascript.png" type="image/x-icon">
    <link rel="stylesheet" href="index.css">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Curso JavaScript</title>
    
</head>
<body>
    
    <section class="secao1">
        <header class="cabecalho"><img class="logojs" src="imagens/jslogo.png" alt="logo JavaScript"></header>
        <div class="mainsc1">
            <h1 class="titulo">Aprenda JavaScript de uma vez por todas!!!</h1>
            <img class="imgnote" src="imagens/notebook.png" alt="imagen inlustrativa">
            <p class="paragrafo1">Torne-se um programador profissional na linguagem mais famosa e mais versátil do mercado.</p>
        </div>
    </section>

    <section class="secao2">
      
        <div class="flashcard">

            <div class="bola">
                <div class="ifjs">
                    <h2 class="js1">JS</h2><h2 class="grade">Grade</h2>
                </div>
            </div>

            <div class="lista">
                <ul class="elements">
                    <li>História do JS</li>
                    <li>Introdução a variáveis</li>
                    <li>DOM</li>
                    <li>Conversões de dados</li>
                    <li>Operadores</li>
                    <li>Condições</li>
                    <li>Estruturas de repetições</li>
                    <li>Arrays</li>
                    <li>Funções</li>
                </ul>
            </div>

        </div>

        <img class="imaginlus1" src="imagens/mulherprog.png" alt="">
       
    </section>

    <section class="secao3">
        <h2 class="tlcdastro">Quer se tornar nosso aluno?</h2>
        <div class="maincs3">
            <img class="imgsc3" src="imagens/fundo.png" alt="">
            <div class="opcadastro">
                <p class="cadastroin">Cadastre-se agora clicando no botão abaixo:</p>
                <div onclick="abrinsc()" class="btcadastro">Inscreva-se</div>
            </div>
        </div>
    </section>

    <div class="fundois" id="fundfor">

        <form class="formulario" method="Post" action="configbd.php" >
            
            <div class="tlcadastro"><i onclick="voltarhome()" class="bi bi-box-arrow-left" id="botaovl"></i><h2 class="titulois">Cadastro de novos alunos</h2></div>
            <div class="linefor">

                <div class="columfor">
                    <div>
                        <label class="labelfor" for="nome">Nome</label>
                        <input id="nomealuno" class="inputfor" type="text" name="nome1" required="" placeholder="Digite Seu Nome">
                    </div>
                    
                    <div>
                        <label class="labelfor" for="sbnome">E-mail</label>
                        <input id="emailaluno" class="inputfor" type="text" name="email1" required="" placeholder="Digite Seu E-mail">
                    </div>

                    <div>
                        <label class="labelfor" for="email">Confirmar E-mail</label>
                        <input  id="cfemailaluno" class="inputfor" type="email" name="email" required="" placeholder="Confirme Seu E-mail">
                    </div>
                     <p id="erroEm" style="color: red; "></p>
                    <button class="botao" type="submit">Inscreva-se</button>
                </div>

            </div>
        </form>
    </div>
    <footer><p>@cursosdejavascript</p></footer>
    

    <script src="index.js">
    </script>

    <?php
    
     $inscricao = $_GET['inscricao'];


     if($inscricao == "emailer"){
        echo "
            <script>
                 emailEr();
                 abrinsc();
            </script>
        ";
     }else if($inscricao == "emailcd"){
        echo "
            <script>
                emailCd();
                abrinsc();
            </script>
        ";
     }else if($inscricao == "ok"){
        echo "
            <script>
                window.alert('inscrição realizada com sucesso, verifique sua caixa de e-mail')
            </script>
        ";
     }else if($inscricao == "erro"){
        echo "
            <script>
                window.alert('Houve um erro desconhecido')
            </script>
        ";
     };
    ?>
</body>
</html>