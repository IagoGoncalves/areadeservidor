<?php
/**
 * Template Name: Formularios
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

	<main id="formularios" class="formularios" tabindex="-1" role="main">
		<div class="container">
			<div class="btn-atos-oficiais">
				<a href="<?php echo esc_url( home_url( 'formularios-viagem' ) ); ?>" title="Formulário de Viagem" class="btn-atos-executivo" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/formulario-viagem.png" class="fundo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-camara.png">
					<div class="titulo">
						<p>Formulário</p>
						<p>de Viagem</p>
					</div>
				</a>
			</div>
			<div class="btn-atos-oficiais">
				<a href="<?php echo esc_url( home_url( 'formulario-concessao' ) ); ?>" title="Prestação de Contas de Viagem" class="btn-atos-legislativo" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/prestacao-contas-viagem.png" class="fundo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-camara.png">
					<div class="titulo">
						<p>Prestação de</p>
						<p>Contas de Viagem</p>
					</div>					
				</a>
			</div>
		</div>
		
	</main><!-- #main -->

<?php

