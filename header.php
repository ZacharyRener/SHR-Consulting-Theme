<?php

defined( 'ABSPATH' ) || exit;

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<script type='text/javascript' src="<?php echo get_stylesheet_directory_uri(); ?>/js/transparent-nav.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.matchHeight.js" type="text/javascript"></script>
</head>

<body <?php body_class(); ?>>
    <?php do_action( 'wp_body_open' ); ?>

    <div class="site" id="page">
        <div id="headerWhiteSpace" style="height:0px;"></div>
        <?php get_template_part('template-parts/components/navbar'); ?>

        <script>
        jQuery(".dropdown, .btn-group").hover(function(){
            let dropdownMenu = jQuery(this).children('.dropdown-menu');
            if(dropdownMenu.is(":hidden")){
                dropdownMenu.toggleClass("show");
            }
        }, function(){
            let dropdownMenu = jQuery(this).children('.dropdown-menu');
            dropdownMenu.toggleClass("show");
        });
        jQuery(".dropdown-toggle.nav-link").click(function () {
            var anchorValue= jQuery(this).attr("href");
            document.location = anchorValue;
        });
        </script>