<?php

echo "<div class='icons'>";

if(have_rows('social_media_icons')):
    while(have_rows('social_media_icons')):
        the_row('social_media_icons');

        $iconType = get_sub_field('icon_type');
        $iconUrl = get_sub_field('icon_url');

        switch($iconType):
            case("email"):
                echo '<a class="icon" href="mailto:josh@madeinfortworth.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                break;
            case("phone"):
                echo '<a class="icon" href="tel:8177261770" data-toggle="tooltip" data-placement="top"><i class="fa fa-phone" aria-hidden="true"></i></a>';
                break;
            case("facebook"):
                echo '<a class="icon facebook" href="http://hpf.hingedev.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
                break;
            case("linkedin"):
                echo '<a class="icon linkedin" href="http://hpf.hingedev.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
                break;
            case ("twitter"):
                echo '<a class="icon twitter" href="http://hpf.hingedev.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
                break;
        endswitch;

    endwhile;
endif;

echo "</div>";

?>