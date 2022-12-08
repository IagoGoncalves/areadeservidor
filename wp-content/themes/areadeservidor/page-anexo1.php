<?php
/**
 * Template Name: anexo1
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
the_post();?>

	<main id="formulario-viagem" class="anexo1" tabindex="-1" role="main">
		<div class="container">
			<div class="logo-camara-preto">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-camara-preto2.jpg">
			</div>
			
			<div class="titulo-principal">
				<h1>ANEXO<span class="numero">I</span></h1>
				<h2>FORMULÁRIO PARA PEDIDO DE CONCESSÃO DIÁRIA E OU ADIANTAMENTO DE VIAGEM</h2>
				<div class="box-recebimento">
					<p>Recebi uma via deste formulário</p>
					<p>em:<span class="data-recebimento"> _____ </span>|<span class="data-recebimento"> _____ </span>|<span class="data-recebimento"> _____ </span></p>
					<p>Nome:</p>
					<p>Ass:_________________________</p>	
				</div>
			</div>		
			
			<form class="caixa-principal col-md-12" method="post">
				<div class="input-label nome">
					<label for="nome">NOME DO REQUERENTE:</label>
					<input class="texto-input" type="text" name="nome" required>
				</div>

				<div class="input-label matricula">
					<label for="nome">Matrícula:</label>
					<input class="texto-input" type="text" name="nome" required>
				</div>

				<div class="input-label cargo">
					<label for="nome">CARGO OU FUNÇÃO:</label>
					<input class="texto-input" type="email" name="email" required>
				</div>

				<div class="input-label destino">
					<label for="nome">DESTINO:</label>
					<input class="texto-input" type="email" name="email" required>
				</div>

				<div class="input-label distancia">
					<label for="nome">DISTÂNCIA APROXIMADA DE IDA (KM):</label>
					<input class="texto-input" type="email" name="email" required>
				</div>
			</form>

			<form class="caixa-periodo col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>PERÍODO</h2>
				</div>
				
				<div class="input-label data">
					<label for="nome">DATA DE<br> SAÍDA:</label>
					<input class="texto-input" type="date" name="nome" required>
				</div>

				<div class="input-label hora ">
					<label for="nome">HORA PREVISTA PARA<br> SAÍDA DE EXTREMA:</label>
					<input class="texto-input" type="time" name="email" required>
				</div>

				<div class="input-label data">
					<label for="nome">DATA DO<br>RETORNO:</label>
					<input class="texto-input" type="date" name="email" required>
				</div>

				<div class="input-label hora">
					<label for="nome" class="titulo-prevista">HORA PREVISTA DA<br> CHEGADA EM EXTREMA:</label>
					<input class="texto-input" type="time" name="email" required>
				</div>
			</form>

			<form class="caixa-gasto col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>GASTO PREVISTOS COM A VIAGEM</h2>
				</div>
				<div class="input-label ">
  					<label>Alimentação: 
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao"><span>Sim</span> 
  						<input class="nao" type="checkbox" name="alimentacao" value="alimentacao"><span>Não</span> 
  					</label>	
				</div>
				<div class="input-label ">
  					<label>Transporte na localidade de destino: 
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao">Sim
  						<input class="nao" type="checkbox" name="alimentacao" value="alimentacao">Não
  					</label>		
				</div>
				<div class="input-label">
  					<label>Pernoite: 
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao">Sim
  						<input class="nao" type="checkbox" name="alimentacao" value="alimentacao">Não
  					</label>
				</div>

				<div class="input-label barra-input">
					<label class="pernoite" for="nome">Número de pernoites previstos:</label>
					<input class="texto-input" type="email" name="email" required>
				</div>
			</form>

			<form class="caixa-transporte col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>Marque o meio de transporte desejado</h2>
				</div>
				<div class="input-label ">
  					<label>Veículo Oficial: 
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao"> 
  						
  					</label>	
				</div>
				<div class="input-label ">
  					<label>Ônibus: 
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao">
  						
  					</label>		
				</div>
				<div class="input-label">
  					<label>Avião: 
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao">
  					</label>
				</div>
				<div class="input-label">
  					<label>Outros: 
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao">  						
  					</label>
				</div>
				<div class="input-label">
  					<label>Particular: 
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao">  						
  					</label>
				</div>
				<div class="input-label texto-obs">
  					<p>OBS: No caso de veiculo particular é necessário declaração</p>
  					<p>Eu _________________________________________________________________________________, servidor(a)/vereador(a) desta Casa de Leis, declaro para os devidos fins e sob as penas da lei, que me deslocarei para cidade de destino nos dias e horários informados neste formulário, sendo que, na ocasião utilizarei meu veículo particular, declaro ainda, que me responsabilizo por todos os riscos e eventuais gastos no trajeto, nos termos do art. 12 da Lei Municipal n.º 2.241/2006.
  					Por ser expressão da verdade, firmo o presente.</p>
  					<p>Extrema,<span class="data-recebimento"> __________ </span>|<span class="data-recebimento">  __________ </span>|<span class="data-recebimento">  ___________ </span></p>
				</div>				
			</form>

			<form class="caixa-justificativa-viagem col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>OBJETIVO OU JUSTIFICATIVA DA VIAGEM</h2>
				</div>
				<div class="input-label hora">
					<textarea class="mensagem" type="text" name="mensagem" size=790 maxlength=790 required></textarea>
				</div>
			</form>

			<div class="logo-camara-preto">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-camara-preto2.jpg">
			</div>

			
			<form class="caixa-requerimento col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>REQUERIMENTO DE DIÁRIA</h2>
				</div>
				
				<div class="input-label titulo-requerimento">
					<label for="nome">Solicito a concessão de diárias de viagem definidas nesse formulário:</label>
				</div>
				
				<div class="input-label assinatura">
					<label for="nome">Assinatura do Requerente:</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
				<div class="input-label data">
					<label for="nome">Data:</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
			</form>
			<p class="dinheiro-transporte">Caso necessite de dinheiro para transporte até a cidade de destino preencha o campo abaixo.</p>
			<form class="caixa-requerimento-adiantamento col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>REQUERIMENTO DE ADIANTAMENTO DE VIAGEM</h2>
				</div>
				<div class="input-label titulo-requerimento">
					<label for="nome">Solicito o adiantamento de viagem:</label>
				</div>
				
				<div class="input-label reais">
					<label for="nome">R$:</label>
					<input class="texto-input" type="text" name="reais" required>
				</div>
				<div class="input-label data">
					<label for="nome">data:</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
				<div class="input-label assinatura">
					<label for="nome">Assinatura:</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
			</form>

			<form class="caixa-autorizacao-chefe col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>AUTORIZAÇÃO DO CHEFE IMEDIATO</h2>
				</div>
				<div class="input-label mensagem">
					<label for="nome">observação:</label>
					<textarea  type="text" name="mensagem" size=340 maxlength=340 required></textarea>
				</div>
				<div class="input-label assinatura">
					<label for="nome">Assinatura do chefe imediato:</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
				<div class="input-label data">
					<label for="nome">Data:</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
			</form>

			<form class="caixa-controle col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>CONTROLE DE SOLICITAÇÕES</h2>
				</div>
				<div class="input-label checkbox-controle controle1">
  					<label>A solicitação encontra-se dentro do prazo legal conforme dispõe a lei?
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao"><span>Sim</span> 
  						<input class="nao" type="checkbox" name="alimentacao" value="alimentacao"><span>Não</span> 
  					</label>	
				</div>
				<div class="input-label checkbox-controle controle2">
  					<label>O requerente encontra-se pendente de prestação de contas? 
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao"><span>Sim</span> 
  						<input class="nao" type="checkbox" name="alimentacao" value="alimentacao"><span>Não</span> 
  					</label>	
				</div>
				<div class="input-label mensagem">
					<label for="nome">OBSERVAÇÃO:</label>
					<textarea  type="text" name="mensagem" size=340 maxlength=340 required></textarea>
				</div>
				<div class="input-label assinatura">
					<label for="nome">Assinatura do servidor:</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
				<div class="input-label data">
					<label for="nome">Data:</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
			</form>

			<div class="logo-camara-preto">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-camara-preto2.jpg">
			</div>

			<form class="caixa-autorizacao-presidencia col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>AUTORIZAÇÃO DA PRESIDÊNCIA</h2>
				</div>
				<div class="input-label checkbox-controle controle1">
					<label>
					<input class="sim" type="checkbox" name="alimentacao" value="alimentacao"><span>Autorizo</span> 
					<input class="nao" type="checkbox" name="alimentacao" value="alimentacao"><span>Não Autorizo</span> 
					</label>	
				</div>
				

				<div class="input-label mensagem">
					<label for="nome">OBSERVAÇÃO:</label>
					<textarea  type="text" name="mensagem" size=340 maxlength=340 required></textarea>
				</div>

				<div class="input-label carimbo">
					<label for="nome">Carimbo e Assinatura do Presidente da Câmara Municipal de Extrema:</label>
					
				</div><div class="input-label data2">
					<p>Data:<span class="data-recebimento"> _____ </span>|<span class="data-recebimento"> _____ </span>|<span class="data-recebimento"> _____ </span></p>
				</div>
			</form>

			<form class="caixa-autorizacao-presidencia caixa-diretor col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>DIRETOR ADMINISTRATIVO E FINANCEIRO</h2>
				</div>
				<div class="input-label titulo-requerimento">
					<label for="nome">Informo ao Setor de Contabilidade, baseado nas informações prestadas nesse formulário e no que dispõe a Lei
									de Diárias da Câmara Municipal de Extrema, que empenhe os valores definidos abaixo:</label>
				</div>
		
				<div class="input-label total">
					<label for="nome">Total de recursos disponibilizados referente às diárias: (R$)</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
				<div class="input-label total">
					<label for="nome">Total de recursos disponibilizados referente aos adiantamentos de viagens: (R$)</label>
					<input class="texto-input" type="text" name="email" required>
				</div>

				<div class="input-label mensagem">
					<label for="nome">OBSERVAÇÃO:</label>
					<textarea  type="text" name="mensagem" size=340 maxlength=340 required></textarea>
				</div>

				<div class="input-label carimbo">
					<label for="nome">Carimbo e Assinatura do DIRETOR ADMINISTRATIVO E FINANCEIRO:</label>
					<textarea  type="text" name="mensagem"  size=340 maxlength=340 required></textarea>
				</div><div class="input-label data2">
					<label for="nome">Data:</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
			</form>

			<div class="botao col-md-12">
				<button value="submit" value="Imprimir" onclick="printpage()">Imprimir</button>
			</div>
		</div>

	</main><!-- #main -->
	<script type="text/javascript">
		function printpage(){
			window.print()
		}
	</script>
<?php


