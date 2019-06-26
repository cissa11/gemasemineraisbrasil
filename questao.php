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
<html>
    <head>
        <title>Gemas e Minerais - Brasil: questionário</title>
        <meta charset="utf-8"/>
        <link rel="shortcut icon" href="http://prints.ultracoloringpages.com/3d2ba83052c6d64a2f1eb8d0785c5efc.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
			
			h3 {
                font-size: 25px;
                text-transform: uppercase;
                color: #610cd1;
                font-weight: 600;
                margin-bottom: 30px;
            }
            #enviar{
                float: right;
            }
            .navbar {
                margin-bottom: 0;
                background-color: #610cd1;
                z-index: 9999;
                border: 0;
                font-size: 14px !important;
                line-height: 1.42857143!important;
                letter-spacing: 4px;
                border-radius: 0;
                font-family: Montserrat, sans-serif;
            }
            .navbar li a, .navbar .navbar-brand {
                color: #fff !important;
            }
            .navbar-default .navbar-toggle {
                border-color: transparent;
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
        </nav><br><br><br>

            <form id="questionario" name ="questionario" method = "post" action="novo_resposta.php">
                <h3 align=center >Que a sorte esteja sempre ao seu favor!!</h3>
                <br>
                
                <h5>Seu nome:</h5>
                <input type="text" name="nome"/>
                <br />
                
                <h5 class="font_1">1) Qual das pedras abaixo possui uma maior resistência, sendo mais difícil de ser quebrada:</h5>
                <label>
                    <input type="radio" name="questao1" value="a" /> A) Topázio;</label>
                <br />
                <label>
                    <input type="radio" name="questao1" value="b" /> B) Alexandrita;</label>
                <br />
                <label>
                    <input type="radio" name="questao1" value="c" /> C) Diamante;</label>
                <br />
                <label>
                    <input type="radio" name="questao1" value="d" /> D) Turmalina Paraíba.</label>
                <br />
                <br />

                <h5 class="font_1">2) Leia as afirmações abaixo sobre pedras preciosas e assinale a correta:</h5>
                <label>
                    <input type="radio" name="questao2" value="a" /> A) A Ametista é um tipo de calcedônia;</label>
                <br />
                <label>
                    <input type="radio" name="questao2" value="b" /> B) Se a Jade ficar muito tempo exposta ao sol, ela pode enfraquecer;</label>
                <br />
                <label>
                    <input type="radio" name="questao2" value="c" /> C) O rubi pode ser encontrado na natureza em tons de marrom;</label>
                <br />
                <label>
                    <input type="radio" name="questao2" value="d" /> D) As maiores jazidas de água-marinha ficam no Brasil.</label>
                <br />
                <br />

                <h5 class="font_1">3) Em relação à composição química das pedras, assinale a alternativa incorreta:</h5>
                <label>
                    <input type="radio" name="questao3" value="a" /> A) O topázio e a esmeralda possuem silício(Si) em sua composiçãoO topázio e a esmeralda possuem silício(Si) em sua composição;</label>
                <br />
                <label>
                    <input type="radio" name="questao3" value="b" /> B) A alexandrita possui nitrogênio (N) em sua composição;</label>
                <br />
                <label>
                    <input type="radio" name="questao3" value="c" /> C) O diamante possui apenas o Carbono (C) em sua composição;</label>
                <br />
                <label>
                    <input type="radio" name="questao3" value="d" /> D) O Topázio possui Alumínio (Al) em sua composição.</label>
                <br />
                <br />

                <h5 class="font_1">4) A respeito dos minerais, assinale a alternativa correta:</h5>
                <label>
                    <input type="radio" name="questao4" value="a" /> A) A composição química do ouro é AuO2;</label>
                <br />
                <label>
                    <input type="radio" name="questao4" value="b" /> B) A bauxita é apenas encontrada em tons de vermelho;</label>
                <br />
                <label>
                    <input type="radio" name="questao4" value="c" /> C) A dureza do Níquel é de 2 a 3 em escala Mohls;</label>
                <br />
                <label>
                    <input type="radio" name="questao4" value="d" /> D) Minerais são sólidos naturais cristalinos formados por meio de processos geológicos físico-químicos.</label>
                <br />
                <br />

                <h5 class="font_1">5) Sobre a pedra Ametista assinale a alternativa incorreta:</h5>
                <label>
                    <input type="radio" name="questao5" value="a" /> A) A cor da Ametista natural pode ser transparente e semi-transparente em tons de púrpura e violeta;</label>
                <br />
                <label>
                    <input type="radio" name="questao5" value="b" /> B) É encontrada em todas rochas ígneas;</label>
                <br />
                <label>
                    <input type="radio" name="questao5" value="c" /> C) Se ficar muito tempo exposta ao sol ela vai perdendo sua coloração;</label>
                <br />
                <label>
                    <input type="radio" name="questao5" value="d" /> D) Se aquecida a aproximadamente 475°C, ela pode transformar-se em citrino, um quartzo de cor amarela, laranja ou vermelha.</label>
                <br />
                <br />

                <h5 class="font_1">6) A respeito da Bauxita, assinale a alternativa incorreta:</h5>
                <label>
                    <input type="radio" name="questao6" value="a" /> A) A dureza dela é de 5-6 em escala Mohls;</label>
                <br />
                <label>
                    <input type="radio" name="questao6" value="b" /> B) Ela é maciça e terrosa, sendo assim é semelhante a argila;</label>
                <br />
                <label>
                    <input type="radio" name="questao6" value="c" /> C) Sua coloração avermelhada é devido à impureza dos óxidos de ferro;</label>
                <br />
                <label>
                    <input type="radio" name="questao6" value="d" /> D) A composição da bauxita é através da decomposição de rochas alcalinas.</label>
                <br />
                <br />

                <h5 class="font_1">7) (FATEC SP/2011)
                    Um dos recursos minerais de maior importância histórica é o carvão mineral. Analise as afirmações a respeito de sua formação e de sua produção e assinale a que considerar verdadeira.<br>
                    I)O carvão mineral pode ser obtido através da queima de árvores e da exploração de reservas soterradas de rocha carbonífera.<br>
                    II)Trata-se de uma rocha sedimentar cuja formação iniciou-se há milhões de anos, a partir da decomposição de materiais orgânicos, como troncos e galhos, que se misturaram ao solo.<br>
                    III) A formação do carvão extraído atualmente ocorreu especialmente nas grandes florestas pantanosas da Europa, da Ásia e da África.:
               </h5>
                <label>
                    <input type="radio" name="questao7" value="a" /> A) I e II apenas;</label>
                <br />
                <label>
                    <input type="radio" name="questao7" value="b" /> B) I e III apenas;</label>
                <br />
                <label>
                    <input type="radio" name="questao7" value="c" /> C) II e III apenas;</label>
                <br />
                <label>
                    <input type="radio" name="questao7" value="d" /> D) nenhuma alternativa.</label>
                <br />
                <br />

                <h5 class="font_1">8) Quais características das pedras preciosas ou gemas são consideradas as mais importantes?</h5>
                <label>
                    <input type="radio" name="questao8" value="a" /> A) Transparência, brilho e dureza;</label>
                <br />
                <label>
                    <input type="radio" name="questao8" value="b" /> B) Transparência, brilho e cor;</label>
                <br />
                <label>
                    <input type="radio" name="questao8" value="c" /> C) Peso, brilho e composição;</label>
                <br />
                <label>
                    <input type="radio" name="questao8" value="d" /> D) Cor, dureza e transparência.</label>
                <br />
                <br />

                <input type="submit" name="enviar" id = "enviar" value="Enviar" />
            </form>
            <br><br>
        </div>
    </body>
