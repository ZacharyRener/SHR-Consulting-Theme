<?php



echo "

<div class='col-md-8 main-content'>

    <div class='container'>";

    $pageContent = 'Content not found';

    $args = [
        'post_type' => 'library',
        'tax_query' => array(
            array (
                'taxonomy' => 'library-type',
                'field' => 'slug',
                'terms' => 'videos',
            )
        ),
    ];

    $the_query = new WP_Query($args);

    if($the_query->have_posts()):
        while($the_query->have_posts()): $the_query->the_post();
            
            $pageContent = get_the_content();

            $title = get_the_title();
            $author = get_the_author();
            $date = get_the_date();

            $fImageUrl = get_the_post_thumbnail_url();

            $content = get_the_content();
            $url = get_the_permalink();
            $realExcerpt = substr($content, 0, 300) 
                . "...<a class='read-more' href='$url'>Read More</a>";

            $postUrl = get_the_permalink();

            echo "
            <div class='blog'>
                <a href='$postUrl'><h2 class='title'>$title</h1></a>
                <p class='author-date'>$author | $date</p>";
                if (has_post_thumbnail())
                    echo "<img class='featured-image' src='$fImageUrl'>";
                echo "<p class='content'>$realExcerpt</p>";
            echo 
            "</div>
            ";

        endwhile;
    endif;    

    echo"
    </div>

</div>

";

?>