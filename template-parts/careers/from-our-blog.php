<?php

$content = get_field('learn_more_content');

echo "

<section id='from-our-blog'>

    <div class='main-blog-section blog-match-height'>           

            <div class='content-section'>
                $content
            </div>

            <div class='blog-posts'>
                
            </div>

    </div>

    <div class='right-white-section blog-match-height'></div>";

    arrowDown('#jobs-section');

echo "
</section>
";