<?php
	$title = 'Credencial digital / App afiliados';
	require_once 'includes/head.php';
?>

	<!--HEADER-->
	<?php require_once 'includes/header-nav.php'; ?>
	<!--/HEADER-->

	<!-- CONTENT -->
	<div class="container">
		<!-- Inside-Header -->
		<header class="inside-header">
			<ul class="bread-crumbs">
				<li><a href="index.php">Home</a><i class="fas fa-angle-right"></i></li>
				<li><a href="#">Soluciones</a><i class="fas fa-angle-right"></i></li>
				<li><a href="#"><?= $title ?></a></li>
			</ul>

			<?php require 'includes/socialMedia.php'; ?>
		</header>

		<!-- Solution-Content -->
		<div class="inside-solution-content">
			<section class="inside-solution-intro">
				<img src="assets/images/bg-solutions.jpg" alt="fotomontaje de una persona usando una tablet" class="inside-solution-image-bg">
				<article class="inside-solution-intro_description">
					<div class="inside-solution-intro_color-box bg-light-purple">
						<h2>Credencial digital <br> App afiliados</h2>
						<img src="assets/images/img-interna-credencial-digital.png" alt="odontólogo mostrando un radiografía">
					</div>
					<article class="inside-solution-intro_text">
						<p>AHORA TUS AFILIADOS PODRÁN ACCEDER A TODOS LOS SERVICIOS DE UNA FORMA MÁS SIMPLE, REALIZAR TODAS SUS GESTIONES Y PAGOS DESDE UN SÓLO LUGAR.</p>
						<ul class="credential-list">
							<li>
								<img src="assets/images/icons/icon-phone-CD_01.svg" alt="ícono de un celular">
								<span>Una app que permite pagar de forma más rápida, visualizar las ultimas atenciones y facilitar acreditación de sus afiliados mediante una credencial digital.</span>
							</li>
							<li>
								<img src="assets/images/icons/icon-phone-CD_02.svg" alt="ícono de un celular">
								<span>Otorga garantías al prestador en cada validación mediante la generación de un token de seguridad y la posibilidad al afiliado de calificar la atención del profesional.</span>
							</li>
						</ul>
					</article>
				</article>
			</section>

			<div class="app-inside-section-container">
				<h2>¿Qué puede hacer el afiliado en la app?</h2>
				<ul class="app-benefits-list">
					<li>
						<figure class="solution-icon bg-purple">
							<img src="assets/images/icons/icon-benefits-CD_01.svg" alt="ícono de una mano sobre un celular">
						</figure>
						<p>Visualizar su Credencial <br> Digital</p>
					</li>
					<li>
						<figure class="solution-icon bg-purple">
							<img src="assets/images/icons/icon-benefits-CD_02.svg" alt="ícono de rayo de energia">
						</figure>
						<p>Realizar sus pagos con <br> una Billetera Virtual</p>
					</li>
					<li>
						<figure class="solution-icon bg-purple">
							<img src="assets/images/icons/icon-benefits-CD_03.svg" alt="ícono de un documento dentro de un celular">
						</figure>
						<p>Acceder a su Cartilla de <br> Prestadores</p>
					</li>
					<li>
						<figure class="solution-icon bg-purple">
							<img src="assets/images/icons/icon-benefits-CD_04.svg" alt="ícono de un documento dentro de un celular">
						</figure>
						<p>Realizar una Teleconsulta <br> Médica</p>
					</li>
					<li>
						<figure class="solution-icon bg-purple">
							<img src="assets/images/icons/icon-benefits-CD_05.svg" alt="ícono de un documento dentro de un celular">
						</figure>
						<p>Visualizar sus últimas atenciones <br> y prescripciones médicas</p>
					</li>
					<li>
						<figure class="solution-icon bg-purple">
							<img src="assets/images/icons/icon-benefits-CD_06.svg" alt="ícono de un documento dentro de un celular">
						</figure>
						<p>Solicitar turnos de manera <br> on line</p>
					</li>
					<li>
						<figure class="solution-icon bg-purple">
							<img src="assets/images/icons/icon-benefits-CD_07.svg" alt="ícono de un documento dentro de un celular">
						</figure>
						<p>Calificar la atención de los <br> prestadores</p>
					</li>
					<li>
						<figure class="solution-icon bg-purple">
							<img src="assets/images/icons/icon-benefits-CD_08.svg" alt="ícono de un documento dentro de un celular">
						</figure>
						<p>Encontrar sus notificaciones <br> en un buzón de novedades</p>
					</li>
				</ul>
			</div>

			<div class="app-inside-section-container">
				<h2>¿Por qué utilizar nuestra aplicación?</h2>
				<div class="app-why-container">
					<img src="assets/images/img-interna-credencial-digital_2.png" alt="captura de pantalla de una aplicación de celular" class="app-why-img">
					<ul class="app-why-list">
						<li>
							<h3><span><i class="fas fa-check"></i></span>ES PRÁCTICA</h3>
							<p>Con su credencial digital evita la impresión física y su reposición.</p>
						</li>
						<li>
							<h3><span><i class="fas fa-check"></i></span>ES SEGURA</h3>
							<p>Evita fraudes y certifica la identidad del afiliado.</p>
						</li>
						<li>
							<h3><span><i class="fas fa-check"></i></span>ES TRANSPARENTE</h3>
							<p>Otorga seguridad al prestador en cada validación.</p>
						</li>
						<li>
							<h3><span><i class="fas fa-check"></i></span>ES SIMPLE</h3>
							<p>No ocupa muchos recursos en el celular.</p>
						</li>
						<li>
							<h3><span><i class="fas fa-check"></i></span>ES COMPLETA</h3>
							<p>Permite realizar múltiples transacciones en un solo lugar.</p>
						</li>
					</ul>
				</div>
			</div>

			<div class="app-cta d-none">
				<h2>Conoce más sobre nuestro último proyecto en <span>IPS SALTA</span></h2>
				<a href="#">VER CASO DE ÉXITO</a>
			</div>
		</div>

		<!-- Call-to-action-button -->
		<div class="solution-call-to-action">
			<p>¿Listo para transformar su gestión?</p>
			<a href="#contact-us" class="btn btn-blue page-scroll">CONTÁCTENOS <img src="assets/images/icons/icon-email.svg" alt="ícono de un sobre de correo"></a>
		</div>
	</div>
	<!-- /CONTENT -->

	<!--FOOTER-->
	<?php require_once 'includes/footer.php'; ?>
	<!--/FOOTER-->

	<!-- ::::::::::: SCRIPTS ::::::::::: -->
	<?php require_once'includes/scripts.php'; ?>

	<!-- Actual Link -->
	<script>
		setActualLink('solutions');
	</script>

</body>
</html>
