<?php
    $erro = null;
    $valido = false;

    if (isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true) {
        if (strlen(utf8_decode($_POST["nome"])) < 3) {
            $erro = "Preencha o campo nome corretamente (3 ou mais caracteres)";
        }
        if (strlen(utf8_decode($_POST["sobrenome"])) < 3) {
            $erro = "Preencha o campo sobrenome corretamente (3 ou mais caracteres)";
        } else if (strlen(utf8_decode($_POST["email"])) < 6) {
            $erro = "E-mail inválido, preencha corretamente";
        } else {
            $valido = true;

        try {//classe PDO serve para fazer comunicação com BD
            $conection = new PDO("mysql:host=localhost;dbname=bd01", "root", "");
            $conection->exec("set names utf8");
        } catch (PDOException $e) {
            echo "Falha" . $e->getMessenge();
            exit();
        }
        $sql = "insert into usuarios(nome, sobrenome, email, senha, confirmasenha)
            values(?,?,?,?,?)";

        $stmt = $conection->prepare($sql);

        $stmt->bindParam(1, $_POST["nome"]);
        $stmt->bindParam(2, $_POST["sobrenome"]);
        $stmt->bindParam(3, $_POST["email"]);

        $passwordHash = md5($_POST["senha"]);
        $stmt->bindParam(4, $passwordHash);

        $passwordHash = md5($_POST["confirmasenha"]);
        $stmt->bindParam(5, $passwordHash);

        $stmt->execute();

        if ($stmt->errorCode() != "00000") {
            $valido = false;
            $erro = "Erro código " . $stmt->errorCode() . ": ";
            $erro .=implode(", ", $stmt->errorInfo());
        }
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <title>Cadastro</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="http://prints.ultracoloringpages.com/3d2ba83052c6d64a2f1eb8d0785c5efc.png" >   

        <style>
            #outer {
                position:absolute;
                left:43%;
                top: 10%;
            }
            #botao{
                text-align: center;
            }
            #inner {
                display: inline-block;
            }
            
            #info{
                padding: 1em;
                border: 1px solid #CCC;
                border-radius: 1em;
            }
            #tud{

                margin-left:5px;

                margin-top:00px;
                text-align:top;
                font-family: Verdana, Tahoma, Arial;
                height:100%;
            }

            body {
                background-image: linear-gradient(to top, rgba(255,0,0,0), rgba(206, 173, 249, 1));

                font: 400 15px Lato, sans-serif;
                line-height: 1.8;
            }
            h1{
                font-size: 40px;
                color: 000;
                text-align: center;
            }

            h2 {
                font: 400 18px Calibri;
                color: #000000;
                text-align:justify;
            }
            h3 {
                font-size: 25px;
                text-transform: uppercase;
                color: #119b6c;
                font-weight: 600;
                margin-bottom: 30px;
            }
            h4 {
                font-size: 19px;
                line-height: 1.375em;
                color: #303030;
                font-weight: 400;
                margin-bottom: 30px;
            }  
            .jumbotron {
                background-color: #786a84;
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
            .navbar-default .navbar-toggle {
                border-color: transparent;
                color: #fff !important;
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
            #img{
                left: 30%
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php"> <span class="glyphicon glyphicon-home">	</span> Gemas e Minerais - Brasil</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.php" target="_blank">LOGIN</a></li>  
                        

                    </ul>
                </div>
            </div>
        </nav><br><br>


    

    <HTML>
        <HEAD>
            <TITLE>Banco de Dados: Cadastro</TITLE>
        </HEAD>
        <BODY>
    <?php
    if ($valido == true) {
        echo "Dados enviados com sucesso!";
    } else {

        if (isset($erro)) {
            echo $erro . "<BR><BR>";
        }
        ?>



                <FORM method=POST action="?validar=true" id ="outer">

                    <h1>Cadastro</h1> 
                    <h2>Nome:</h2>
                    <INPUT type=TEXT name=nome 
                <?php if (isset($_POST["nome"])) {
                    echo "value='" . $_POST["nome"] . "'";
                } ?>
                           ><BR>

                    <h2>Sobrenome:</h2>
                    <INPUT type=TEXT name=sobrenome 
                <?php if (isset($_POST["sobrenome"])) {
                    echo "value='" . $_POST["sobrenome"] . "'";
                } ?>
                           ><BR>

                    <h2>E-mail:</h2>
                    <INPUT type=TEXT name=email
    <?php if (isset($_POST["email"])) {
        echo "value='" . $_POST["email"] . "'";
    } ?>
                           ><BR>

                    <h2>Senha:</h2>
                    <INPUT type=PASSWORD name="senha" id=""><BR>

                    <h2>Confirmar senha:</h2>
                    <INPUT type=PASSWORD name="confirmasenha"><BR><br><br>

                    <INPUT type=SUBMIT value="Enviar" id="botao" >
                </FORM>
                    <?php
                }
                ?>
        </BODY>
    </HTML>