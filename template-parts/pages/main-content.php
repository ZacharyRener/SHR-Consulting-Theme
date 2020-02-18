<?php

$pageContent = 'Content not found';

echo "

<div class='col-md-8 main-content'>

    <div class='container'>";

    if(have_posts()):
        while(have_posts()): the_post();
            
            the_content();

        endwhile;
    endif;

    echo "

    </div>

</div>

";

?>