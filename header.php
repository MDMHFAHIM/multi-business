<!doctype html>
<html <?php language_attributes();?>>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
       <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="<?= get_template_directory_uri() ?>/https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>multi business</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="<?= get_template_directory_uri() ?>/assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/animate.css">

		<!--flaticon.css-->
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/flaticon.css">

		<!--slick.css-->
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/slick.css">
		<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/slick-theme.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
         <?php wp_head();?>
    </head>