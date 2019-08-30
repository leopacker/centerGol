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


<?php
$p = anti_inj($_GET['p']);

if (ereg('[^0-9]',$p)) {
	header("Location: index.php"); break;
}

if (!$p) {
	$p = 1;
}

$limite = 10;
$inicio = $p - 1;
$inicio = $limite * $inicio;

$data = date("Y-m-d") ." 00:00:00";

$query = mysql_query("SELECT Count(ID) AS cadastrados_quantidade FROM Usuarios WHERE Cadastro >= '". $data ."' AND Confirmar = '0'");
$rs = mysql_fetch_array($query);

$cadastrados_quantidade = $rs["cadastrados_quantidade"];

$p_total = ceil($cadastrados_quantidade / $limite);

if ($p_total < 1) {
	$p_total = 1;
}

if ($p > $p_total) {
	header("Location: cadastrados.php?p=1"); break;
}

ob_end_flush();
?>

<div class="box">
	<div class="topo_esquerdo"><div class="topo_direito"><div class="topo_meio"><h1>Cadastrados Hoje (<?=number_format($cadastrados_quantidade,0,',','.')?>)</h1></div></div></div>
	<div class="conteudo" style="padding-top: 4px">

<?php if ($cadastrados_quantidade > 0) { ?>

<div id="linha6">

<table width="550" cellpadding="0" cellspacing="0">

<?php

$query_wl = 0;

$query = mysql_query("SELECT Usuarios.ID as Usuario_ID, Usuarios.Usuario as Usuario_Nome, Usuarios.Nivel as Usuario_Nivel, Usuarios.Time as Usuario_Time, Usuarios.Gols_Total as Usuario_Gols_Total, Usuarios.VIP as Usuario_VIP, Usuarios.VIP_Cor as Usuario_VIP_Cor, Times.Time as Time_Nome FROM Usuarios INNER JOIN Times ON Times.ID = Usuarios.Time WHERE Cadastro >= '". $data ."' AND Confirmar = '0' ORDER BY Usuarios.Cadastro DESC LIMIT $inicio,$limite");

?>

<?php while ($rs = mysql_fetch_array($query)) { ?>

<?php $query_wl = $query_wl + 1; ?>

<?php if ($query_wl == 1) { ?>
	<tr height="25" bgcolor="#B6B6B6">
        <td width="235" style="padding-left: 31px" class="fonte1_negrito">Usu�rio</td>
		<td width="235" class="fonte1_negrito">Time</td>
		<td width="80" class="fonte1_negrito">Gols</td>
	</tr>
<?php } ?>

	<tr>
		<td style="padding-top: 5px"><span class="img25"><img width="25" height="25" src="figuras/niveis/<?=$rs["Usuario_Nivel"]?>.png" title="<?=$rs["Usuario_Nivel"]?>" alt="<?=$rs["Usuario_Nivel"]?>"></span> <a href="usuario.php?id=<?=$rs["Usuario_ID"]?>"><?php if ($rs["Usuario_VIP"] > 0) { ?><span id="usuario_vip<?=$rs["Usuario_VIP_Cor"]?>"><?=$rs["Usuario_Nome"]?></span><?php } else { ?><span id="usuario_normal"><?=$rs["Usuario_Nome"]?></span><?php } ?></a></td>
		<td style="padding-top: 5px"><span class="img20"><a href="time.php?id=<?=$rs["Usuario_Time"]?>"><img width="20" height="20" src="figuras/times_pequenos/<?=$rs["Usuario_Time"]?>.png" title="<?=$rs["Time_Nome"]?>" alt="<?=$rs["Time_Nome"]?>" border="0"></a></span> <a href="time.php?id=<?=$rs["Usuario_Time"]?>"><?=$rs["Time_Nome"]?></a></td>
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

<?php
if ($cadastrados_quantidade > $limite) {
	$p_nome = "cadastrados";
	include("paginacao1.php");
}
?>


<!-- FIM DA P�GINA -->
</div>
<div class="clear"></div>

</div>
<div id="baixo"><?php include("baixo.php") ?></div>
</div>
</body>
</html>