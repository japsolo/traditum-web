<?php
	$title = 'Plataforma de Internación Domiciliaria';
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
				<li><a href="#">Plataforma de Internación Domiciliaria</a></li>
			</ul>

			<ul class="social-media-anchors">
				<li><a href="https://www.facebook.com/Traditum-113803560082000/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="https://www.linkedin.com/company/traditum-sa/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
				<li><a href="https://twitter.com/TraditumSA" target="_blank"><i class="fab fa-twitter"></i></a></li>
				<li><a href="https://www.instagram.com/traditumsa/" target="_blank"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</header>

		<!-- Solution-Content -->
		<div class="inside-solution-content">
			<section class="inside-solution-intro">
				<img src="assets/images/bg-solutions.jpg" alt="fotomontaje de una persona usando una tablet" class="inside-solution-image-bg">
				<article class="inside-solution-intro_description">
					<div class="inside-solution-intro_color-box no-bg no-absolute with-video" >
						<video class="video-pid" src="assets/videos/plataforma-internacion-domiciliara.mp4" muted loop autoplay poster="assets/images/img-video-pid.png" preload="metadata">
						</video>
					</div>
					<article class="inside-solution-intro_text">
						<h2 class="purple-title">Plataforma de Internación Domiciliaria</h2>
						<p>Diseñamos una solución que permite gestionar todos los recursos que intervienen en una Internación y cuidados domiciliarios.</p>

						<p>Nuestra plataforma permite validar, registrar y controlar en tiempo real todas las prestaciones brindadas a un paciente domiciliario con cualquier tipo de cuidado.</p>

						<p>Un monitoreo completo de todas las INTERNACIONES EN CURSO, asignación de INSUMOS, EQUIPAMIENTOS y control de ASISTENCIA de los prestadores mediante su GEOLOCALIZACIÓN EN TIEMPO REAL.</p>
					</article>
				</article>
			</section>

			<h4 class="solution-h4">A través de nuestra plataforma podrá acceder de manera integral a todo el circuito de una internación domiciliaria y visualizar la calidad de atención brindada:</h4>

			<ul class="pid-benefits-list">
				<li>
					<figure class="solution-icon bg-purple">
						<img src="assets/images/icons/icon-benefits-PID_01.svg" alt="ícono de una computadora con varios circuitos">
					</figure>
					<p><span>Conecte a todos los servicios</span> y configure sus módulos a medida.</p>
				</li>
				<li>
					<figure class="solution-icon bg-purple">
						<img src="assets/images/icons/icon-benefits-PID_02.svg" alt="ícono un listado de items">
					</figure>
					<p><span>Gestione, controle y valide las prácticas</span> médicas en una única plataforma.</p>
				</li>
				<li>
					<figure class="solution-icon bg-purple">
						<img src="assets/images/icons/icon-benefits-PID_03.svg" alt="ícono de dos manos sosteniendo una moneda">
					</figure>
					<p><span>Reduzca costos y controle la asistencia de los prestadores</span>, con la geolocalización del profesional en el sitio de atención.</p>
				</li>
				<li>
					<figure class="solution-icon bg-purple">
						<img src="assets/images/icons/icon-benefits-PID_04.svg" alt="ícono de una lupa buscando algo">
					</figure>
					<p><span>Detecte y prevenga desvíos </span>con el sistema de alertas sobre patrones reiterativos.</p>
				</li>
				<li>
					<figure class="solution-icon bg-purple">
						<img src="assets/images/icons/icon-benefits-PID_05.svg" alt="ícono una carpeta y una persona">
					</figure>
					<p><span>Obtenga un Registro Clínico del paciente</span> con información unificada.</p>
				</li>
				<li>
					<figure class="solution-icon bg-purple">
						<img src="assets/images/icons/icon-benefits-PID_06.svg" alt="ícono de una ventana de un navegador de internet">
					</figure>
					<p><span>Calificación del servicio médico.</span> Elabore estrategias a partir de opinión directa de sus pacientes.</p>
				</li>
				<li>
					<figure class="solution-icon bg-purple">
						<img src="assets/images/icons/icon-benefits-PID_07.svg" alt="ícono de una computadora con una torta de datos">
					</figure>
					<p><span>Tableros y gráficos en línea.</span> Administre y optimice recursos a partir de la información brindada por la plataforma.</p>
				</li>
				<li>
					<figure class="solution-icon bg-purple">
						<img src="assets/images/icons/icon-benefits-PID_08.svg" alt="ícono de descarga de datos">
					</figure>
					<p><span>Simplifique su instalación</span> con una sencilla plataforma web, 100 % compatible con cualquier tecnología móvil, sin necesidad de actualizaciones constantes.</p>
				</li>
				<li>
					<figure class="solution-icon bg-purple">
						<img src="assets/images/icons/icon-benefits-PID_09.svg" alt="ícono de una medalla">
					</figure>
					<p><span>Mejore la calidad de los servicios</span> y el valor percibido por sus pacientes.</p>
				</li>
			</ul>
		</div>

		<!-- Call-to-action-button -->
		<div class="solution-call-to-action">
			<p>Facilite la gestión de las internaciones domiciliarias</p>
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
