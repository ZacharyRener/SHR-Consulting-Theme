<?php

/** Template Name: Videos Landing */

defined( 'ABSPATH' ) || exit;

get_header();

get_template_part('template-parts/layout/start-page');

get_template_part('template-parts/layout/sidebar-section');        

get_template_part('template-parts/pages/videos-landing');

get_template_part('template-parts/layout/end-page');

get_footer();

?>