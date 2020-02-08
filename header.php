<?php
    defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/js/index.js" ></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/parallax.min.js"></script>
	<?php wp_head(); ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.matchHeight.js" type="text/javascript"></script>
</head>
<?php $bodyClass = get_field('transparent_navigation') ? 'transparentNav' : 'hasBackgroundNav'; ?>
<body <?php body_class($bodyClass); ?>>
    <?php do_action( 'wp_body_open' ); ?>
    <div class="site" id="page">
        <div id="headerWhiteSpace" style="height:0px;"></div>
        <?php get_template_part('template-parts/components/navbar'); ?>