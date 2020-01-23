<?php

$pageContent = 'Content not found';

if(have_posts()):
    while(have_posts()): the_post();
        
        $pageContent = get_the_content();

    endwhile;
endif;

echo "

<div class='col-md-8 main-content'>

    <div class='container'>

        <p>$pageContent</p>
        
        
        <div class='team-members'>
        
            ";

                $args = [
                    'post_type' => 'leadership',
                    'posts_per_page' => '5',
                    'orderby' => 'date',
                    'order' => 'DESC',
                ];

                $query = new WP_Query($args);

                if($query->have_posts()):
                    while($query->have_posts()): $query->the_post();

                        $title = get_the_title();
                        $role = get_field('role');
                        $imageUrl = get_field('bio_image');
                        $excerpt = get_field('excerpt');
                        $url = get_the_permalink();
                        $realExcerpt = substr($excerpt, 0, 300) 
                            . "...<a href='$url'>Read More</a>";

                        echo "
                        <div class='team-member'>
                            <div class='row'>
                                <div class='col-md-4 image-section'>
                                    <img class='bio-image' src='$imageUrl'>
                                </div>
                                <div class='col-md-8 text-section'>
                                    <a href='$url'><p class='title'>$title</p></a>
                                    <p class='role'>$role</p>";
                                    
                                    get_template_part('template-parts/components/social-icons');

                                    echo"
                                    <div class='excerpt'> $realExcerpt</div>
                                </div>
                            </div>
                        </div>";
                    endwhile;
                endif;
                

            echo 
            "
        
        </div>

    </div>

</div>

";

?>