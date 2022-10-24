<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 
<?php wp_body_open(); ?>
<main id="page">
	<header class="containter">
		<div class="row">
			<div class="logo terminal-prompt col-lg-6 col-md-6 col-xs-12">
				<a href="<?php home_url(); ?>" class="no-style">
					<?php bloginfo('name');?>
				</a>
				<small>
					<?php bloginfo('description');?>
				</small>
			</div>

			<nav class="terminal-menu col-lg-6 col-md-6 col-xs-12">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'main', 'container' => false,
						)
				); ?>
			</nav>
		</div>
	</header>
</main>
