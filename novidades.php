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


<div class="box">
	<div class="topo_esquerdo"><div class="topo_direito"><div class="topo_meio"><h1>Novidades</h1></div></div></div>
	<div class="conteudo">

<div id="linha10">Mais novidades em breve.</div>
<div id="linha10"></div>
<div id="linha10"></div>

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