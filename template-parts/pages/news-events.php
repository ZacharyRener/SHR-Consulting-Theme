<?php

$pageContent = 'Content not found';

if(have_posts()):
    while(have_posts()): the_post();
        
        $pageContent = get_the_content();

    endwhile;
endif;

echo "

<div class='col-md-8 main-content news-events'>

    <div class='container'>

        <p class='page-content'>$pageContent</p>";

        
        $args = [
            'post_type' => 'newsevents',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC'
        ];

        $the_query = new WP_Query($args);

        if($the_query->have_posts()): 

            $currentYear = '';

            while($the_query->have_posts()): 
                $the_query->the_post();

                $postYear = get_the_date('Y');
                if($postYear != $currentYear){
                    echo "<p class='year'>" . $postYear . "</p>";
                    echo "<hr>";
                    $currentYear = $postYear;
                } 

                $title = get_the_title();
                $date = get_the_date('F j');
                $postUrl = get_the_permalink();

                echo "
                <div class='news-post'>
                    <a href='$postUrl'><p class='title'>$title</p></a>
                    <p class='date'>$date</p>
                </div>
                ";

            endwhile;
        endif;

    echo"
    </div>

</div>

";

?>