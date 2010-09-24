<?php 
$sessionName = 'medes-web_mos';
session_name($sessionName); 
session_start(); 
error_reporting(-1);
?>

<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">

	<!-- Use meta to ease indexing made by search engines -->
	<meta name="keywords"    content="HTML, CSS, PHP, SQL, distansundervisning, datavetenskap, programvaruteknik, programmering, webb">
 	<meta name="description" content="Distansundervisning av Databaser och Webb">
 	<meta name="author"      content="Mikael Roos, mos@bth.se">	
 	<meta name="copyright"   content="Copyright 2010">	
 		
	<!-- Stylesheets -->
	<?php include("choose_style.php"); ?>
	<link rel="stylesheet" media="all"   type="text/css" href="<?php echo $stylePath; ?>"  		title="<?php echo $styleTitle; ?>">
	<link rel="stylesheet" media="print" type="text/css" href="style/print.css">
	<link rel="shortcut icon" href="img/glider.ico">

 	<?php echo "<title>$pageTitle</title>"; ?>
 	
	<!-- Help Internet Explorer understand HTML5 elements http://code.google.com/p/html5shiv/ -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<!-- Use PHP to set id of body, used to highlight current page, together with styling information -->
<body<?php  if(!empty($pageId)) echo " id='$pageId'"; ?>>

	<!-- Top header with logo and navigation -->
	<header id="top">

		<!-- Use PHP to print the form to choose style -->
		<?php echo $formChooseStyle; ?>

		<img src="img/onlinemuseum_logo.png" alt="Medes Logo" width=600 height=100>
		
		<nav>
			<a id="home-"     			href="home.php">Hem</a> 
			<a id="about-"   				href="about.php">Om Medes</a> 
			<a id="download-" 			href="download.php">Ladda ned</a> 
			<a id="license-"   			href="license.php">Licens</a> 
			<a id="philosophy-" 		href="philosophy.php">Filosofi</a> 
			<a id="contribute-" 		href="contribute.php">Jag vill bidra</a> 
			<a id="documentation-"	href="documentation.php">Dokumentation</a> 
		</nav>
	</header>
