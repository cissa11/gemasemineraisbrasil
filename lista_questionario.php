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

<!DOCTYPE html>
<html lang="pt" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Gemas e Minerais - Brasil: Login</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" href="http://prints.ultracoloringpages.com/3d2ba83052c6d64a2f1eb8d0785c5efc.png"/>   
        <style>
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
            body {
                font: 400 15px Lato, sans-serif;
                line-height: 1.8;
                background-image: linear-gradient(to top, rgba(255,0,0,0), rgba(206, 173, 249, 1));
            }
            html, body {
                height: 100%;
            }
            #info{
                padding: 1em;
                border: 1px solid #CCC;
                border-radius: 1em;
            }
            #inner {
                display: inline-block;

            }
            .tabela {
                margin-top: 65px;
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

        <div class="container">
            <div class="tabela">
                <table class="table table-bordered">
                    <tr>
                        <th>Participante</th>
                        <th>Questão</th>
                        <th>Resposta part.</th>
                        <th>Resposta</th>
                        <th>Data cadastro</th>
                    </tr>
                    <?php
                    try {
                        $connection = new PDO("mysql:host=localhost;dbname=bd01", "root", "");
                    } catch (PDOExcepetion $e) {
                        echo "Falha: " . $e->getMessage();
                        exit();
                    }

                    $rs = $connection->prepare("select * from questionario");
                    if ($rs->execute()) {
                        while ($registro = $rs->fetch(PDO::FETCH_OBJ)) {
                            echo"<tr>";
                            echo"<td>" . $registro->participante . "</td>";
                            echo"<td>" . $registro->pergunta . "</td>";
                            echo"<td>" . $registro->resposta_participante . "</td>";
                            echo"<td>" . $registro->resposta_correta . "</td>";
                            echo"<td>" . $registro->data_cadastro . "</td>";
                            echo"</tr>";
                        }
                    } else {
                        echo "Falha na seleção de usuários!!!!";
                    }
                    ?>
                </table>
            </div>
            <br>
                <a href="cadastro.php">Criar um novo registro</a>
        </div>
    </body>
</html>
