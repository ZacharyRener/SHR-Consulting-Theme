<?php

$pageContent = 'Content not found';
$title = 'Title not found';
$fimageUrl = '';

if(have_posts()):
    while(have_posts()): the_post();
        
        $pageContent = get_the_content();
        $title = get_the_title();
        $fimageUrl = get_the_post_thumbnail_url();

    endwhile;
endif;

echo "

<div class='col-md-8 main-content'>

    <div class='container'>

        <h1>$title</h1>";  
        if(!empty($fimageUrl)) echo "<img class='featured-image' src='$fimageUrl'>";
        echo"
        <p>$pageContent</p>

    </div>

</div>

";

?>