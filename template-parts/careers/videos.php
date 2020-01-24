<?php

$title = get_field('video_headline');
$backgroundUrl = get_field('video_background_image');
$content = get_field('video_excerpt');
$sectionBackgroundUrl = get_field('section_background_image');

echo "
<div class='videos-wrapper' style='background-image:url($sectionBackgroundUrl)'>
	<div class='container text-wrapper'>
		<p class='title'>$title</p>
	</div>
	<section id='video-section' style='background-image:url($backgroundUrl)'>
	
	    <div class='container'>
	    
	        <div class='row'>
	
	            <div class='col-md-6 seo-copy'>
	                
	            </div>
	
	            <div class='col-md-6 credentials'>
					<div class='container'>
	                    $content
	                </div>
	            </div>
	        </div>
	
	    </div>
	
	</section>
	
	<div class='arrow-down-section'>
    	<i class='fa fa-angle-down'></i>
  	</div>
	
</div>

";

?>