<header class="main-header">
	<div class="container">
		<!-- Logo -->
		<figure class="logo">
			<a href="index.php"><img src="assets/images/logo-traditum.svg" alt="Logo Traditum"></a>
		</figure>

		<!-- Toggle button -->
		<button type="button" class="toggle-nav">
			<i class="fas fa-bars"></i>
		</button>

		<!-- Navbar -->
		<nav class="main-nav">
			<ul class="first-level-nav">
				<li data-link="home"><a href="index.php">Home</a></li>
				<li data-link="about"><a href="nosotros.php">Nosotros</a></li>
				<li data-link="solutions">
					<a href="#" class="has-drop">Soluciones</a>
					<!-- drop-nav -->
					<ul class="drop-nav" <?= isset($isHome) && $isHome ? 'data-drop="home"' : null ?>>
						<li><a href="sistema-gestion-prestacional.php"><span>Sistema de gestión prestacional</span></a></li>
						<li><a href="plataforma-validacion-odontologica.php"><span>Plataforma de validación odontológica</span></a></li>
						<li><a href="plataforma-internacion-domiciliaria.php"><span>Plataforma de internación domiciliaria</span></a></li>
						<li><a href="sistema-activador-recuperos.php"><span>Sistema activador de recuperos</span></a></li>
					</ul>
				</li>
				<li><a href="<?= isset($isHome) && $isHome ? '#it' : 'index.php#it' ?>" class="<?= isset($isHome) && $isHome ? 'page-scroll' : null ?>">Servicios IT</a></li>
				<li><a href="#contact-us" class="link-rounded page-scroll">Contacto</a></li>
				<li>
					<a href="https://www.traditum.com/NEO%20TDM%20Canal%20IT/View/Login.aspx" class="link-rounded bg-blue" target="_blank">
						Ingreso a Prestadores
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;" xml:space="preserve">
							<g>
								<path d="M8.15,10.94c-0.24,0.24-0.24,0.63,0,0.87c0.24,0.24,0.63,0.24,0.87,0l2.38-2.38c0.24-0.24,0.24-0.63,0-0.87 L9.02,6.18c-0.24-0.24-0.63-0.24-0.87,0c-0.24,0.24-0.24,0.63,0,0.87l1.33,1.33H1.75c-0.34,0-0.62,0.28-0.62,0.61 c0,0.34,0.28,0.62,0.62,0.62h7.74L8.15,10.94z"/>
								<path d="M14.47,1.37c-0.12-0.15-0.3-0.24-0.49-0.24H6.36c-0.34,0-0.62,0.28-0.62,0.62s0.28,0.61,0.62,0.61h7.31 c1.35,1.86,1.98,4.29,1.98,6.64c0,2.36-0.63,4.79-1.98,6.65H6.36c-0.34,0-0.62,0.27-0.62,0.61c0,0.34,0.28,0.62,0.62,0.62h7.62 c0.19,0,0.37-0.09,0.49-0.24c1.63-2.11,2.41-4.9,2.41-7.64C16.88,6.26,16.09,3.47,14.47,1.37z"/>
							</g>
						</svg>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</header>

<i class="sticky-anchor"></i>
