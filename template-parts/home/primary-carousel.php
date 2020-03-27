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

          echo "<script>

            function slide".$slideCount."Functionality() {

              var topText = jQuery('.slide-$slideCount .top-text');
              var bottomText = jQuery('.slide-$slideCount .bottom-text');
              var slideCount = jQuery('.slide-$slideCount .slide-count');
              var excerpt = jQuery('.slide-$slideCount .excerpt');
              var button = jQuery('.slide-$slideCount .btn');

              var leftValue = -(topText.innerWidth() / 5);
              var rightValue = bottomText.innerWidth() / 5;

              var isMobile = window.matchMedia('only screen and (max-width: 760px)').matches;
              if (!isMobile) {";
                echo 'topText.attr("style", "left: "+leftValue+"px !important;");';
                echo 'bottomText.attr("style", "left: "+rightValue+"px !important;");';
              echo "
                slideCount.attr('style', 'left: 0 !important;');
                excerpt.attr('style', 'left: 35% !important;');
                button.attr('style','left: 35% !important;');
              } else {
                topText.attr('style', 'left: 0 !important;');
                bottomText.attr('style', 'left: 0 !important;');
                slideCount.attr('style', 'left: 0 !important;');
                excerpt.attr('style', 'left:0 !important;');
                button.attr('style', 'left: 0 !important;');
              }
              
            }
          
          </script>";

        echo '</div>';

        $slideCount++;

      endwhile;
    endif;
 
  echo '</div>';

	get_template_part('template-parts/components/arrow-down');
	arrowDown('#pathways');

echo "<script>";
echo "jQuery(document).ready(function () {";
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

echo'
<a class="carousel-control-prev" href="#primary-carousel" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#primary-carousel" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
';

echo '</section>';



?>