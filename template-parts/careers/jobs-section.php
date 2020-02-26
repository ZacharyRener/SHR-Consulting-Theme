<?php

$headline = get_field('jobs_headline');
$buttonText = get_field('jobs_button_text');
$buttonLink = get_field('jobs_button_link');
$excerpt = get_field('jobs_excerpt');

echo "

<section id='jobs-section'>

		<div class='row'>
			
			<div class='col-md-10 text-section'>
				<div class='container'>
					<div class='row headline-section'>
						<div class='col-md-6 title-button-section'>
							<h2 class='title'>$headline</h2>
							<a href='$buttonLink' target='_blank' class='btn btn-primary'>$buttonText</a>
						</div>
						<div class='col-md-6 content-section'>
							$excerpt
						</div>
					</div>
					<div class='job-listings'>
						<div class='blog-posts'>

		                    <div class='row'>";

		                        $args = [
		                            'post_type' => 'job',
		                            'posts_per_page' => 4,
		                            'orderby' => 'date',
		                            'order' => 'DESC',
		                        ];

		                        $the_query = new WP_Query($args);

		                        if($the_query->have_posts()):
		                            while($the_query->have_posts()):
		                                $the_query->the_post();

		                                $title = get_the_title();
		                                $author = get_the_author();
		                                $date = get_the_date('m/d/Y');

		                                $jobTitle = get_field('job_title');
		                                $positionTitle = get_field('position_title');
		                                $department = get_field('department_name');

		                                $titleLink = get_the_permalink();

		                                echo "
		                                
		                                <div class='col-md-3 '>
		                                    <div class='main-post'>
		                                        <a href='$titleLink' target='_blank'><p class='position-title'>$positionTitle</p></a>
		                                        <a href='$titleLink' target='_blank'><p class='job-title'>$jobTitle</p></a>
		                                        <hr/>
		                                        <p class='department'>$department</p>
		                                        <p class='date'>Posted: $date</p>
		                                    </div>
		                                </div>
		                                
		                                ";

		                            endwhile;
		                        endif;

		                        echo "
		                    
		                    </div>

						</div>

					</div>

				</div>

			</div>
			
			<div class='col-md-2 black-section'></div>
			
		</div>
	
</section>

";

?>