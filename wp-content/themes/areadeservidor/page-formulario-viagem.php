<?php
/**
 * Template Name: Formulário Viagem
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
the_post();?>

	<main id="formulario-viagem" class="formulario-viagem" tabindex="-1" role="main">
		<div class="container">
			<div class="logo-camara-preto">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-camara-preto.jpg">
			</div>
			
			<div class="titulo-principal">
				<h1>ANEXO I</h1>
				<h2>FORMULÁRIO PARA PEDIDO DE CONCESSÃO DIÁRIA E OU ADIANTAMENTO DE VIAGEM</h2>
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
					<label for="nome">DATA DE SAÍDA:</label>
					<input class="texto-input" type="date" name="nome" required>
				</div>

				<div class="input-label hora ">
					<label for="nome">HORA PREVISTA PARA SAÍDA:</label>
					<input class="texto-input" type="time" name="email" required>
				</div>

				<div class="input-label data">
					<label for="nome">DATA DO RETORNO:</label>
					<input class="texto-input" type="date" name="email" required>
				</div>

				<div class="input-label hora">
					<label for="nome" class="titulo-prevista">HORA PREVISTA DO RETORNO:</label>
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
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao"><span>Sim</span> 
  						<input class="nao" type="checkbox" name="alimentacao" value="alimentacao"><span>Não</span> 
  					</label>	
				</div>
				<div class="input-label ">
  					<label>Ônibus: 
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao">Sim
  						<input class="nao" type="checkbox" name="alimentacao" value="alimentacao">Não
  					</label>		
				</div>
				<div class="input-label">
  					<label>Avião: 
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao">Sim
  						<input class="nao" type="checkbox" name="alimentacao" value="alimentacao">Não
  					</label>
				</div>
				<div class="input-label">
  					<label>outros: 
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao">  						
  					</label>
				</div>
			</form>

			<form class="caixa-justificativa-viagem col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>OBJETIVO OU JUSTIFICATIVA DA VIAGEM</h2>
				</div>
				<div class="input-label hora">
					<textarea class="mensagem" type="text" name="mensagem" size=550 maxlength=550 placeholder=" Texto limitado a 550 caracteres, com espaço." required></textarea>
				</div>
			</form>

			<div class="logo-camara-preto">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-camara-preto.jpg">
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
					<textarea  type="text" name="mensagem" size=230 maxlength=230 placeholder=" Texto limitado a 230 caracteres, com espaço." required></textarea>
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
					<h2>CONTROLE INTERNO</h2>
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
					<textarea  type="text" name="mensagem" size=230 maxlength=230  placeholder=" Texto limitado a 230 caracteres, com espaço." required></textarea>
				</div>
				<div class="input-label assinatura">
					<label for="nome">Assinatura do controle interno:</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
				<div class="input-label data">
					<label for="nome">Data:</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
			</form>

			<div class="logo-camara-preto">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-camara-preto.jpg">
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
					<textarea  type="text" name="mensagem" size=230 maxlength=230  placeholder=" Texto limitado a 230 caracteres, com espaço." required></textarea>
				</div>

				<div class="input-label carimbo">
					<label for="nome">Carimbo e Assinatura do Presidente da Câmara Municipal de Extrema:</label>
					<textarea  type="text" name="mensagem" required></textarea>
				</div><div class="input-label data2">
					<label for="nome">Data:</label>
					<input class="texto-input" type="text" name="email" required>
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
					<textarea  type="text" name="mensagem" size=230 maxlength=230 placeholder=" Texto limitado a 230 caracteres, com espaço." required></textarea>
				</div>

				<div class="input-label carimbo">
					<label for="nome">Carimbo e Assinatura do DIRETOR ADMINISTRATIVO E FINANCEIRO:</label>
					<textarea  type="text" name="mensagem"  size=230 maxlength=230 required></textarea>
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


