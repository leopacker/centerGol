<?php include("fun_ .php") ?>
<?php include("verificar_cookie.php") ?>
<?php include("conexao.php") ?>
<?php include("verificar_restrito.php") ?>
<!DOCTYPE html>
<html>
<?php include("head.php") ?>
<body>
<div id="container">
<div id="cima"><?php include("cima.php") ?></div>
<div id="conteudo">

<div id="esquerda"><?php include("esquerda.php") ?>></div>
<div id="direita"><?php include("direita.php") ?></div>
<div id="principal">
<!-- IN�CIO DA P�GINA -->


<script language="javascript">
function valida_stcg() {

if (document.stcg.assunto.value==0) {
	alert("� necess�rio selecionar o assunto.");
	document.stcg.assunto.focus();
	return false;
}

if (document.stcg.denuncia.value=="") {
	alert("� necess�rio preencher a den�ncia.");
	document.stcg.denuncia.focus();
	return false;
}

}
</script>
<div class="box">
	<div class="topo_esquerdo"><div class="topo_direito"><div class="topo_meio"><h1>Superior Tribunal do centergol</h1></div></div></div>
	<div class="conteudo">

<div id="linha10">Fa�a a sua den�ncia e aguarde o contato dos administradores.</div>

<?php if ( ($_GET["msg_stcg"]) == 1) { ?>

<div id="linha10"><span class="img16"><img width="16" height="16" src="figuras/principal/alerta_sim.png"></span> Den�ncia enviada com sucesso!</div>

<?php } ?>

<form name="stcg" method="post" action="stcg_salvar.php" onSubmit="return valida_stcg()">
<div id="linha10">
<span class="fonte_form">Qual o assunto desejado?</span>
<span class="align_form">
<select name="assunto" style="width: 150px; height: 26px">
<option value="0"></option>
<option value="Clone ou Proxy">Clone ou Proxy</option>
<option value="Uso de Bugs">Uso de Bugs</option>
<option value="Roubo">Roubo</option>
<option value="Outro">Outro</option>
</select>
</span>
</div>

<div id="linha15"><span class="fonte_form">Qual a sua den�ncia?</span> <span class="align_form"><input name="denuncia" type="text" maxlength="200" style="width: 200px; height: 20px"></span></div>

<div id="linha12"><input name="submit" type="image" src="figuras/principal/botao_confirmar.png" onClick="return valida_stcg()"></div>
</form>

	</div>
	<div class="baixo_esquerdo"><div class="baixo_direito"><div class="baixo_meio"></div></div></div>
</div>

<!-- FIM DA P�GINA -->
</div>
<div class="clear"></div>

</div>
<div id="baixo"><?php include("baixo.php") ?></div>
</div>
</body>
</html>