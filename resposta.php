<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Respostas</title>
	<style>
	
	body{
		background-color: #FFFFFF;
		position:absolute;
		left:20%;
	


		padding: 10em;
		border: 5px solid #CCC;
		border-radius: 10em;
		border-color:#088A85;

	}
		
	</style>

</head>

<body>
 
<?php
 
$questao1 = $_POST["questao1"];
$questao2 = $_POST["questao2"];
$questao3 = $_POST["questao3"];
 
echo "<b>Questao 1</b> = ".$questao1."<br>";
echo "<b>Questao 2</b>= ".$questao2."<br>";
echo "<b>Questao 3</b> = ".$questao3."<br><br>";

 
$resposta1 = "c";
$resposta2 = "d";
$resposta3 = "a";
 
$acertou = 0;
$errou = 0;


if ($questao1 == $resposta1)
{
    $acertou++;
    echo "<font color = blue> Questao 1 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 1 errada<br></font>";
}
 
if ($questao2 == $resposta2)
{
    $acertou++;
    echo "<font color = blue> Questao 2 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 2 errada<br></font>";
}
 
if ($questao3 == $resposta3)
{
    $acertou++;
    echo "<font color = blue> Questao 3 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 3 errada<br></font>";
}

$calc = 3;
$porcent = $calc * $acertou;
 
echo "<br><br> Voce acertou $acertou e errou $errou.";
 
 
if ($acertou >=1)
{
echo "<br><br><b><blink>Muito bem, um total de $porcent % de acerto</blink></b>";
}
else
{
echo "<br><br><b><blink> Voce nao foi muito bem, um total de $porcent% de acerto, tente novamente!</blink></b>";
}
 
?>
</body>
</html>

