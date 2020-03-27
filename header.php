<?php
    defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148569322-1" ></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-148569322-1');
    </script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie-only.css" />
    <?php wp_head(); ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/index-babel.js" ></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/parallax.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.matchHeight.js" type="text/javascript"></script>
</head>
<?php $bodyClass = get_field('transparent_navigation') ? 'transparentNav' : 'hasBackgroundNav'; ?>
<body <?php body_class($bodyClass); ?>>
    <?php do_action( 'wp_body_open' ); ?>
    <div class="site" id="page">
        <div id="headerWhiteSpace" style="height:0px;"></div>
        <?php get_template_part('template-parts/components/navbar'); ?>