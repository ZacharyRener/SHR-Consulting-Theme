<?php

$title = get_field('video_headline');
$backgroundUrl = get_field('video_background_image');
$content = get_field('video_excerpt');
$sectionBackgroundUrl = get_field('section_background_image');
$video = get_field('video_file');

echo "

<div class='videos-wrapper' style='background-image:url($sectionBackgroundUrl)'>

	<div class='content-wrapper'>

	<div class='container text-wrapper'>
		<p class='title'>$title</p>
	</div>
	
	<section id='video-section'>
	
	    <div class='container'>
	    
	        <div class='row'>
	
	            <div class='col-md-6 video-wrapper'>
	                
	                <div class='white-bg'>
	                	$video
					</div>
					
	            </div>
	
	            <div class='col-md-6 credentials'>
					<div class='container'>
	                    $content
	                </div>
	            </div>
	        </div>
	
	    </div>
	
	</section>";

	arrowDown('.main-blog-section');

	echo "
</div>
</div>
";

?>