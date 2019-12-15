<?php
	$title = 'Plataforma de Validación Odontológica';
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
				<li><a href="#">Plataforma de Validación Odontológica</a></li>
			</ul>

			<ul class="social-media-anchors">
				<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</header>

		<!-- Solution-Content -->
		<div class="inside-solution-content">
			<section class="inside-solution-intro">
				<img src="assets/images/bg-solutions.jpg" alt="fotomontaje de una persona usando una tablet" class="inside-solution-image-bg">
				<article class="inside-solution-intro_description">
					<div class="inside-solution-intro_color-box bg-blue">
						<h2>Plataforma de Validación Odontológica</h2>
						<img src="assets/images/img-home-solution-PVO-person.png" alt="odontólogo mostrando un radiografía" style="transform: scale(-1, 1)">
					</div>
					<article class="inside-solution-intro_text">
						<p>Una solución que permite integrar a toda la red de odontólogos aplicando las reglas propias del negocio y accediendo a importantes beneficios para el prestador y financiador:</p>
						<ul class="pvo-special-list">
							<li>Registro de las prácticas a través de un Odontograma Web.</li>
							<li>Pre-Liquidación de prácticas que agiliza el cobro de las prestaciones.</li>
							<li>Ficha dental con actualización permanente.</li>
						</ul>
					</article>
				</article>
			</section>

			<div class="pvo-inside-section-container">
				<ul class="pvo-special-list">
					<li>Funcionalidad, integración y ajustes a medida.</li>
					<li>Validación on line de las prestaciones.</li>
					<li>Evita débitos por afiliados no empadronados o dados de baja.</li>
					<li>Reportes gráficos en línea y descargables.</li>
					<li>Panel de Desempeño.</li>
					<li>Permite visualizar Estadísticas y Alertas.</li>
				</ul>

				<ul class="pvo-benefits-list">
					<li>
						<figure class="solution-icon bg-blue">
							<img src="assets/images/icons/icon-benefits-PVO_01.svg" alt="ícono de una mano sobre un celular">
						</figure>
						<p>Fácil e intuitiva para el usuario</p>
					</li>
					<li>
						<figure class="solution-icon bg-blue">
							<img src="assets/images/icons/icon-benefits-PVO_02.svg" alt="ícono de rayo de energia">
						</figure>
						<p>Proceso administrativo simplificado</p>
					</li>
					<li>
						<figure class="solution-icon bg-blue">
							<img src="assets/images/icons/icon-benefits-PVO_03.svg" alt="ícono de un documento dentro de un celular">
						</figure>
						<p>Sin bonos impresos para auditorías.</p>
					</li>
				</ul>
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
