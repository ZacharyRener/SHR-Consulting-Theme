<?php

$pageContent = 'Content not found';

if(have_posts()):
    while(have_posts()): the_post();
        
        $pageContent = get_the_content();
        $headline = get_field('headline');
        $selectedOffer = get_field('featured_offer');
        $offerImgUrl = get_field('image', $selectedOffer->ID);
        $offerTitle = get_the_title($selectedOffer->ID);
        $offerContent = get_field('content', $selectedOffer->ID);
        $ctaText = get_field('cta_text', $selectedOffer->ID);
        $ctaUrl = get_field('cta_url', $selectedOffer->ID);

    endwhile;
endif;

echo "

<div class='col-md-8 main-content'>

    <div class='container insights'>

        <div class='featured-offer'>
            <div class='container'>
                <p class='headline'>$headline</p>
                <div class='offer-section'>
                    <div class='row'>
                        <div class='col-md-3 image-section'>
                            <img class='offer-image' src='$offerImgUrl'>
                        </div>
                        <div class='col-md-9 text-section'>
                            <p class='title'>$offerTitle</p>
                            <p class='content'>$offerContent</p>
                            <a class='btn btn-primary no-star' href='$ctaUrl'>$ctaText</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='bottom-section'>
            <div class='row'>";
        
                if(have_rows('feeds')): 
                    while(have_rows('feeds')): 
                        the_row('feeds');

                        $feedHeadline = get_sub_field('headline');
                        $feedImage = get_sub_field('image');
                        $feedType = get_sub_field('feed_type');
                        $feedCta = get_sub_field('cta_text');
                        $feedCtaUrl = get_sub_field('cta_url');

                        echo "
                        <div class='col-md-6'>

                            <p class='feed-title'>$feedHeadline</p>
                            <img class='feed-image' src='$feedImage'>";

                            if($feedType == 'blog'): 
                                $args = [
                                    
                                    'posts_per_page' => 3,
                                    'orderby' => 'date',
                                    'order' => 'DESC'
                                ];
                            endif;
                           
                            if($feedType == 'video'): 
                                $args = [
                                    'post_type' => 'library',
                                    'tax_query' => array(
                                        array (
                                            'taxonomy' => 'library-type',
                                            'field' => 'slug',
                                            'terms' => 'videos',
                                        )
                                    ),
                                    'posts_per_page' => 3,
                                    'orderby' => 'date',
                                    'order' => 'DESC'
                                ];
                            endif;

                            $the_query = new WP_Query($args);
                            if($the_query->have_posts()): 
                                while($the_query->have_posts()): 
                                    $the_query->the_post();

                                    $title = get_the_title();
                                    $linkUrl = get_the_permalink();

                                    echo "
                                    <a href='$linkUrl'><p class='title'>$title</p></a>
                                    ";
                                
                                endwhile; 
                                wp_reset_postdata();
                            endif;

                            echo "
                            <a class='feed-cta' href='$feedCtaUrl'>$feedCta</a>

                        </div>
                        ";

                    endwhile;
                endif;

            echo 
            "</div>
        </div>

    </div>

</div>

";

?>