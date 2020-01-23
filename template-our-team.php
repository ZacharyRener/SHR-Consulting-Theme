<?php

/** Template Name: Our Team */

defined( 'ABSPATH' ) || exit;

get_header();

get_template_part('template-parts/layout/start-page');

get_template_part('template-parts/layout/sidebar-section');        

get_template_part('template-parts/pages/our-team');

get_template_part('template-parts/layout/end-page');

get_footer();

?>