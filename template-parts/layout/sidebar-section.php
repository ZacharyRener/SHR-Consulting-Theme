<?php

$sidebarHeading = get_field('sidebar_heading');
$sidebarTitle = !empty($sidebarHeading) ? $sidebarHeading : '';
$titleUrl = get_field('sidebar_heading_url');
$sidebarContent = get_field('extra_sidebar_content');

echo "

<div class='col-md-4 sidebar-section'>

    <div class='container'>
    
        <section id='sidebar'>

            <a href='$titleUrl'><p class='site-title'>$sidebarTitle</p></a>";

            wp_nav_menu(
                array(
                    'menu'  => get_field('sidebar_menu'),
                    'container_id'    => 'navbarNavDropdown',
                    'menu_class'      => 'navbar-nav ml-auto',
                    'fallback_cb'     => '',
                    'depth'           => 2,
                    'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                )
            ); 

        if(!empty(get_field('offer'))):
            echo "

                <section id='sidebar-offers'>";

                $offers = get_field('offer');
                if($offers):
                    foreach($offers as $post):
                        setup_postdata($post);

                        $title = get_the_title();
                        $imageSrc = get_field('image');
                        $content = get_field('content');
                        $ctaUrl = get_field('cta_url');
                        $ctaText = get_field('cta_text');

                        echo "
                            <div class='single-offer'>
                                <p class='title'>$title</p>
                                <img class='image' src='$imageSrc'>
                                <div class='container'>
                                    $content
                                    <a class='btn btn-primary no-star' href='$ctaUrl'>$ctaText</a>
                                </div>
                            </div>
                        ";

                    endforeach;
                    wp_reset_postdata();
                endif;

                echo "
                </section>             
                
                ";

        endif;
        echo"
        <div class='extra-sidebar-content'>
                    $sidebarContent
        </div>
        </section>

    </div>

</div>";

?>