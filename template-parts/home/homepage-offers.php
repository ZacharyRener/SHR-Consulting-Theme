<?php

echo "

<section id='offers-section'>

    <div class='container'>

        <div class='row'>";

            $offers = get_field('offer_selection', 5);
            $count = 0;
            if($offers):
                foreach($offers as $post):
                    
                    $title = get_the_title();
                    $content = get_field('content');
                    $ctaText = get_field('cta_text');
                    $ctaUrl = get_field('cta_url');
                    $imageUrl = get_field('image');

                    echo "

                    <div class='col-md-6 offer-$count'>
                        <div class='row'>
                            <div class='col-md-4 background-section' style='background-image:url($imageUrl);'></div>
                            <div class='col-md-8 text-section'>
                                <div class='wrapper'>
                                    <p class='title'>$title</p>
                                    <p class='content'>$content</p>
                                    <a class='btn btn-primary' href='$ctaUrl'>$ctaText</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";

                endforeach;

                wp_reset_postdata();

            endif;

        echo "
        </div>
    </div>";

	arrowDown('#seo-section');

echo
"</section>

";

?>