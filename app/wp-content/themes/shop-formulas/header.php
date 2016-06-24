<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header">

					<div class="barra-top">
						<div class="content-windows">

							<div class="box-left">
								<ul>
									<li><a href="#"><div class="flags-menu"><img src="<?php echo get_template_directory_uri(); ?>/img/english.jpg" alt=""></div>Inglés</a></li>
									<li><a href="#"><div class="flags-menu"><img src="<?php echo get_template_directory_uri(); ?>/img/spanish.jpg" alt=""></div>Español</a></li>
									<li><a href="#"><div class="flags-menu"><img src="<?php echo get_template_directory_uri(); ?>/img/italiani.jpg" alt=""></div>Italiano</a></li>
									<li><a href="#"><div class="flags-menu"><img src="<?php echo get_template_directory_uri(); ?>/img/frances.jpg" alt=""></div>Français</a></li>
									<li><a href="#"><div class="flags-menu"><img src="<?php echo get_template_directory_uri(); ?>/img/portugues.jpg" alt=""></div>Português</a></li>
									<li><a href="#"><div class="flags-menu"><img src="<?php echo get_template_directory_uri(); ?>/img/aleman.jpg" alt=""></div>Deutsche</a></li>
								</ul>
							</div>

							<div class="box-right">
								<ul>
									<li>
										<?php if ( is_user_logged_in() ) { ?>
									 		<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>"><?php _e('My Account','woothemes'); ?></a>
										<?php } 
									 	else { ?>
									 		<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>"><?php _e('Login / Register','woothemes'); ?></a>
									 	<?php } ?>
									</li>
									<li>
										<div class="carro-menu">Carro de compra</div>
										<a class="carro-menu-item" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
									</li>
								</ul>
							</div>
							
						</div>
					</div>

					<div class="header-logo">
						<div class="content-windows">
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Shop Formulas" class="logo-img">
								</a>
							</div>
						</div>	
					</div>

					<div class="nav-desktop">
						<div class="content-windows">
							<nav class="nav">
								<?php html5blank_nav(); ?>
							</nav>
						</div>
					</div>
					
			</header>
			<!-- /header -->
