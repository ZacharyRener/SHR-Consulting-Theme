<?php

echo "

<section id='from-our-blog'>

    <div class='row'>

        <div class='col-md-3 section-with-background'></div>

        <div class='col-md-9 main-blog-section'>

            <div class='content container'>

                <div class='headline-section'>
                    <div><h2>FROM OUR BLOG</h2></div>
                    <div><a href='#' class='btn btn-secondary'>Go to the blog</a></div>
                </div>

                <div class='blog-posts'>

                    <div class='row'>";

                        $args = [
                            'post_type' => 'post',
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
                                $date = get_the_date();

                                echo "
                                
                                <div class='col-md-4'>
                                    <div class='main-post'>
                                        <p class='title'>$title</p>
                                        <hr/>
                                        <p class='author'>By $author</p>
                                        <p class='date'>$date</p>
                                    </div>
                                </div>
                                
                                ";
                                
                            endwhile;
                        endif;
                    
                        echo "
                    
                    </div>

                </div>

            </div>
            
        </div>

    </div>

</section>

";

?>