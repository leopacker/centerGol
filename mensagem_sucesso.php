<?php ob_start(); ?>
<?php include_once("fun_anti_inj.php") ?>
<?php include("verificar_cookie.php") ?>
<?php include("conexao.php") ?>
<?php include("verificar_conexao.php") ?>
<html>
<head>
<title>Liga Campe�es - L�der em Futebol Online!</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body topmargin="0" leftmargin="0" style="overflow: hidden">
<?php
$id = anti_inj($_GET['id']);

if (!$id) {
	header("Location: index.php"); break;
}

if (ereg('[^0-9]',$id)) {
	header("Location: index.php"); break;
}

ob_end_flush();
?>

<div style="padding-top: 5"><span class="img16"><img width="16" height="16" src="figuras/principal/alerta_sim.png"></span> Mensagem enviada com sucesso! <a href="mensagem_enviar.php?id=<?=$id?>">(escrever outra)</a>
</div>
</div>
</body>
</html>