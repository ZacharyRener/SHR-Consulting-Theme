<?php

$content = get_field('content_section_one');
$lowerContent = get_field('content_section_two');
$buttonText = get_field('learn_more_button_text');
$buttonUrl = get_field('learn_more_button_url');

echo "

<section id='from-our-blog'>

    <div class='main-blog-section blog-match-height'>           

            <div class='content-section'>

                <div id='upperContent'>
                    $content
                
                    <a class='btn btn-secondary' href='$buttonUrl'>$buttonText</a>";

                    arrowDown('#lowerContent');

                echo "
                </div>

                <div id='lowerContent'>
                    $lowerContent
                </div>
                
            </div>

            <div class='blog-posts'>
                
            </div>

    </div>

    <div class='right-white-section blog-match-height'></div>";

    arrowDown('#jobs-section');

echo "
</section>
";