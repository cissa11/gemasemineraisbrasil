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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Theme Made By www.w3schools.com - No Copyright -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="http://prints.ultracoloringpages.com/3d2ba83052c6d64a2f1eb8d0785c5efc.png"/>   

        <style>
            #img01{
                top: 250px;
                left: 200px;
                position: absolute;
            }	
            body {
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
                color: #610cd1;
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
            h5 {
                font-size: 25px;
                text-transform: uppercase;
                color: #000000;
                font-weight: 600;
                margin-bottom: 30px;
            }
            h6 {
                font: 400 21px Calibri;
                color: #610cd1;
                text-align:justify;
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
            #img{
                left: 30%
            }
            hr { 
                display: block;
                margin-top: 0.5em;
                margin-bottom: 0.5em;
                margin-left: auto;
                margin-right: auto;
                border-style: inset;
                border-width: 1px;
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
            #map{
                left: 500px;
                position: absolute;
            }
            #Norte {
                position: absolute;
                top: 122px;
                left: 630px;
                font-size: 25px;
                color: black;
            }
            #Sul{
                position: absolute;
                top: 520px;
                left: 740px;
                font-size: 30px;
                color: black;
            }
            #Nordeste{
                position: absolute;
                top: 200px;
                left: 890px;
                font-size: 25px;
                color: black;
            }
            #Centro{
                position: absolute;
                top: 300px;
                left: 710px;
                font-size: 25px;
                color: black;
            }
            #Sudeste{
                position: absolute;
                top: 390px;
                left: 840px;
                font-size: 25px;
                color: black;
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

            <div class = "container">
                <div class="jumbotron text-center">
                    <h5>Bem vindo ao site da mineralogia brasileira!!</h5>
                </div>
                <div class = "container"> 
                    <img src="https://cdn.pixabay.com/photo/2016/09/05/12/39/stones-1646479_960_720.jpg" style="float:left;" alt="mineral" width="330" height="190" />
                    <p ><h2 style="float:right;">
                        O Brasil é considerado um país com uma grande quantidade de minerais, além de<br> ser riquíssimo em pedras preciosas. Isso só é possível graças a 
                        imensa formação de<br> superfícies rochosas antigas, com numerosas rochas ígneas e metamórficas.
                    </h2></p>
                    <p><h2 style="float:right;">Aqui no <i>Gemas e Minerais - Brasil</i> você irá conhecer e aprender sobre as principais<br> gemas e minerais de cada 
                        região brasileira, então é só continuar lendo!</h2></p>
                </div><br>

                <div class = "container">
                    <p> <h3>O que são as gemas?</h3>
                    <h2>As gemas, também chamadas de <b>pedras preciosas</b>, são uma variedade de minerais cristalinos raros. Ao contrário das pedras comuns, as pedras preciosas<br> 
                        possuem a aparência mais caracterizada por suas 
                        as cores, brilho e transparência.</h2>

                    <img src="https://ae01.alicdn.com/kf/HTB1TEQLNVXXXXaIaFXXq6xXFXXXI/420g-Pedras-NATURAIS-e-Minerais-Rocha-MINERAL-Esp-cimes-ESP-CIME-AZURITA-CRISTAL-MIN-RIO-RARO.jpg_640x640.jpgalt="Ametista1" width="340" height="300">
                    <h2> Cada pedra preciosa tem seu valor definido a partir da pureza, raridade de cor, lapidação, peso e composição química.
                        Elas têm diversas utilizações e depois de lapidadas podem se transformar em artefatos de joalheria. 
                    </h2>
                    </p><br>
                    <p><img src="http://2.bp.blogspot.com/-umyQQZHoltk/VpBIx8fEf4I/AAAAAAAAClg/y3BYfnO0IqY/s1600/Quartz_Br%25C3%25A9sil.jpg" alt="cristal" width="370" height="309">
                        <img src="https://http2.mlstatic.com/10-bola-esfera-de-cristal-k9-feng-shui-40-cm-com-argola-aco-D_NQ_NP_988182-MLB29339180984_022019-Q.jpg" style="float:center;" alt="cristal2" width="340" height="310">
                        <img src="https://static.significados.com.br/foto/diamond-316611-1280.jpg" alt="opala" width="358" height="309">
                    </p>
                </div><br>

                <div class = "container">
                    <p> <h3>O que são minerais?</h3>
                    <h2> Minerais são <b>sólidos naturais cristalinos</b> formados por meio de processos geológicos físico-químicos. Cada mineral possui suas propriedades 
                        físicas e químicas e estruturas cristalinas bem definidas, logo existem minerais únicos e completamente distintos.
                        Para compreender à definição de <b>“mineral”</b> usado por geólogos uma substância deve satisfazer os seguintes requisitos: <br><br>
                        &#8594; Ocorrer naturalmente (exclui minerais formados em laboratórios);<br>
                        &#8594; Ser sólido (exclui gases e líquidos);<br>
                        &#8594; Ter composição química bem definida;<br>
                        &#8594; Ser formado por processos inorgânicos (não inclui minerais biogênicos, ou seja, formados por organismos).<br><br>


                    </h2>
                    <img src="https://2.bp.blogspot.com/-JIr0X28pqqM/VsNpb7b5o1I/AAAAAAAABkk/BsDkQ9nLRAY/s1600/malaquite.JPG" alt="mineral" width="380" height="330">
                    <img src="https://i.pinimg.com/originals/49/57/32/4957320ab2bdd9346bc62ae03a832ba7.jpg" style="float:center;" alt="mineral" width="375" height="330" >
                    <img src="http://blankspace.online/wp-content/uploads/2018/04/MUMI-229-Brazilianita-1024x683.jpg" style="float:right;" alt="mineral" width="381" height="330" >

                    </p>
                </div><br><br>
                <hr>
                <div id = "text" > 
                    <p><b><h6> Após essa breve introdução, é só seguir para o <br> próximo passo. Clique na região que quer conhecer<br> do mapa abaixo e então inicie sua experiência! 
                            </h6></b></p>
                </div><br>

                <div id = "map">
                    <img  src="http://abratel.org.br/wp-content/uploads/2016/04/mapa-1.png" style="float:right;" width="650" height="680" />  
                </div>
                <figure id="container">
                    <div id = "Norte">
                        <h2><b><a href="norte.php" style = "color: #000000"> Região Norte</a><b></h2>
                    </div>
                    <div id = "Sul">
                        <h2><b><a href="sul.php" style = "color: #000000">Região Sul</a></b></h2>
                    </div>
                    <div id = "Nordeste">
                        <h2><b><a href="nordeste.php" style = "color: #000000">Região Nordeste</a></b></h2>
                    </div>
                    <div id = "Centro">
                        <h2><b><a href="centro-oeste.php" style = "color: #000000">Região Centro-Oeste</a></b></h2>
                    </div>
                    <div id = "Sudeste">
                        <h2><b><a  href="sudeste.php" style = "color: #000000">Região <br>Sudeste</a></b></h2>
                    </div>
                </figure>
            </div>
        </div>
    </body>
</html>
