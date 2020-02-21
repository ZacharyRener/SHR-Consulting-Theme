<?php

defined( 'ABSPATH' ) || exit;

get_header();

get_template_part('template-parts/layout/start-page');

get_template_part('template-parts/layout/404-sidebar');        

get_template_part('template-parts/pages/404-content');

get_template_part('template-parts/layout/end-page');

get_footer();

?>