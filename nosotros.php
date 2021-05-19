<?php
	$title = 'Nosotros';
	$otherCSS = 'owl.carousel.min.css';
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
				<li><a href="#">Nosotros</a></li>
			</ul>
		</header>

		<!-- About-Content -->
		<section class="about-content">
			<figure class="about-image">
				<img src="assets/images/img-about-us.jpg" alt="imagen de una asesora comercial de Traditum">
			</figure>
			<article class="about-text">
				<h2 class="section-title title-with-line-blue">EN TRADITUM</h2>

				<p>Contamos con un equipo de profesionales con amplia experiencia para el relevamiento de las necesidades y recursos prestacionales de la industria.</p>

				<p>Nuestros valores más destacados están apoyados en el servicio y el vínculo cercano que generamos con nuestros clientes a la hora del relevamiento y el diagnóstico de un producto personalizado.</p>

				<p>Para atender las necesidades de todos nuestros prestadores conectados, creamos un exclusivo Centro de Atención al Prestador para el soporte y capacitación de toda nuestra red prestacional 0810 222 1122 - prestadores@traditum.com</p>

				<p>Y para las financiadoras con necesidades de adaptar infraestructuras, contamos con un Departamento especializado en Tecnologías de la Información especialmente enfocado en la industria de la salud.</p>

				<p class="about-special-p">EN TRADITUM TRABAJAMOS PARA TRANSFORMAR EL SERVICIO.</p>
			</article>
			<article class="about-years">
				<img src="assets/images/icons/icon-17-years.svg" alt="ícono 17 años de traditum">
				<p>Articulando la red de prestadores más grande del país.</p>
			</article>
		</section>

		<!-- Clients -->
		<h2 class="section-title">Confían en nosotros</h2>
		<div class="clients-logos owl-carousel owl-theme">
			<?php 
				$logos = glob('assets/images/logos/*.jpg');
				$finalLogos = [];
				foreach ($logos as $logo) {
					$pathArray = explode('/', $logo);
					$realName = array_pop($pathArray);
					$finalLogos[] = $realName;
				}
				foreach($finalLogos as $logo) :?>
				<img src="assets/images/logos/<?= $logo; ?>" alt="<?= str_replace('.jpg', '', str_replace('-', ' ', $logo)); ?>" style="opacity: 0.7;">
			<?php endforeach; ?>
		</div>
	</div>
	<!-- /CONTENT -->

	<!--FOOTER-->
	<?php require_once 'includes/footer.php'; ?>
	<!--/FOOTER-->

	<!-- ::::::::::: SCRIPTS ::::::::::: -->
	<?php require_once'includes/scripts.php'; ?>

	<script src="assets/js/owl.carousel.min.js"></script>
	<script>
		$(document).ready(function () {
  			$('.clients-logos').owlCarousel({
				loop: true,
				nav: true,
				dots: true,
				margin: 5,
				autoplay: true,
				smartSpeed: 350,
				responsive: {
					0: {
						items: 2
					},
					576: {
						items: 3
					},
					992: {
						items: 6
					}
				}
			});
		});
		
		// Actual Link
		setActualLink('home');
	</script>

</body>
</html>
