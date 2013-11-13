<!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) | !(IE 8)  ]><!-->

<html lang="en">

<!--<![endif]-->

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
        // Detect Yoast SEO Plugin
        if (defined('WPSEO_VERSION')) {
            wp_title('');
        } else {
            
            global $page, $paged;
            
            $plugins_url = plugins_url();
        
            wp_title( '|', true, 'right' );
        
            // Add the blog name.
            bloginfo( 'name' );
        
            // Add the blog description for the home/front page.
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) )
                echo " | $site_description";
        
            // Add a page number if necessary:
            if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf( __( 'Page %s', 'artcotechsconnect' ), max( $paged, $page ) );
        }
        ?>
    </title>

    <!-- Bootstrap -->

    <link href="<? bloginfo( 'template_url' ); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">

    <link href="<? bloginfo( 'template_url' ); ?>/css/carousel.css" rel="stylesheet" type="text/css" media="screen">

	<link href="<? bloginfo( 'template_url' ); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="<? bloginfo( 'template_url' ); ?>/style.css" rel="stylesheet" type="text/css" media="all">

	<link rel="shortcut icon" href="<? bloginfo( 'template_url' ); ?>/favicon-usvia.ico">

    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<? bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>

</head>
<body <? body_class(); ?>>