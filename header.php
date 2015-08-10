<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="header">
		<nav class="menu-aux">
		  <div class="container">
			<ul>
				<li><a href="">Fale Conosco</a></li>
				<li><a href="">11 4332-8787</a></li>
				<li><a href="">contato@henji.com.br</a></li>
			</ul>
			<ul class="pull-right">
				<li><a href="">redes sociais</a></li>
			</ul>
		  </div><!-- /.container -->
		</nav>
		<nav class="menu-principal">
		  <div class="container">
		    	<span class="pull-left logo-header"><a href=""><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>"/></a></span>
				<ul>
					<li><a href="">menu1</a></li>
					<li><a href="">menu2</a></li>
					<li><a href="">menu3</a></li>
				</ul>
		  </div><!-- /.container -->
		</nav>
	</header>
	<div id="content">

