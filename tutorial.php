        <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
        <script type='text/javascript' src='js/jquery-ui.js'></script>
        <link type='text/css' href='js/black-tie/jquery-ui-1.8.18.custom.css' rel='stylesheet' />

            <script type="text/javascript">

                $(function() {







                    // Dialog			
                    $('#dialog').dialog({
                        autoOpen: true,
                        width: 450,
                        buttons: {
                            "Desativar Tutorial": function() {
                                $(this).dialog("close");
                                location.href = "inicio.php?desabilitar";

                            },
                            "Continuar Tutorial": function() {
                                $(this).dialog("close");
                                $('#dialog2').dialog('open');

                            }

                        }
                    });

                    $('#dialog2').dialog({
                        autoOpen: false,
                        width: 450,
                        buttons: {
                            "Continuando...": function() {
                                $(this).dialog("close");
                                $('#dialog3').dialog('open');
                            }
                        }
                    });

                    $('#dialog3').dialog({
                        autoOpen: false,
                        width: 450,
                        buttons: {
                            "Continuando...": function() {
                                $(this).dialog("close");
                                $('#dialog4').dialog('open');
                            }
                        }
                    });

                    $('#dialog4').dialog({
                        autoOpen: false,
                        width: 450,
                        buttons: {
                            "Continuando...": function() {
                                $(this).dialog("close");
                                $('#dialog5').dialog('open');
                            }
                        }
                    });

                    $('#dialog5').dialog({
                        autoOpen: false,
                        width: 450,
                        buttons: {
                            "Continuando...": function() {
                                $(this).dialog("close");
                                $('#dialog6').dialog('open');
                            }
                        }
                    });

                    $('#dialog6').dialog({
                        autoOpen: false,
                        width: 450,
                        buttons: {
                            "Continuando...": function() {
                                $(this).dialog("close");
                                $('#dialog7').dialog('open');
                            }
                        }
                    });
					$('#dialog7').dialog({
                        autoOpen: false,
                        width: 450,
                        buttons: {
                            "Continuando...": function() {
                                $(this).dialog("close");
                                $('#dialog8').dialog('open');
                            }
                        }
                    });
					 $('#dialog8').dialog({
                        autoOpen: false,
                        width: 450,
                        buttons: {
                            "Continuando...": function() {
                                $(this).dialog("close");
                                $('#dialog9').dialog('open');
                            }
                        }
                    });
					$('#dialog9').dialog({
                        autoOpen: false,
                        width: 450,
                        buttons: {
                            "Continuando...": function() {
                                $(this).dialog("close");
                                $('#dialog10').dialog('open');
                            }
                        }
                    });
					$('#dialog10').dialog({
                        autoOpen: false,
                        width: 450,
                        buttons: {
                            "Tutorial Acabou, Agora voc� est� mais Experiente! Clique Aqui para Receber seu VIP": function() {
                                $(this).dialog("close");
                                location.href = "ganhar_vip.php";
                            }
                        }
                    });
					
                });
            </script>

            <div id="dialog" title="Tutorial centergol">
                <div class='texto_imagem'>
                    <img src="figuras/principal/treinador.png" alt="Capit�o" >
                        Bem Vindo ao centergol, sou o Treinador "Alex" e vou te ensinar a jogar!</div>
                <br/><br/>
               <strong> O que � o centergol?</strong>
                <br/><br/>
                � atualmente o jogo de futebol online mais completo, mais interativo e sem d�vidas o mais divertido. � um jogo que est� sempre inovando, conta atualmente com seu sistema de contrato para que os usu�rios possam sentir a sensa��o de ser contratado por um clube, de ter seu passe ofertado, de sentir o gosto de poder escolher entre v�rios clubes para defender. Marca gols com o sistema autom�tico e tamb�m com dois entretenimentos, Passe Certo e P�nalti. Seque o seu rival e marque gol para o advers�rio dele na Rodada. Pode tamb�m desafiar os usu�rios em cobran�as de p�nalti valendo LC (dinheiro virtual do jogo), computando seus resultados e saldo. Conta tamb�m com um sistema de mercado interno para que os usu�rios possam vender seus �tens que n�o querem mais, o que torna o jogo cada vez mais interativo. Entre nessa voc� tamb�m e venha descobrir o prazer de jogar centergol, que a cada dia que passa s� pensa em trazer mais novidades.
                <br /><br />
                <strong>OBS: Ao completar o tutorial voc� ganha 1 dia de VIP Gratis!</strong>
            </div>


            <div id="dialog2" title="Tutorial centergol">
                 <div class='texto_imagem'>
                    <img src="figuras/principal/treinador.png" alt="Capit�o" >
                        Bem Vindo ao centergol, sou o Treinador "Alex" e vou te ensinar a jogar!</div>
                <br/><br/>
               <strong> O que � Rodada?</strong>
                <br/><br/>
                Sistema de rodada serve para voc� ver quem seu time est� enfrentando, se ele est� perdendo ou ganhando, voc� pode ver o publico atual do jogo e tamb�m a Renda atual que o jogo lucrou.
                <br /> <br />
                <strong>Cada rodada dura 24 Horas.</strong>
                <br /><br />
                <div id="jogos" style="margin-top: 5px;border-top: 1px dashed #AAAAAA;padding-top: 5px">
                    <font color="red">
                        <b>Jogos:</b> </font> No sistema de rodada voc� verifica com quem seu time est� jogando, se est� ganhando ou perdendo.</div>
                <div id="publico" style="margin-top: 5px;border-top: 1px dashed #AAAAAA;padding-top: 5px">
                    <font color="red">
                        <b>Publico:</b> </font> � gerado com o n�mero de online nos dois times na troca da rodada.
                </div>
                <div id="renda" style="margin-top: 5px;border-top: 1px dashed #AAAAAA;padding-top: 5px">
                    <font color="red">
                        <b>Renda:</b> </font> A Renda do jogo s� � aplicada ao time mandante.
                 </div>
                <div id="placar" style="margin-top: 5px;border-top: 1px dashed #AAAAAA;padding-top: 5px">
                    <font color="red">
                        <b>Diferen�a:</b> </font> Para vencer o jogo a diferen�a tem que ser no m�nimo 60%
                 </div>

            </div>


            <div id="dialog3" title="Tutorial centergol">
                 <div class='texto_imagem'>
                    <img src="figuras/principal/treinador.png" alt="Capit�o" >
                        Bem Vindo ao centergol, sou o Treinador "Alex" e vou te ensinar a jogar!</div>
                <br/><br/>
               <strong> Meu Perfil</strong>
                <br/><br/>
                No Meu Perfil voc� ver todas as suas estat�sticas como:<br /><br /><strong> Nome<br /> Vip<br /> Time<br /> Avatar<br /> Dinheiro<br /> Camisa<br /> Amigos<br /> Itens,<br /> Conquistas<br /> Mercado<br /> Convidados<br /> Carreira<br /> Historico<br /> Seu ranking<br /> Desafios<br /> Contratos<br /> etc...</strong>
                <br /><br />
                <div id="troca" style="margin-top: 5px;border-top: 1px dashed #AAAAAA;padding-top: 5px">
                    <font color="red">
                        <b>Trocas na Temporada:</b> </font> Voc� s� pode trocar de time 3 vezes na Temporada</div>
            </div>


            <div id="dialog4" title="Tutorial centergol">
                <div class='texto_imagem'>
                    <img src="figuras/principal/treinador.png" alt="Capit�o" >
                        Bem Vindo ao centergol, sou o Treinador "Alex" e vou te ensinar a jogar!</div>
                <br/><br/>
               <strong> Meu Time</strong>
                <br/><br/>
                No Meu Time voc� ver todas as estat�sticas do seu Time como:<br /><br /><strong> Nome<br /> Estado<br /> Gols<br /> Titulos<br /> Est�dio<br /> Total de Jogadores<br /> Jogadores Online<br /> Quantas pessoas est� secando seu Time<br /> Reputa��o,<br /> C�pula<br /> Melhor da Rodada<br /> etc...</strong>
                <br /><br />
                <div id="troca" style="margin-top: 5px;border-top: 1px dashed #AAAAAA;padding-top: 5px">
                    <font color="red">
                        <b>Trocar de Time:</b> </font> Voc� s� pode sair do seu Time atual depois que marcar 100 Gols com a Camisa !</div>
            </div>

            <div id="dialog5" title="Tutorial centergol">
            <div class='texto_imagem'>
                    <img src="figuras/principal/treinador.png" alt="Capit�o" >
                        Bem Vindo ao centergol, sou o Treinador "Alex" e vou te ensinar a jogar!</div>
                        <br/><br/>
               <strong> Procurar</strong>
                <br/><br/>
                No procurar voc� pode encontrar qualquer jogador registrado no centergol, Basta voc� digitar as iniciais de um jogador ou o nome Completo<br />
                Exemplo:
                Meu � Alex se eu pesquisar por Ale vai procurar todos os Jogadores com as Iniciais Ale
                <br /><br />
               <div id="troca" style="margin-top: 5px;border-top: 1px dashed #AAAAAA;padding-top: 5px">
                    <font color="red">
                        <b>Importante:</b> </font> Sistema listar� apenas 30 resultados em ordem de gols.</div>
               <div id="troca" style="margin-top: 5px;border-top: 1px dashed #AAAAAA;padding-top: 5px">
                    <font color="red">
                        <b>Importante:</b> </font> Seja o mais preciso poss�vel na sua busca.</div>
           </div>
           
           
                       <div id="dialog6" title="Tutorial centergol">
            <div class='texto_imagem'>
                    <img src="figuras/principal/treinador.png" alt="Capit�o" >
                        Bem Vindo ao centergol, sou o Treinador "Alex" e vou te ensinar a jogar!</div>
                        <br/><br/>
               <strong> STFC</strong>
                <br/><br/>
                Fa�a a sua den�ncia e aguarde o contato dos administradores.
                <br /><br />
               <div id="troca" style="margin-top: 5px;border-top: 1px dashed #AAAAAA;padding-top: 5px">
                    <font color="red">
                        <b>Importante:</b> </font> Apenas Den�ncias Importantes e que voc� tenha certeza!</div>
           </div>
           
           
           <div id="dialog7" title="Tutorial centergol">
            <div class='texto_imagem'>
                    <img src="figuras/principal/treinador.png" alt="Capit�o" >
                        Bem Vindo ao centergol, sou o Treinador "Alex" e vou te ensinar a jogar!</div>
                        <br/><br/>
               <strong> Campe�es</strong>
                <br/><br/>
                Nessa categoria ficam gravados todos os campe�es de todas as temporadas que j� passou!
    
           </div>
           
            <div id="dialog8" title="Tutorial centergol">
            <div class='texto_imagem'>
                    <img src="figuras/principal/treinador.png" alt="Capit�o" >
                        Bem Vindo ao centergol, sou o Treinador "Alex" e vou te ensinar a jogar!</div>
                        <br/><br/>
               <strong> Shopping</strong>
                <br/><br/>
                Shopping � nossa LOJA, nele voc� pode comprar VIP, LC Cash, A cada compra no site voc� ganha Pontos com esse pontos voc� pode trocar por + VIPs e LC Cash no Propio Shopping!
                
                Algumas Vantagens VIP<BR /><BR />
                
