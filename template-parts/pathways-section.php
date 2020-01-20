<?php

$backgroundImage = !empty(get_field('quickhit_background_image')) 
    ? get_field('quickhit_background_image') 
    : 'background image not set';

$topText = !empty(get_field('quickhit_top_text')) 
    ? get_field('quickhit_top_text') 
    : '';

$bottomText = !empty(get_field('quickhit_top_text')) 
    ? get_field('quickhit_bottom_text') 
    : '';

$quickhitCopy = !empty(get_field('quickhit_top_text')) 
    ? get_field('quickhit_copy') 
    : '';


echo '<section id="pathways" style="background-image:url('.$backgroundImage.');">';

    echo '<div class="container">';

        echo '<div class="row">';

            echo '<div class="col-md-5"></div>';

            echo '<div class="col-md-7">';

                echo '<div class="pathways-top-text">';
                    echo '<p>' . $topText . '</p>';
                echo '</div>'; 

                echo '<div class="pathways-bottom-text">';
                    echo '<p>' . $bottomText . '</p>';
                echo '</div>';

                echo '<div class="quickhit-copy">' . $quickhitCopy . '</div>';

            echo '</div>';

        echo '</div>';

    echo '</div>';

    echo "
    
    <div class='three-pathways'>
        <div class='container'>
            <div class='row'>";

                if(have_rows('pathway_content')):
                    $count = 0;
                    while(have_rows('pathway_content')):
                        the_row('pathway_content');

                        $textHeadline = !empty(get_sub_field('text_headline')) 
                            ? get_sub_field('text_headline')
                            : '';

                        $background_image = !empty(get_sub_field('background_image'))
                            ? get_sub_field('background_image')
                            : '';

                        $url = !empty(get_sub_field('url'))
                            ? get_sub_field('url')
                            : '';

                        echo "

                        <div class='col-md-4'>
                            
                            <div class='main-pathway pathway-$count' style='background-image:url($background_image);'>
                            <i class='fa fa-star'></i>
                                <p>$textHeadline</p>   
                            </div>
                        
                        </div>
                        
                        ";

                        $count++; 

                    endwhile;
                endif;

                echo "</div>
            </div>
        </div>
    </div>

    ";

echo '</section>';