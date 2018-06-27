<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://use.typekit.net/ebg2lar.css"> -->
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<div id="content" class="site-content">

		<header>
			<div class="container">
				<div class="logo">
					<img src="/wp-content/themes/BCBHTech2018/images/logo.png" />
				</div>
				<div id="mobileNavButton">
					<div class="navBtnContainer">
					  <div class="bar1"></div>
					  <div class="bar2"></div>
					  <div class="bar3"></div>
					</div>
				</div>
				<div class="navigation">
					<ul>
						<a href="#about">
							<li>
								About
							</li>
						</a>
						<a href="#websites">
							<li>
								Work
							</li>
						</a>
						<a href="#wedo">
							<li>
								Services
							</li>
						</a>
						<a href="#contact">
							<li class="navigationButton">
								<div class="button headerButton hvr-shutter-out-horizontal">
									Contact Us
								</div>
							</li>
						</a>
					</ul>
				</div>
			</div>
			<div id="bar"></div>
		</header>