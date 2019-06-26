<?php
//DATA CADASTRO
date_default_timezone_set('America/Sao_Paulo');
$dataCadastro = date('Y-m-d');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <title>Respostas</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" href="http://prints.ultracoloringpages.com/3d2ba83052c6d64a2f1eb8d0785c5efc.png"/>   
        <style>
            body{
                background-image: linear-gradient(to top, rgba(255,0,0,0), rgba(206, 173, 249, 1));
                font: 400 15px Lato, sans-serif;
                line-height: 1.8;
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

    <body align=center>
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="inicio.php"> <span class="glyphicon glyphicon-home">	</span>	Gemas e Minerais - Brasil</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="questao.php" target="_blank">VOLTAR</a></li>  


                        </ul>
                    </div>
                </div>
            </nav>
            <br><br>      

            <div class="container">
                <div class="tabela">
                    <h3>Resultado</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="col-md-8">Participante</th>
                                <th class="col-md-4 text-center">Data cadastro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $_POST["nome"]; ?></td>
                                <td class="text-center"><?php echo $dataCadastro; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tabela">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="col-md-8">Questão</th>
                                <th class="col-md-4 text-center">Resposta participante</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Questao 1</td>
                                <td class="text-center"><?php echo $_POST["questao1"]; ?></td>
                            </tr>
                            <tr>
                                <td>Questao2</td>
                                <td class="text-center"><?php echo $_POST["questao2"]; ?></td>
                            </tr>
                            <tr>
                                <td>Questao 3</td>
                                <td class="text-center"><?php echo $_POST["questao3"]; ?></td>
                            </tr>
                            <tr>
                                <td>Questao 4</td>
                                <td class="text-center"><?php echo $_POST["questao4"]; ?></td>
                            </tr>
                            <tr>
                                <td>Questao 5</td>
                                <td class="text-center"><?php echo $_POST["questao5"]; ?></td>
                            </tr>
                            <tr>
                                <td>Questao 6</td>
                                <td class="text-center"><?php echo $_POST["questao6"]; ?></td>
                            </tr>
                            <tr>
                                <td>Questao 7</td>
                                <td class="text-center"><?php echo $_POST["questao7"]; ?></td>
                            </tr>
                            <tr>
                                <td>Questao 8</td>
                                <td class="text-center"><?php echo $_POST["questao8"]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div> 

                <div class="tabela">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="col-md-8">Questão</th>
                                <th class="col-md-4 text-center">Resposta participante</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //MONTANDO VARIAVEIS
                            $nome = $_POST["nome"];
                            $questao1 = $_POST["questao1"];
                            $questao2 = $_POST["questao2"];
                            $questao3 = $_POST["questao3"];
                            $questao4 = $_POST["questao4"];
                            $questao5 = $_POST["questao5"];
                            $questao6 = $_POST["questao6"];
                            $questao7 = $_POST["questao7"];
                            $questao8 = $_POST["questao8"];

                            //CONECTANDO AO BANCO DE DADOS
                            try {
                                $conection = new PDO("mysql:host=localhost;dbname=bd01", "root", "");
                            } catch (PDOException $e) {
                                echo "Falha" . $e->getMessenge();
                                exit();
                            }

                            //VARIAVEIS AUXILIARES PARA SALVAR NO BANCO
                            $textoQuestao1 = "Questao 01";
                            $textoQuestao2 = "Questao 02";
                            $textoQuestao3 = "Questao 03";
                            $textoQuestao4 = "Questao 04";
                            $textoQuestao5 = "Questao 05";
                            $textoQuestao6 = "Questao 06";
                            $textoQuestao7 = "Questao 07";
                            $textoQuestao8 = "Questao 08";

                            //VARIAVEIS COM AS RESPOSTAS CORRETAS
                            $resposta1 = "c";
                            $resposta2 = "d";
                            $resposta3 = "b";
                            $resposta4 = "d";
                            $resposta5 = "b";
                            $resposta6 = "a";
                            $resposta7 = "c";
                            $resposta8 = "b";

                            //VARIAVEIS AUXILIARES
                            $acertou = 0;
                            $errou = 0;
                            $respostaQuestao1 = "";
                            $respostaQuestao2 = "";
                            $respostaQuestao3 = "";
                            $respostaQuestao4 = "";
                            $respostaQuestao5 = "";
                            $respostaQuestao6 = "";
                            $respostaQuestao7 = "";
                            $respostaQuestao8 = "";

                            //VERIFICANDO AS RESPOSTA DO PARTICIPANTE
                            if ($questao1 == $resposta1) {
                                $acertou++;
                                $respostaQuestao1 = "Questao 1 correta";
                                echo "<tr><td>Questao 01</td><td class='text-center'><font color = blue> Questao 1 correta</font></td></tr>";
                            } else {
                                $errou++;
                                $respostaQuestao1 = "Questao 1 errada";
                                echo "<tr><td>Questao 01</td><td class='text-center'><font color = red> Questao 1 errada</font></td></tr>";
                            }

                            if ($questao2 == $resposta2) {
                                $acertou++;
                                echo "<tr><td>Questao 02</td><td class='text-center'><font color = blue> Questao 2 correta</font></td></tr>";
                            } else {
                                $errou++;
                                $respostaQuestao2 = "Questao 2 errada";
                                echo "<tr><td>Questao 02</td><td class='text-center'><font color = red> Questao 2 errada</font></td></tr>";
                            }

                            if ($questao3 == $resposta3) {
                                $acertou++;
                                $respostaQuestao3 = "Questao 3 correta";
                                echo "<tr><td>Questao 03</td><td class='text-center'><font color = blue> Questao 3 correta</font></td></tr>";
                            } else {
                                $errou++;
                                $respostaQuestao3 = "Questao 3 errada";
                                echo "<tr><td>Questao 03</td><td class='text-center'><font color = red> Questao 3 errada</font></td></tr>";
                            }
                            if ($questao4 == $resposta4) {
                                $acertou++;
                                $respostaQuestao4 = "Questao 4 correta";
                                echo "<tr><td>Questao 04</td><td class='text-center'><font color = blue> Questao 4 correta</font></td></tr>";
                            } else {
                                $errou++;
                                $respostaQuestao4 = "Questao 4 errada";
                                echo "<tr><td>Questao 04</td><td class='text-center'><font color = red> Questao 4 errada</font></td></tr>";
                            }if ($questao5 == $resposta5) {
                                $acertou++;
                                $respostaQuestao5 = "Questao 5 correta";
                                echo "<tr><td>Questao 05</td><td class='text-center'><font color = blue> Questao 5 correta</font></td></tr>";
                            } else {
                                $errou++;
                                $respostaQuestao5 = "Questao 5 errada";
                                echo "<tr><td>Questao 05</td><td class='text-center'><font color = red> Questao 5 errada</font></td></tr>";
                            }if ($questao6 == $resposta6) {
                                $acertou++;
                                $respostaQuestao6 = "Questao 6 correta";
                                echo "<tr><td>Questao 06</td><td class='text-center'><font color = blue> Questao 6 correta</font></td></tr>";
                            } else {
                                $errou++;
                                $respostaQuestao6 = "Questao 6 errada";
                                echo "<tr><td>Questao 06</td><td class='text-center'><font color = red> Questao 6 errada</font></td></tr>";
                            }
                            if ($questao7 == $resposta7) {
                                $acertou++;
                                $respostaQuestao7 = "Questao 7 correta";
                                echo "<tr><td>Questao 07</td><td class='text-center'><font color = blue> Questao 7 correta</font></td></tr>";
                            } else {
                                $errou++;
                                $respostaQuestao7 = "Questao 7 errada";
                                echo "<tr><td>Questao 07</td><td class='text-center'><font color = red> Questao 7 errada</font></td></tr>";
                            }
                            if ($questao8 == $resposta8) {
                                $acertou++;
                                $respostaQuestao8 = "Questao 8 correta";
                                echo "<tr><td>Questao 08</td><td class='text-center'><font color = blue> Questao 8 correta</font></td></tr>";
                            } else {
                                $errou++;
                                $respostaQuestao8 = "Questao 8 errada";
                                echo "<tr><td>Questao 08</td><td class='text-center'><font color = red> Questao 8 errada</font></td></tr>";
                            }

                            //SALVANDO O QUESTIONARIO NO BANCO
                            $sql = "insert into questionario(participante, pergunta, resposta_participante, resposta_correta, data_cadastro)values(?,?,?,?,?)";
                            //SALVA QUESTÃO UM
                            $stmtQuestao1 = $conection->prepare($sql);
                            $stmtQuestao1->bindParam(1, $nome);
                            $stmtQuestao1->bindParam(2, $textoQuestao1);
                            $stmtQuestao1->bindParam(3, $questao1);
                            $stmtQuestao1->bindParam(4, $respostaQuestao1);
                            $stmtQuestao1->bindParam(5, $dataCadastro);
                            $stmtQuestao1->execute();
                            //SALVA A QUESTÃO DOIS
                            $stmtQuestao2 = $conection->prepare($sql);
                            $stmtQuestao2->bindParam(1, $nome);
                            $stmtQuestao2->bindParam(2, $textoQuestao2);
                            $stmtQuestao2->bindParam(3, $questao2);
                            $stmtQuestao2->bindParam(4, $respostaQuestao2);
                            $stmtQuestao2->bindParam(5, $dataCadastro);
                            $stmtQuestao2->execute();
                            //SALVA A QUESTÃO TRES
                            $stmtQuestao3 = $conection->prepare($sql);
                            $stmtQuestao3->bindParam(1, $nome);
                            $stmtQuestao3->bindParam(2, $textoQuestao3);
                            $stmtQuestao3->bindParam(3, $questao3);
                            $stmtQuestao3->bindParam(4, $respostaQuestao3);
                            $stmtQuestao3->bindParam(5, $dataCadastro);
                            $stmtQuestao3->execute();
                            //SALVA A QUESTÃO QUATRO
                            $stmtQuestao4 = $conection->prepare($sql);
                            $stmtQuestao4->bindParam(1, $nome);
                            $stmtQuestao4->bindParam(2, $textoQuestao4);
                            $stmtQuestao4->bindParam(3, $questao4);
                            $stmtQuestao4->bindParam(4, $respostaQuestao4);
                            $stmtQuestao4->bindParam(5, $dataCadastro);
                            $stmtQuestao4->execute();
                            //SALVA A QUESTÃO CINCO
                            $stmtQuestao5 = $conection->prepare($sql);
                            $stmtQuestao5->bindParam(1, $nome);
                            $stmtQuestao5->bindParam(2, $textoQuestao5);
                            $stmtQuestao5->bindParam(3, $questao5);
                            $stmtQuestao5->bindParam(4, $respostaQuestao5);
                            $stmtQuestao5->bindParam(5, $dataCadastro);
                            $stmtQuestao5->execute();
                            //SALVA A QUESTÃO SEIS
                            $stmtQuestao6 = $conection->prepare($sql);
                            $stmtQuestao6->bindParam(1, $nome);
                            $stmtQuestao6->bindParam(2, $textoQuestao6);
                            $stmtQuestao6->bindParam(3, $questao6);
                            $stmtQuestao6->bindParam(4, $respostaQuestao6);
                            $stmtQuestao6->bindParam(5, $dataCadastro);
                            $stmtQuestao6->execute();
                            //SALVA A QUESTÃO SETE
                            $stmtQuestao7 = $conection->prepare($sql);
                            $stmtQuestao7->bindParam(1, $nome);
                            $stmtQuestao7->bindParam(2, $textoQuestao7);
                            $stmtQuestao7->bindParam(3, $questao7);
                            $stmtQuestao7->bindParam(4, $respostaQuestao7);
                            $stmtQuestao7->bindParam(5, $dataCadastro);
                            $stmtQuestao7->execute();
                            //SALVA A QUESTÃO OITO
                            $stmtQuestao8 = $conection->prepare($sql);
                            $stmtQuestao8->bindParam(1, $nome);
                            $stmtQuestao8->bindParam(2, $textoQuestao8);
                            $stmtQuestao8->bindParam(3, $questao8);
                            $stmtQuestao8->bindParam(4, $respostaQuestao8);
                            $stmtQuestao8->bindParam(5, $dataCadastro);
                            $stmtQuestao8->execute();                            
                            ?>
                        </tbody>
                    </table>
                </div>
                
                <?php 
                    $calc = 8;
                    $porcent = round(($acertou * 100) / $calc, 2);
                ?>
                
                <div class="panel panel-default">
                    <div class="panel-heading">Voce acertou <?php $acertou; ?> e errou <?php echo $errou; ?>.</div>
                    <div class="panel-body">
                        <?php 
                            if ($acertou > 12.5) {
                                echo "<b><blink>Muito bem, um total de $porcent % de acerto</blink></b>";
                            } else {
                                echo "<b><blink> Voce nao foi muito bem, um total de $porcent% de acerto, tente novamente!</blink></b>";
                            }                        
                        ?>
                    </div>
                </div>                
                
            </div>
        </div>
    </body>
</html>