<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- Mobile Meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	    
	    <!-- Bootstrap CSS -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	    

		<link rel="stylesheet" href="https://use.typekit.net/jbd3bjg.css">

	    <!-- Font Awesome -->
	    <script src="https://kit.fontawesome.com/0fa7312826.js" crossorigin="anonymous"></script>
    
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- Google Analytics-->
		<!-- end analytics -->
		
		<!-- Fallback for AOS in case of disabled JS -->
		<noscript>
	        <style type="text/css">
	            [data-aos] {
	                opacity: 1 !important;
	                transform: translate(0) scale(1) !important;
	            }
	        </style>
	    </noscript>

	</head>

	<body <?php body_class(); ?>>
    