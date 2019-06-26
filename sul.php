<?php
session_start();

if (!isset($_SESSION['logado'])):
    header("Location:login.php");
endif;

if (isset($_GET['ac'])):
    //DESLOGAR DO SISTEMA
    if ($_GET['ac'] == 'sair'):
        if (isset($_SESSION['logado'])):
            session_destroy();
            header("Location:login.php");
        endif;
    endif;
endif;

//Pegando valores da session
$nome = $_SESSION['nome'];
$sobrenome = $_SESSION['sobrenome'];
$id = $_SESSION['id'];
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <title>Gemas e Minerais - Brasil</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Theme Made By www.w3schools.com - No Copyright -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="http://prints.ultracoloringpages.com/3d2ba83052c6d64a2f1eb8d0785c5efc.png" >   

        <style>	
            body {
                font: 400 15px Lato, sans-serif;
                line-height: 1.8;
            }

            .jumbotron {
                background-color: #b29ace;
                color: #fff;
                padding: 100px 25px;
                font-family: Montserrat, sans-serif;
            }
            .container-fluid {
                padding: 60px 50px;
            }
            .bg-grey {
                background-color: #bfb9b9;
            }
            .logo-small {
                color:#786a84;
                font-size: 50px;
            }

            .thumbnail {
                padding: 0 0 15px 0;
                border: none;
                border-radius: 0;
            }
            .thumbnail img {
                width: 100%;
                height: 100%;
                margin-bottom: 10px;
            }
            .carousel-control.right, .carousel-control.left {
                background-image: none;
                color:#786a84;
            }
            .carousel-indicators li {
                border-color:#786a84;
            }
            .carousel-indicators li.active {
                background-color: #78a540;
            }
            .item h4 {
                font-size: 19px;
                line-height: 1.375em;
                font-weight: 400;
                font-style: italic;
                margin: 70px 0;
            }
            .item span {
                font-style: normal;
            }
            .panel {
                border: 1px solid #7a51a0; 
                border-radius:0 !important;
                transition: box-shadow 0.5s;
            }
            .panel:hover {
                box-shadow: 5px 0px 40px rgba(0,0,0, .2);
            }
            .panel-footer .btn:hover {
                border: 1px solid #78a540;
                background-color: #fff !important;
                color: #78a540;
            }
            .panel-heading {
                color: #fff !important;
                background-color: #9f26ad !important;
                padding: 25px;
                border-bottom: 1px solid transparent;
                border-top-left-radius: 0px;
                border-top-right-radius: 0px;
                border-bottom-left-radius: 0px;
                border-bottom-right-radius: 0px;
            }
            .panel-footer {
                background-color: white !important;
            }
            .panel-footer h3 {
                font-size: 32px;
            }
            .panel-footer h4 {
                color: #aaa;
                font-size: 14px;
            }
            .panel-footer .btn {
                margin: 15px 0;
                background-color: #78a540;
                color: #fff;
            }
            .navbar {
                margin-bottom: 0;
                background-color: #610cd1;
                z-index: 9999;
                border: 0;
                font-size: 12px !important;
                line-height: 1.42857143 !important;
                letter-spacing: 4px;
                border-radius: 0;
                font-family: Montserrat, sans-serif;
            }
            .navbar li a, .navbar .navbar-brand {
                color: #fff !important;
            }
            .navbar-nav li a:hover, .navbar-nav li.active a {
                color: #7a51a0 !important;
                background-color: #fff !important;

            }
            footer .glyphicon {
                font-size: 25px;
                margin-bottom: 20px;
                color: #f4511e;
            }
            .slideanim {visibility:hidden;}
            .slide {
                animation-name: slide;
                -webkit-animation-name: slide;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                visibility: visible;
            }
            @keyframes slide {
                0% {
                    opacity: 0;
                    transform: translateY(70%);
                } 
                100% {
                    opacity: 1;
                    transform: translateY(0%);
                }
            }
            @-webkit-keyframes slide {
                0% {
                    opacity: 0;
                    -webkit-transform: translateY(70%);
                } 
                100% {
                    opacity: 1;
                    -webkit-transform: translateY(0%);
                }
            }
            @media screen and (max-width: 768px) {
                .col-sm-4 {
                    text-align: center;
                    margin: 25px 0;
                }
                .btn-lg {
                    width: 100%;
                    margin-bottom: 35px;
                }
            }
            @media screen and (max-width: 480px) {
                .logo {
                    font-size: 150px;
                }
            }


            #imagem{

                margin-top: 10px;
                margin-left: 600px;

            }
            #inicio{

                font: 100 5px calibri;
                color: #610cd1;	
                margin-top: 200px;
                margin-left: 150px;

            }

            #menu{

                margin-top: 60px;
                margin-left: 100px;


            }
            #menu2{

                margin-top: -280px;
                margin-left: 400px;

            }


            #botao{

                margin-top: -100px;
                margin-left: 480px;
                background-color: #01DFA5;
                border: #01DFA5;

            }

            #texto{

                position: absolute;
                font-size: 10px;
                top: 460px;
                left: 950px;

            }

            #container {
                display: inline-block;
                position: relative;
            }

            #container figcaption {
                position: absolute;
                top: 110px;
                left: 150px;
                font-size: 25px;
                color: black;
            }



        </style>


    </head>

    <body>


        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="inicio.php"> <span class="glyphicon glyphicon-home">	</span> Gemas e Minerais - Brasil</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><?php echo $id . " - " . $nome . " " . $sobrenome; ?></a></li>  
                        <li><a href="?ac=sair" title="Sair">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>


            <body>

                <div style = "float:left;" id = "inicio">
                    <h1>Você selecionou a região Sul!</h1>
                </div>

                <div id = "imagem">
                    <img class="irc_mi" src="https://www.infoescola.com/wp-content/uploads/2008/10/regiao-sul-768x768.jpg"  width="464" height="464" >
                </div>


                <div id = "menu">

                    <h2>Minerais</h2>


                    <a href="carvao.php" style = "color: #088A29" >1ª Carvão</a><br><br>	
                    <a href="caulim.php" style = "color: #088A29">2ª Caulim</a><br><br>
                    <a href="granito.php" style = "color: #088A29">3ª Granito</a><br><br>
                    <a href="ouro.php" style = "color: #088A29">4ª Ouro</a><br><br>
                  


                </div>

                <div id = "menu2">

                    <h2>Pedras Preciosas</h2>


                    <a href="agata.php" style = "color: #088A29">1ª Ágata</a><br><br>	
                    <a href="ametista.php" style = "color: #088A29">2ª Ametista</a><br><br>
                    <a href="onix.php" style = "color: #088A29">3ª Ônix</a><br><br>
                    
                   

                </div>

                <div id = "texto">
                    <p><h2>Pronto para o questionário?</h2></p>
                </div>
                <div id = "botao">
                    <button id="botao" type="button" class="btn btn-info"><a style = "color: #FFFFFF"" href="questao.php"> Questionário</a></button><br>

                </div>
            </body>
</html>
