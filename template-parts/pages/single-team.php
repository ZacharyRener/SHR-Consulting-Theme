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
        
        
        <div class='team-members single-team'>";
        
            if(have_posts()):
                while(have_posts()): the_post();

                    $title = get_the_title();
                    $role = get_field('role');
                    $imageUrl = get_field('bio_image');
                    $content = get_field('excerpt');
                    $url = get_the_permalink();

                    echo "
                    <div class='team-member'>
 
                        <div class='text-section'>
                            <h1 class='h1-title'>$title</h1>
                            <p class='role mb-4'>$role</p>
                            <div class='excerpt'>
                                <div class='alignright'>
                                    <img class='' src='$imageUrl'>";
                                    get_template_part('template-parts/components/social-icons');    
                                echo"
                                </div>
                                $content";

                                if(have_rows('expansion_sections')): 
                                    $count = 0;
                                    while(have_rows('expansion_sections')): 
                                        the_row('expansion_sections');

                                        $headline = get_sub_field('headline');
                                        $content = get_sub_field('content');

                                        echo "
                                        <div class='container collapse-container'>
                                            
                                            <a class='collapse-link' data-toggle='collapse' href='#multiCollapseExample-$count' role='button' aria-expanded='false' aria-controls='multiCollapseExample-$count'>$headline</a>
                                            <div class='collapse multi-collapse' id='multiCollapseExample-$count'>
                                                <div class='collapse-body'>
                                                    $content
                                                </div>
                                            </div>
                                                
                                            
                                        </div>
                                        ";

                                    $count++;
                                    endwhile;
                                endif;

                            echo"
                            </div>";
                            
                        echo "
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