<?php
/**
 * Template Name: Formulário Concessão
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
the_post();?>

	<main id="formulario-concessao" class="formulario-concessao" tabindex="-1" role="main">
		<div class="container">
			<div class="logo-camara-preto">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-camara-preto.jpg">
			</div>
			
			<div class="titulo-principal">
				<h1>ANEXO II</h1>
				<h2>FORMULÁRIO PARA PRESTAÇÃO DE CONTAS DE DIÁRIAS E / OU ADIANTAMENTO DE VIAGEM</h2>
			</div>		
			
			<form class="caixa-principal col-md-12" method="post">
				<div class="input-label nome">
					<label for="nome">NOME DO REQUERENTE:</label>
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
					<label for="nome">HORA DE SAÍDA:</label>
					<input class="texto-input" type="time" name="email" required>
				</div>

				<div class="input-label data">
					<label for="nome">DATA DO RETORNO:</label>
					<input class="texto-input" type="date" name="email" required>
				</div>

				<div class="input-label hora">
					<label for="nome" class="titulo-prevista">HORA DO RETORNO:</label>
					<input class="texto-input" type="time" name="email" required>
				</div>
			</form>

			<form class="caixa-transporte col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>Marque o meio de transporte utilizado</h2>
				</div>
				<div class="input-label ">
  					<label>Veículo Oficial
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao"> 
  					</label>	
				</div>
				<div class="input-label ">
  					<label>Ônibus 
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao">
  					</label>		
				</div>
				<div class="input-label">
  					<label>Avião 
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao">
  					</label>
				</div>
				<div class="input-label">
  					<label>outros 
  						<input class="sim" type="checkbox" name="alimentacao" value="alimentacao">
  					</label>
				</div>
				<div class="input-label mensagem">
					<textarea class="mensagem" type="text" name="mensagem" required></textarea>
				</div>
			</form>

			<form class="caixa-justificativa-viagem col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>DESCRIÇÃO DOS RESULTADOS OBTIDOS COM A VIAGEM</h2>
				</div>
				<div class="input-label hora">
					<textarea class="mensagem" type="text" name="mensagem"  size=820 maxlength=820 required></textarea>
				</div>
			</form>

			<div class="logo-camara-preto">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-camara-preto.jpg">
			</div>

			<form class="caixa-recursos col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>PREENCHER OS CAMPOS ABAIXO CASO TENHA UTILIZADO RECURSOS DE ADIANTAMENTO DE VIAGEM</h2>
				</div>
				
				<div class="input-label data">
					<label for="nome">VALOR DE ADIANTAMENTO DE VIAGEM RECEBIDO</label>
					<input class="texto-input" type="text" name="nome" required>
				</div>
				<div class="input-label texto">
					<label for="nome">DISCRIMINAÇÃO DOS VALORES UTILIZADOS COM ADIANTAMENTO DE VIAGEM: (R$)</label>
				</div>

				<div class="input-label discriminacao-valores">
					<label for="nome">Combustível</label>
					<input class="texto-input" type="text" name="email" required>
				</div>

				<div class="input-label discriminacao-valores">
					<label for="nome">Pedágio</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
				<div class="input-label discriminacao-valores">
					<label for="nome">Passagens rodoviárias</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
				<div class="input-label discriminacao-valores">
					<label for="nome">Outros (Especificar)</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
				<div class="input-label estacionamento">
					<label for="nome">Estacionamento</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
				<div class="input-label consertos">
					<label for="nome">Pequenos consertos do veículo</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
				<div class="titulo-valor-total">
					<label for="nome">CASO NÃO TENHA UTILIZADO O VALOR TOTAL DOS RECURSOS DE ADIANTAMENTO DE VIAGEM, INFORMAR O CAMPO ABAIXO:</label>
				</div>
				<div class="input-label texto">
					<label for="nome">Valor de recurso não utilizado:</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
				<div class="titulo-valor-total">
					<label for="nome">O valor deve ser depositado na Conta Corrente Nº 200-5, Operação 06, Agência 2715, no Banco Caixa Econômica Federal, em favor da Câmara
						Municipal de Extrema – CNPJ 19.038.603/0001-00, em até 02 (dois) dias de retorno da viagem (Art. 8º do Decreto Legislativo Nº 87/2002).
						OBS.: A CÂMARA MUNICIPAL NÃO FAZ REEMBOLSO DE VALORES GASTOS ACIMA DO VALOR CONCEDIDO A TÍTULO ADIANTAMENTO DE VIAGEM.</label>
				</div>
			</form>			

			<form class="caixa-controle controle1 col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>CONTROLE INTERNO</h2>
				</div>
				
				<div class="input-label ">
  					<label>A prestação de contas foi entregue dento do prazo? </label>
  					<input class="sim" type="checkbox" name="alimentacao" value="alimentacao"><span>Sim</span> 
  					<input class="nao" type="checkbox" name="alimentacao" value="alimentacao"><span>Não</span> 
  						
				</div>
				<div class="input-label ">
  					<label>Caso a resposta anterior tenha sido negativa, responder: Houve liberação de outro recurso do mesmo título até a entrega a prestação de contas?</label>
  					<input class="sim" type="checkbox" name="alimentacao" value="alimentacao"><span>Sim</span> 
  					<input class="nao" type="checkbox" name="alimentacao" value="alimentacao"><span>Não</span> 
  						
				</div>
				<div class="input-label ">
  					<label>Os recursos liberados a título de adiantamento de viagem foram devidamente comprovados por meio de documentos fiscais?</label>
  					<input class="sim" type="checkbox" name="alimentacao" value="alimentacao"><span>Sim</span> 
  					<input class="nao" type="checkbox" name="alimentacao" value="alimentacao"><span>Não</span> 
  						
				</div>
				<div class="input-label ">
  					<label>Foi anexado comprovante do depósito referente ao saldo a ser devolvido para a Câmara Municipal decorrente da não aplicação dos recursos de adiantamento de viagem?</label>
  					<input class="sim" type="checkbox" name="alimentacao" value="alimentacao"><span>Sim</span> 
  					<input class="nao" type="checkbox" name="alimentacao" value="alimentacao"><span>Não</span> 
  						
				</div>
				<div class="input-label ">
  					<label>Foi relatado pelo servidor ou vereador os objetivos alcançados no evento, curso, viagem ou similar? Conforme inciso II, § 1º, art. 7º da Lei 2.241/2006.</label>
  					<input class="sim" type="checkbox" name="alimentacao" value="alimentacao"><span>Sim</span> 
  					<input class="nao" type="checkbox" name="alimentacao" value="alimentacao"><span>Não</span>  						
				</div>
				<div class="input-label ">
  					<label>Foi apresentado atestado ou certificado de frequência, documento fiscal, outro documento que certifique a presença do beneficiário no local do destino, conforme a solicitação prévia da diária? Inciso I, § 1º, art. 7º da Lei 2.241/2006.</label>
  					<input class="sim" type="checkbox" name="alimentacao" value="alimentacao"><span>Sim</span> 
  					<input class="nao" type="checkbox" name="alimentacao" value="alimentacao"><span>Não</span> 
				</div>

			</form>

			<div class="logo-camara-preto">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-camara-preto.jpg">
			</div>

			<form class="caixa-controle controle2 col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>CONTROLE INTERNO</h2>
				</div>

				<div class="input-label carimbo">
					<label for="nome">opinião do controle interno:</label>
					<textarea  type="text" name="mensagem" required></textarea>
				</div>

				<div class="input-label documento-controle">
  					<label>DIANTE DO EXPOSTO E DA DOCUMENTAÇÃO APRESENTADA, O CONTROLE INTERNO OPINA:</label>
  					<span class="aprovacao">Aprovação das Contas</span> <input class="sim" type="checkbox" name="alimentacao" value="alimentacao">
  					<span>Aprovação Parcial das Contas</span> <input class="nao" type="checkbox" name="alimentacao" value="alimentacao">
  					<span>Reprovação das Contas</span> <input class="sim" type="checkbox" name="alimentacao" value="alimentacao">
				</div>

				<div class="input-label assinatura">
					<label for="nome">Assinatura do CONTROLE INTERNO:</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
				<div class="input-label data">
					<label for="nome">Data:</label>
					<input class="texto-input" type="text" name="email" required>
				</div>
			</form>

			<form class="caixa-pretacao col-md-12" method="post">
				<div class="titulo-caixas">
					<h2>APROVAÇÃO DA PRESTAÇÃO DE CONTAS</h2>
				</div>
				<div class="input-label documento-controle">
  					<label>O Presidente da Câmara Municipal, no uso das suas atribuições, informa:</label>
  					<span class="aprovacao">Aprovo a prestação de Contas</span> <input class="sim" type="checkbox" name="alimentacao" value="alimentacao">
  					<span>Reprovo a prestação de Contas</span> <input class="nao" type="checkbox" name="alimentacao" value="alimentacao">
				</div>
				<div class="input-label">
					<label for="nome">OBSERVAÇÃO</label>
					<textarea  type="text" name="mensagem" required></textarea>
				</div>
				<div class="input-label carimbo">
					<label for="nome">Carimbo e Assinatura do Presidente</label>
					<textarea  type="text" name="mensagem" required></textarea>
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


