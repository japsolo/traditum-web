<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="Keywords" lang="es" content="" />
	<meta name="Description" lang="es" content="" />
	<meta name="author" content="diseño web: Diana Cuenca - desarrollo: Javier Herrera" />
	<meta name="robots" content="All" />

	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
	<link rel="manifest" href="favicons/site.webmanifest">
	<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#b33f96">
	<meta name="msapplication-config" content="favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<title><?=$title;?> • TRADITUM • </title>

	<?= isset($otherCSS) ? "<link href='assets/css/$otherCSS' rel='stylesheet'>" : null; ?>

	<link href="assets/css/traditum.css" rel="stylesheet">

	<!-- FontAwesome -->
	<script src="https://kit.fontawesome.com/703ba68551.js" crossorigin="anonymous"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-70836257-7"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-70836257-7');
    </script>

</head>

<body>
