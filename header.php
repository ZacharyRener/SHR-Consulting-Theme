<?php

defined( 'ABSPATH' ) || exit;

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<script type='text/javascript' src="<?php echo get_stylesheet_directory_uri(); ?>/js/transparent-nav.js"></script>
	<script type='text/javascript' src="<?php echo get_stylesheet_directory_uri(); ?>/js/carousel-parallax.js"></script>
	<!-- <script type='text/javascript' src="<?php echo get_stylesheet_directory_uri() ?>/node_modules/parallax-js/src/parallax.js"></script> --> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<div id="headerWhiteSpace" style="height:0px;"></div>

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
					<a href="">Contact</a>
					<form action="/" method="get">
						<input class="form-control searchForm" name="s" type="text" placeholder="Search" aria-label="Search">
					</form>
				</div>

			</div>

		</nav>

		<nav id="primary-nav" class="navbar navbar-expand-lg navbar-light transparent">

			<div class="container">

				<a class="navbar-brand" href="/"><img src="http://shr.hingedev.com/wp-content/uploads/2020/01/SHR_coloronbg_rgb.png"></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="right-section">
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="#">Home2 <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Features</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Pricing</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dropdown link
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li>
						</ul>
					</div>
				</div>

			</div>

		</nav>

	</div>
