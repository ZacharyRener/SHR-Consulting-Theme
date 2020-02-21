<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class='row'>

						<div class='col-md-6'>

							<div class="site-info">

								<p>© 2019 SHR Consulting Group. All Rights Reserved. <a target='_blank' href='https://hingemarketing.com/'>Design by Hinge</a></p>

							</div><!-- .site-info -->

						</div>

						<div class='col-md-6'>
							<div class='right-half-wrapper'>
								
								<?php wp_nav_menu(
									array(
										'menu'  => 4,
										'container_id'    => 'navbarNavDropdown',
										'menu_class'      => 'navbar-nav ml-auto',
										'fallback_cb'     => '',
										'depth'           => 4,
										'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
									)
								);
								?>
								
							</div>
						</div>

					</div>

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

