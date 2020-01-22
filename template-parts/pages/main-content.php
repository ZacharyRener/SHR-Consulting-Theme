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

    </div>

</div>

";

?>