<table width="420" cellpadding="0" cellspacing="0">
	<tr>
		<td width="240px" id="usuario_vip1"><span class="img16"><img width="16" height="16" src="figuras/principal/usuario_vip.png" title="Usu�rio VIP" alt="Usu�rio VIP"></span> Usu�rio VIP</td>
		<td width="240px"><span class="img16"><img width="16" height="16" src="figuras/principal/usuario_normal.png" title="Usu�rio Normal" alt="Usu�rio Normal"></span> Usu�rio Normal</td>
	</tr>
	<tr>
		<td style="padding-top: 5px">Escolhe a cor do nome</td>
		<td style="padding-top: 5px">Nome preto</td>
	</tr>
	<tr>
		<td style="padding-top: 5px">Chute Autom�tico: <b>4</b> minutos</td>
		<td style="padding-top: 5px">Chute Autom�tico: <b>8</b> minutos</td>
	</tr>
	<tr>
		<td style="padding-top: 5px">Entretenimentos: <b>4</b> minutos</td>
		<td style="padding-top: 5px">Entretenimentos: <b>8</b> minutos</td>
	</tr>
	<tr>
		<td style="padding-top: 5px">Pode usar Energia</td>
		<td style="padding-top: 5px">N�o pode usar Energia</td>
	</tr>
	<tr>
		<td style="padding-top: 5px">Pode usar Veneno</td>
		<td style="padding-top: 5px">N�o pode usar Veneno</td>
	</tr>
	<tr>
		<td style="padding-top: 5px">Pode usar Sacola</td>
		<td style="padding-top: 5px">N�o pode usar Sacola</td>
	</tr>
	<tr>
		<td style="padding-top: 5px">Pode Secar um time</td>
		<td style="padding-top: 5px">N�o pode Secar um time</td>
	</tr>
