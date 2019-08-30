<?php ob_start(); ?>
<?php include_once("fun_anti_inj.php") ?>
<?php include("verificar_cookie.php") ?>
<?php include("conexao.php") ?>
<!DOCTYPE html>
<html>
<?php include("head.php") ?>
<body>
<div id="container">
<div id="cima"><?php include("cima.php") ?></div>
<div id="conteudo">

<div id="esquerda"><?php include("esquerda.php") ?></div>
<div id="direita"><?php include("direita.php") ?></div>
<div id="principal">
<!-- IN�CIO DA P�GINA -->


<script language="javascript">
function valida_procurar() {

if (document.procurar.usuario.value=="") {
	alert("� necess�rio preencher o nome.");
	document.procurar.usuario.focus();
	return false;
}

if (document.procurar.usuario.value.length<2) {
	alert("� necess�rio preencher um nome maior.");
	document.procurar.usuario.focus();
	return false;
}

}
</script>

<?php
$usuario = anti_inj($_POST['usuario']);

if ($usuario) {

if (!ctype_alnum($usuario)) {
	header("Location: index.php"); break;
}

if (strlen($usuario) > 15) {
	header("Location: index.php"); break;
}

}

ob_end_flush();
?>

<div class="box">
	<div class="topo_esquerdo"><div class="topo_direito"><div class="topo_meio"><h1>Procurar</h1></div></div></div>
	<div class="conteudo">

<form name="procurar" method="post" action="procurar.php" onSubmit="return valida_procurar()">
<div id="linha10"><span class="fonte_form">Qual o nome do usu�rio?</span> <span class="align_form"><input name="usuario" type="text" maxlength="15" value="<?=$usuario?>" style="width: 200px; height: 20px"></span></div>

<div id="linha12"><input name="submit" type="image" src="figuras/principal/botao_procurar_interno.png" onClick="return valida_procurar()"></div>
</form>

<script language="javascript">
document.procurar.usuario.focus();
</script>

	</div>
	<div class="baixo_esquerdo"><div class="baixo_direito"><div class="baixo_meio"></div></div></div>
</div>

<?php if (!$usuario) { ?>

<div id="divide"></div>

<div class="box">
	<div class="topo_esquerdo"><div class="topo_direito"><div class="topo_meio"><h1>Importante</h1></div></div></div>
	<div class="conteudo">

<div id="linha10">Sistema listar� apenas 30 resultados em ordem de gols.</div>
<div id="linha10">Seja o mais preciso poss�vel na sua busca.</div>

	</div>
	<div class="baixo_esquerdo"><div class="baixo_direito"><div class="baixo_meio"></div></div></div>
</div>

<?php } else { ?>

<?php
$query = mysql_query("SELECT Count(ID) AS procurar_quantidade FROM Usuarios WHERE Usuario like '%". $usuario ."%' AND Confirmar = '0'");
$rs = mysql_fetch_array($query);

$procurar_quantidade = $rs["procurar_quantidade"];
?>
<div id="divide"></div>

<div class="box">
	<div class="topo_esquerdo"><div class="topo_direito"><div class="topo_meio"><h1>Resultado</h1></div></div></div>
	<div class="conteudo" style="padding-top: 4px">

<?php if ($procurar_quantidade > 0) { ?>

<div id="linha6">

<table width="550" cellpadding="0" cellspacing="0">

<?php

$medalha = 0;
$query = mysql_query("SELECT ID FROM Usuarios WHERE Gols_Hora > 0 ORDER BY Gols_Hora DESC LIMIT 3");

while ($rs = mysql_fetch_array($query)) {

$medalha = $medalha + 1;

if ($medalha == 1) {
	$medalha_1 = $rs["ID"];
} else if ($medalha == 2) {
	$medalha_2 = $rs["ID"];
} else if ($medalha == 3) {
	$medalha_3 = $rs["ID"];
}

}

$query_wl = 0;

$query = mysql_query("SELECT Usuarios.ID as Usuario_ID, Usuarios.Usuario as Usuario_Nome, Usuarios.Nivel as Usuario_Nivel, Usuarios.Gols_Total as Usuario_Gols_Total, Usuarios.VIP as Usuario_VIP, Usuarios.VIP_Cor as Usuario_VIP_Cor, Times.Id as Time_ID, Times.Time as Time_Nome FROM Usuarios INNER JOIN Times ON Times.ID = Usuarios.Time WHERE Usuario like '%". $usuario ."%' AND Confirmar = '0' ORDER BY Gols_Total DESC LIMIT 30");

?>

<?php while ($rs = mysql_fetch_array($query)) { ?>

<?php $query_wl = $query_wl + 1; ?>

<?php if ($query_wl == 1) { ?>
	<tr height="25" bgcolor="#B6B6B6">
		<td width="238" style="padding-left: 31px" class="fonte1_negrito">Usu�rio</td>
		<td width="237" class="fonte1_negrito">Time</td>
		<td width="75" class="fonte1_negrito">Gols</td>
	</tr>
<?php } ?>

	<tr>
		<td style="padding-top: 5px"><span class="img25"><img width="25" height="25" src="figuras/niveis/<?=$rs["Usuario_Nivel"]?>.png" title="<?=$rs["Usuario_Nivel"]?>" alt="<?=$rs["Usuario_Nivel"]?>"></span> <a href="usuario.php?id=<?=$rs["Usuario_ID"]?>"><?php if ($rs["Usuario_VIP"] > 0) { ?><span id="usuario_vip<?=$rs["Usuario_VIP_Cor"]?>"><?=$rs["Usuario_Nome"]?></span><?php } else { ?><span id="usuario_normal"><?=$rs["Usuario_Nome"]?></span><?php } ?></a> <?php if ($rs["Usuario_ID"] == $medalha_1) { ?><span class="medalha"><img width="16" height="16" src="figuras/principal/medalha1.png" title="Top 1 da Hora" alt="Top 1 da Hora"></span><?php } else if ($rs["Usuario_ID"] == $medalha_2) { ?><span class="medalha"><img width="16" height="16" src="figuras/principal/medalha2.png" title="Top 2 da Hora" alt="Top 2 da Hora"></span><?php } else if ($rs["Usuario_ID"] == $medalha_3) { ?><span class="medalha"><img width="16" height="16" src="figuras/principal/medalha3.png" title="Top 3 da Hora" alt="Top 3 da Hora"></span><?php } ?></td>
		<td style="padding-top: 5px"><span class="img20"><a href="time.php?id=<?=$rs["Time_ID"]?>"><img width="20" height="20" src="figuras/times_pequenos/<?=$rs["Time_ID"]?>.png" title="<?=$rs["Time_Nome"]?>" alt="<?=$rs["Time_Nome"]?>" border="0"></a></span> <a href="time.php?id=<?=$rs["Time_ID"]?>"><?=$rs["Time_Nome"]?></a></td>
		<td style="padding-top: 5px"><?=number_format($rs["Usuario_Gols_Total"],0,',','.')?></td>
	</tr>

<?php } ?>

</table>

</div>

<?php } else { ?>

<div id="linha6"><span class="img16"><img width="16" height="16" src="figuras/principal/alerta_nao.png"></span> Nenhum usu�rio encontrado.</div>

<?php } ?>

	</div>
	<div class="baixo_esquerdo"><div class="baixo_direito"><div class="baixo_meio"></div></div></div>
</div>

<?php } ?>


<!-- FIM DA P�GINA -->
</div>
<div class="clear"></div>

</div>
<div id="baixo"><?php include("baixo.php") ?></div>
</div>
</body>
</html>