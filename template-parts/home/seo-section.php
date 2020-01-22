<?php

$seoCopy = get_field('seo_copy');
$backgroundUrl = get_field('seo_background');

echo "

<section id='seo-section' style='background-image:url($backgroundUrl)'>

    <div class='container'>

        <div class='row'>

            <div class='col-md-6 seo-copy'>
                <div class='container'>
                    $seoCopy
                </div>
            </div>

            <div class='col-md-6 credentials'>
                <p class='credential'>Credentials</p>
                <hr/>
                
                <div class='logos'>

                    <div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
                    
                        <div class='carousel-inner'>'";

                            $logos = get_field('credentials_slider');

                            if($logos):
                                $count = 0;
                                foreach($logos as $logo):
                                    
                                    $imageUrl = $logo['logo'];
                                    $active = ($count == 0) ? 'active' : '';

                                    if($count == 0 || $count % 6 == 0):
                                        echo "
                                        <div class='carousel-item $active'>
                                            <div class='row'>
                                        ";
                                    endif;

                                            echo "
                                            <div class='col-md-6'>
                                                <img src='$imageUrl' class='logo-image'>
                                            </div>
                                            ";

                                    if($count != 0 && $count % 5 == 0):
                                        echo " </div></div>";
                                    endif;

                                    $count++;

                                endforeach;
                            endif;

                        echo "
                        </div>
                    
                    </div>

                </div>

            </div>
        </div>

    </div>

</section>

";

?>