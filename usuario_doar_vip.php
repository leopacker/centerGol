<?php ob_start(); ?>
<?php include_once("fun_anti_inj.php") ?>
<?php include("verificar_cookie.php") ?>
<?php include("conexao.php") ?>
<?php include("verificar_conexao.php") ?>
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
function somente_numeros(evt) {

var key_code = evt.keyCode  ? evt.keyCode  :
				evt.charCode ? evt.charCode :
				evt.which    ? evt.which    : void 0;

if (key_code == 8 ||  key_code == 9 ||  key_code == 13 || key_code == 48 ||  key_code == 49 ||  key_code == 50 ||  key_code == 51 ||  key_code == 52 ||  key_code == 53 ||  key_code == 54 ||  key_code == 55 ||  key_code == 56 ||  key_code == 57) { return true; }

return false;

}

function valida_doar_vip() {

if (document.doar_vip.q.value=="") {
	alert("� necess�rio preencher a quantidade.");
	document.doar_vip.q.focus();
	return false;
}

if (document.doar_vip.q.value==0) {
	alert("� necess�rio preencher um valor maior.");
	document.doar_vip.q.focus();
	return false;
}

}
</script>

<?php
$id = anti_inj($_GET['id']);

if (!$id or $id == "") {
	header("Location: index.php"); break;
}

if (ereg('[^0-9]',$id)) {
	header("Location: index.php"); break;
}

$query = mysql_query("SELECT Usuarios.Usuario as Usuario_Nome, Usuarios.Nivel as Usuario_Nivel, Usuarios.Dinheiro as Usuario_Dinheiro, Usuarios.Gols_Total as Usuario_Gols_Total, Usuarios.Status as Usuario_Status, Usuarios.VIP as Usuario_VIP, Usuarios.VIP_Cor as Usuario_VIP_Cor, Times.ID as Time_ID, Times.Time as Time_Nome FROM Usuarios INNER JOIN Times ON Times.ID = Usuarios.Time WHERE Usuarios.ID = '". $id ."'");
$rs = mysql_fetch_array($query);

$usuario_nome = $rs["Usuario_Nome"];
$usuario_time_id = $rs["Time_ID"];
$usuario_time_nome = $rs["Time_Nome"];
$usuario_nivel = $rs["Usuario_Nivel"];
$usuario_dinheiro = $rs["Usuario_Dinheiro"];
$usuario_gols_total = $rs["Usuario_Gols_Total"];
$usuario_vip = $rs["Usuario_VIP"];
$usuario_vip_cor = $rs["Usuario_VIP_Cor"];

ob_end_flush();
?>

<?php if ($id == $mc_id) { ?>

<div class="box">
	<div class="topo_esquerdo"><div class="topo_direito"><div class="topo_meio"><h1>Doar VIP</h1></div></div></div>
	<div class="conteudo">

<div id="linha10"><span class="img16"><img width="16" height="16" src="figuras/principal/alerta_nao.png"></span> Voc� n�o pode doar VIP para si mesmo.</div>

	</div>
	<div class="baixo_esquerdo"><div class="baixo_direito"><div class="baixo_meio"></div></div></div>
</div>

<?php } else { ?>

<div class="box">
	<div class="topo_esquerdo"><div class="topo_direito"><div class="topo_meio"><h1>Sobre o Usu�rio</h1></div></div></div>
	<div class="conteudo">

<div id="linha10"><span class="img25"><img width="25" height="25" src="figuras/niveis/<?=$usuario_nivel?>.png" title="<?=$usuario_nivel?>" alt="<?=$usuario_nivel?>"></span> <span class="img20"><a href="time.php?id=<?=$usuario_time_id?>"><img width="20" height="20" src="figuras/times_pequenos/<?=$usuario_time_id?>.png" title="<?=$usuario_time_nome?>" alt="<?=$usuario_time_nome?>" border="0"></a></span> <a href="usuario.php?id=<?=$id?>"><?php if ($usuario_vip > 0) { ?><span id="usuario_vip<?=$usuario_vip_cor?>"><?=$usuario_nome?></span><?php } else { ?><span id="usuario_normal"><?=$usuario_nome?></span><?php } ?></a> <span class="align5">(<?=number_format($usuario_gols_total,0,',','.')?> <?php if ($usuario_gols_total == 1) { ?> gol<?php } else { ?> gols<?php } ?>)</span></div>

<div id="linha10"><span class="img16"><img width="16" height="16" src="figuras/principal/dinheiro.png" title="Dinheiro" alt="Dinheiro"></span> <b>Dinheiro:</b> <?=number_format($usuario_dinheiro,0,',','.')?></div>

	</div>
	<div class="baixo_esquerdo"><div class="baixo_direito"><div class="baixo_meio"></div></div></div>
</div>

<div id="divide"></div>

<div class="box">
	<div class="topo_esquerdo"><div class="topo_direito"><div class="topo_meio"><h1>Doar VIP</h1></div></div></div>
	<div class="conteudo">

<?php if (anti_inj($_GET["msg_doar_vip"]) == 1) { ?>

<div id="linha10"><span class="img16"><img width="16" height="16" src="figuras/principal/alerta_sim.png"></span> VIP doado com sucesso!</div>

<?php } else if (anti_inj($_GET["msg_doar_vip"]) == 2) { ?>

<div id="linha10"><span class="img16"><img width="16" height="16" src="figuras/principal/alerta_nao.png"></span> Voc� n�o tem essa quantidade de VIP!</div>

<?php } else if (anti_inj($_GET["msg_doar_vip"]) == 3) { ?>

<div id="linha10"><span class="img16"><img width="16" height="16" src="figuras/principal/alerta_nao.png"></span> Doa��o m�nima � de 1 dia!</div>

<?php } else if (anti_inj($_GET["msg_doar_vip"]) == 4) { ?>

<div id="linha10"><span class="img16"><img width="16" height="16" src="figuras/principal/alerta_nao.png"></span> Voc� precisa ser n�vel 15 para doar!</div>

<?php } ?>

<form name="doar_vip" method="post" action="usuario_doar_vip_salvar.php?id=<?=$id?>" onSubmit="return valida_doar_vip()">

<div id="linha10"><span class="fonte_form">Quanto dias voc� quer doar?</span> <span class="align_form"><input name="q" type="text" maxlength="2" onKeyPress="return somente_numeros(event);" style="width: 40px; height: 20px"></span></div>

<div id="linha12"><input name="submit" type="image" src="figuras/principal/botao_confirmar.png" onClick="return valida_doar_vip()"></div>

</form>

<script language="javascript">
document.doar_vip.q.focus();
</script>

	</div>
	<div class="baixo_esquerdo"><div class="baixo_direito"><div class="baixo_meio"></div></div></div>
</div>

<div id="divide"></div>

<div class="box">
	<div class="topo_esquerdo"><div class="topo_direito"><div class="topo_meio"><h1>Importante</h1></div></div></div>
	<div class="conteudo">

<div id="linha10">Preencha o valor somente com n�meros.</div>
<div id="linha10">Voc� n�o pode doar todas as unidades, tem que ficar com no m�nimo 1 dia de VIP.</div>
<div id="linha10">Ao clicar em confirmar, a sua a��o n�o poder� ser desfeita.</div>
<div id="linha10">N�o nos responsabilizamos por vendas feitas por esse sistema.</div>

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