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

        <div class='right-white-section blog-match-height'></div>
        
<div class=\"arrow-down-section\">
    	<i class=\"fa fa-angle-down\"></i>
  	</div>    

</section>

";


?>

<script>

let backgroundSection = jQuery('.section-with-background');
let mainBlog = jQuery('.main-blog-section');
let pathways = jQuery('.three-pathways .container .row');
let pathway0 = jQuery('.videos-wrapper .text-wrapper .title');
//let pathway2 = jQuery('.pathway-2');
let threePathways = jQuery('.videos-wrapper .text-wrapper');
let whiteSection = jQuery('.right-white-section');

let topOffset = 300;

function positionBlog() {

    let leftOffset = pathway0.offset().left + (pathway0.innerWidth() / 2) - 200;
    let maxWidth = threePathways.innerWidth() - 400;
    let whiteSectionWidth = jQuery(document).innerWidth() - ( maxWidth + leftOffset );

    mainBlog.attr('style', `position:relative; left: ${leftOffset}px; width:${maxWidth}px`);
    whiteSection.attr('style', `width: ${whiteSectionWidth}px; height: ${mainBlog.innerHeight()}px; top:${topOffset}px`);

    backgroundSection.attr('style', `width: ${leftOffset}px`);
    //jQuery('.blog-match-height').matchHeight();
    //jQuery('.match-height').matchHeight();

    //mainBlog.innerHeight()

}

jQuery(window).resize(positionBlog);

positionBlog();

</script>