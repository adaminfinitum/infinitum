<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" dir="ltr" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Noticia+Text:400,700' rel='stylesheet'>
	<?php wp_head(); ?>
	<!--[if lt IE 10]>
	    <link href="/shame.css" rel="stylesheet" type="text/css">
	<![endif]-->
</head>
<body <?php body_class(); ?>>
	<nav class="navbar">
	    <div class="row">
	        <a class="toggle" gumby-trigger="#navbar-main-nav #main-nav" href="#"><i class="icon-menu"></i></a>
	        <a class="logo" id="logo" href="/"><?php bloginfo( 'name' ); ?></a>
		    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
	</nav>
        <div id="container" class="container">
		    <header class="row">
			    <div class="description"><?php bloginfo( 'description' ); ?></div>
		    </header>
		    <!--[if lt IE 8]>
	            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	        <![endif]-->
