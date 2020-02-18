<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

	<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

	<nav id="utility-nav" class="navbar navbar-expand-lg">

		<div class="container">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="social-icons">
				<a href="" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				<a href="" target="_blank"><i class="fa fa-facebook"></i></a>
			</div>

			<div class="right-section">
				<a href="/contact-us">Contact</a>
				<form action="/" method="get">
					<input class="form-control searchForm" name="s" type="text" placeholder="Search" aria-label="Search">
				</form>
			</div>

		</div>

	</nav>
	<?php
	$globalPageHeader = get_field('global_page_header', 'options');
	$singlePageHeader = get_field('header_image');
	$headerUrl = empty($singlePageHeader) ? $globalPageHeader : $singlePageHeader;
	$needsGradientOverlay = !get_field('transparent_navigation');
	?>
	<nav id="primary-nav" class="navbar navbar-expand-lg navbar-light transparent <?php if($needsGradientOverlay): echo 'extended-height'; endif; ?>"
		<?php if($needsGradientOverlay): echo 'style="background-image:url('.$headerUrl.');"'; endif; ?> >

		<div class='gradient-overlay'></div>

		<div class="container">

			<a class="navbar-brand" href="/"><img src="http://shr.hingedev.com/wp-content/uploads/2020/01/SHR_coloronbg_rgb.png"></a>

			<i class="fa fa-bars"></i>

			<div class="right-section">
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<?php wp_nav_menu(
							array(
								'menu'  => 3,
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav ml-auto',
								'fallback_cb'     => '',
								'depth'           => 3,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						);
						?>

					</ul>
				</div>
			</div>

		</div>

	</nav>

</div>

<div class='mobile-menu'>
	<i class="fa fa-times"></i>
	<div class='menu-wrapper'>
	<?php wp_nav_menu(
			array(
				'menu'  => 3,
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => '',
				'depth'           => 3,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>
	</div>
</div>