<?php

echo "

<section id='from-our-blog'>

    <div class='section-with-background blog-match-height'></div>

    <div class='main-blog-section blog-match-height'>

            <div class='headline-section'>";

                echo "
                <div><h2>IN THE NEWS</h2></div>
                <div><a href='/about-us/news-events/' class='btn btn-secondary'>Read More</a></div>
            </div>

            <div class='blog-posts'>

                <div class='row'>";

                    $args = [
                        'post_type' => 'newsevents',
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ];

                    $the_query = new WP_Query($args);

                    if($the_query->have_posts()):
                        while($the_query->have_posts()):
                            $the_query->the_post();

                            $title = get_the_title();
                            $author = get_the_author();
                            $date = get_the_date('m/d/Y');

                            $titleLink = get_the_permalink();

                            echo "
                            
                            <div class='col-md-4 '>
                                <div class='main-post'>
                                    <a href='$titleLink'><p class='title match-height'>$title</p></a>
                                    <hr/>
                                    <!-- <p class='author'>By $author</p> -->
                                    <p class='date'>$date</p>
                                </div>
                            </div>
                            
                            ";

                        endwhile;
                    endif;

                    echo "
                    <a href='#' class='btn btn-secondary mobile-only'>Read More</a>

                </div>

            </div>
        
    </div>

    <div class='right-white-section blog-match-height'></div>
        
</section>";

?>