</table>
<br /><br />
<div id="troca" style="margin-top: 5px;border-top: 1px dashed #AAAAAA;padding-top: 5px">
                    <font color="red">
                        <b>Importante:</b> </font> Comprando VIP pelo site ele vai diretamente para seus ITENS ou seja se voc� n�o usar ele n�o vai acabar, Apenas usu�rios que compra VIP pelo site pode negociar/vender ele no Mercado do jogo.</div>    
           </div>
           
                       <div id="dialog9" title="Tutorial centergol">
            <div class='texto_imagem'>
                    <img src="figuras/principal/treinador.png" alt="Capit�o" >
                        Bem Vindo ao centergol, sou o Treinador "Alex" e vou te ensinar a jogar!</div>
                        <br/><br/>
               <strong> Chutes</strong>
                <br/><br/>
               <div id="troca" style="margin-top: 5px;border-top: 1px dashed #AAAAAA;padding-top: 5px">
                    <font color="red">
                        <b>Chute Automatico:</b> <br /><img src="figuras/principal/botao_chute.png" /><br /> </font>Quando acaba o tempo que fica na parte superior a Direita voc� faz 1 Gol Automatico, No Tutorial passado explicamos as vantagens VIP ou seja Usu�rio Normal 8 minutos, Usu�rios VIP 4 Minutos</div>
               <div id="troca" style="margin-top: 5px;border-top: 1px dashed #AAAAAA;padding-top: 5px">
                    <font color="red">
                        <b>Secar Automatico:</b><br /><img src="figuras/principal/botao_secar.png" /><br /> </font>Voc� seleciona um time para Secar para marcar gol automaticamente para o advers�rio dele</div>
                             <div id="troca" style="margin-top: 5px;border-top: 1px dashed #AAAAAA;padding-top: 5px">
                    <font color="red">
                        <b>Entretenimentos:</b><br /><img src="figuras/principal/botao_entre.png" /><br /> </font>Quando acaba o tempo que fica na parte superior a Direita voc� ganha 1 chance de fazer o Passe Certo e Chutar P�nalti, No Tutorial passado explicamos as vantagens VIP ou seja Usu�rio Normal 8 minutos, Usu�rios VIP 4 Minutos</div>
           </div>
           
                                  <div id="dialog10" title="Tutorial centergol">
            <div class='texto_imagem'>
                    <img src="figuras/principal/treinador.png" alt="Capit�o" >
                        Bem Vindo ao centergol, sou o Treinador "Alex" e vou te ensinar a jogar!</div>
                        <br/><br/>
               <strong> Pr�mio Diario</strong>
                <br/><br/>
               <div id="troca" style="margin-top: 5px;border-top: 1px dashed #AAAAAA;padding-top: 5px">
                    <font color="red">
                        <b>Pr�mio Diario:</b> <br /><img src="figuras/principal/diario.png" /><br /> </font>No Pr�mio diario voc� pode receber pr�mios aleatorios e todo dia depois das 00:00 voc� pode receber novamente algum desses Pr�mios!<br /></div>
           
           </div>