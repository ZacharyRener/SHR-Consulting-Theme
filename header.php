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
    <script>
	    <?php if(get_field('transparent_navigation')): ?>
            //transparentNavigation(134);
	    <?php else: ?>
            //transparentNavigation(170);
	    <?php endif; ?>
    </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.matchHeight.js" type="text/javascript"></script>
    <?php if(is_front_page()): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/animations.js" type="text/javascript" ></script>
    <?php endif; ?>
</head>
<?php $bodyClass = get_field('transparent_navigation') ? 'transparentNav' : 'hasBackgroundNav'; ?>
<body <?php body_class($bodyClass); ?>>
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
        function offset(el) {
            var rect = el.getBoundingClientRect(),
                scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
                scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
        }
        function scrollToSection(section) {
            var div = document.querySelector(section);
            var divOffset = offset(div);
            var topValue = divOffset.top - 105;
            window.scroll({
                top: topValue,
                left: 0,
                behavior: 'smooth'
            });
        }

        function makePathwaysResponsive() {
            var div = document.querySelector('.three-pathways');
            var divOffset = offset(div);
            var div2 = document.querySelector('#from-our-blog');
            var div2Offset = offset(div2);
            var topValue = div2Offset.top - divOffset.top - (div.offsetHeight / 2);
            // top value is
            // white bg y pos - three pathways y pos
            jQuery('.three-pathways').attr('style', `position:relative; top:${topValue}px`);
        }

        jQuery(document).ready(e=>{
            makePathwaysResponsive();
        });

        var resizeId;
        jQuery(window).resize(pathwayResize);

        function pathwayResize() {

        }

        //makePathwaysResponsive();
        </script>