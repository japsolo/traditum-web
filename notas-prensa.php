<?php
	$title = 'Notas de Prensa';
	require_once 'includes/head.php';
	$newsContent = json_decode(file_get_contents('data/news.json'), true);
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
				<li><a href="#"><?= $title ?></a></li>
			</ul>

			<?php require 'includes/socialMedia.php'; ?>
		</header>

		<!-- Content -->
		<div class="container">
			<section class="press-wrap">
				<h2 class="press-title"><?= $title?></h2>

				<?php foreach ($newsContent as $news) : ?>
				<article class="press-box">
					<figure class="news-image">
						<img src="assets/images/news/<?= $news['image'] ?>" alt="foto de una chica jóven sonriendo y sosteniendo un celular en la mano">
					</figure>
					<div class="news-content">
						<h2 class="news-title"><?= $news['title'] ?></h2>
						<p class="news-description"><?= $news['description'] ?></p>
						<a href="assets/downloads/news/<?= $news['file'] ?>.pdf" class="news-cta" download="<?= str_replace(' ', '_', $news['title'])?>.pdf">
							<span>Descargar</span>
							<img src="assets/images/icons/icon-pdf.svg" alt="ícono de PDF">
						</a>
						<a href="<?= $news['url'] ?>" class="news-cta" target="_blank">
							<span>Ver on-line</span>
							<img src="assets/images/icons/icon-open-tab.svg" alt="ícono abrir pestaña">
						</a>
					</div>
				</article>
				<?php endforeach; ?>
			</section>
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
		setActualLink('press');
	</script>

</body>
</html>
