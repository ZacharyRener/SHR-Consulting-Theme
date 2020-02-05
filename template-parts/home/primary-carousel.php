<?php

$parallaxDepth = get_field('parallax_depth');

echo '<section id="primary-carousel" class="carousel slide carousel-fade" data-ride="carousel">';

  echo '<ol class="carousel-indicators">';
    
    $carousel = get_field('carousel_options');
    for($i=0; $i<sizeof($carousel); $i++){
      if($i==0)
        echo '<li class="slide-'.$i.'-circle" data-target="#primary-carousel" data-slide-to="0" class="active"></li>';
      else
        echo '<li class="slide-'.$i.'-circle" data-target="#primary-carousel" data-slide-to="'.$i.'"></li>';
    }

  echo '</ol>';
  
  echo '<div class="carousel-inner" >';

    $slideCount = 0;
    if(have_rows('carousel_options')):
      while(have_rows('carousel_options')): the_row();

        $backgroundImage = get_sub_field('background_image');
        $topText = get_sub_field('top_text');
        $bottomText = get_sub_field('bottom_text');
        $excerpt = get_sub_field('excerpt');
        $buttonText = get_sub_field('button_text');
        $buttonURL = get_sub_field('button_url');

        $currentSlide = $slideCount + 1;

        echo $slideCount == 0 ? '<div class="carousel-item slide-'.$slideCount.' active" >' : '<div class="carousel-item slide-'.$slideCount.'" >';
          echo '<div class="carousel-wrapper">';
            echo '<div id="scene-'.$slideCount.'">';
              echo '<div data-depth="'.$parallaxDepth.'">';
                echo '<img src="'.$backgroundImage.'" />';
              echo '</div>';
            echo '</div>';
            echo '<div class="text-content" >';
              echo '<section class="slide-count">0'.$currentSlide.'<i class="fa fa-chevron-right"></i></section>';
              echo '<section class="top-text"><h1>'.$topText.'</h1></section>';
              echo '<section class="bottom-text"><h1>'.$bottomText.'</h1></section>';
              echo '<section class="excerpt">'.$excerpt.'</section>';
              echo '<a href="'.$buttonURL.'" class="btn btn-primary">'.$buttonText.'</a>';
            echo '</div>';
          echo '</div>';

          echo '<script>';

            echo 'function slide'.$slideCount.'Functionality() {';

              echo 'let topText = jQuery(".slide-'.$slideCount.' .top-text");';
              echo 'let bottomText = jQuery(".slide-'.$slideCount.' .bottom-text");';
              echo 'let slideCount = jQuery(".slide-'.$slideCount.' .slide-count");';
              echo 'let excerpt = jQuery(".slide-'.$slideCount.' .excerpt");';
              echo 'let button = jQuery(".slide-'.$slideCount.' .btn");';

              echo 'let leftValue = -(topText.innerWidth() / 6);';
              echo 'let rightValue = bottomText.innerWidth() / 6;';

              echo 'let isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;';
              echo 'if (!isMobile) {';
                echo 'topText.attr("style", `left: ${leftValue}px !important;`);';
                echo 'bottomText.attr("style", `left: ${rightValue}px !important;`);';
                echo 'slideCount.attr("style", "left: 0 !important;");';
                echo 'excerpt.attr("style", "left: 35% !important;");';
                echo 'button.attr("style", "left: 35% !important;");';
              echo '} else {';
                echo 'topText.attr("style", `left: 0 !important;`);';
                echo 'bottomText.attr("style", `left: 0 !important;`);';
                echo 'slideCount.attr("style", "left: 0 !important;");';
                echo 'excerpt.attr("style", "left:0 !important;");';
                echo 'button.attr("style", "left: 0 !important;");';
              echo '}';
              
            echo '}';
          
          echo '</script>';

        echo '</div>';

        $slideCount++;

      endwhile;
    endif;
 
  echo '</div>';

	get_template_part('template-parts/components/arrow-down');
	arrowDown('#pathways');

echo "<script>";
echo "jQuery(document).ready( () => {";
echo "var scene = document.getElementById('scene-0');";
echo "var parallaxInstance = new Parallax(scene, { relativeInput: true });";
echo "slide0Functionality();";
echo "jQuery('.carousel').carousel({";
echo "interval: 5000";
echo "}).on('slid.bs.carousel', function (e) {";
$carousel = get_field('carousel_options', 5);
for($i=0; $i<sizeof($carousel); $i++){
	echo 'if(e.relatedTarget.classList.contains("slide-'.$i.'"))';
	echo '  slide'.$i.'Functionality();';
}
echo "});";
echo "jQuery('.carousel').on('slide.bs.carousel', function (e) {";
$carousel = get_field('carousel_options', 5);
for($i=0; $i<sizeof($carousel); $i++){
	echo 'var scene = document.getElementById("scene-'.$i.'");';
	echo 'var parallaxInstance = new Parallax(scene, {
                      relativeInput: true
                    });';
	echo "jQuery('.slide-".$i." .top-text').attr('style', '');";
	echo "jQuery('.slide-".$i." .bottom-text').attr('style', '');";
	echo "jQuery('.slide-".$i." .slide-count').attr('style', '');";
	echo "jQuery('.slide-".$i." .excerpt').attr('style', '');";
	echo "jQuery('.slide-".$i." .btn').attr('style', '');";
}
echo "});";
echo "});";
echo "</script>";

echo '</section>';



?>