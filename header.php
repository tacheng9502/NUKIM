<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>國立高雄大學資訊管理學系</title>
	<link rel="stylesheet" type="text/css" href="stylesheet/style.css" />
	<link href="images/favicon.ico" rel="shortcut icon" />
	<link rel="pingback" href="<?php bloginfo('pingback_url')?>" />
	<?php wp_head();?>
</head>
<body>
<div class="wrap">
	<header class="header">
		<h1><a href="#">NUKIM</a></h1>
		<ul class="social_nav">
			<li><a href="#" class="facebook"></a></li>
			<li><a href="#" class="facebook"></a></li>
			<li><a href="#" class="facebook"></a></li>
		</ul>
		<div class="clear"></div>
		<nav>
			<?php wp_nav_menu( array('theme_location' => 'primary-menu')); ?> 
		</nav>
	<div class="clear"></div>
	</header>