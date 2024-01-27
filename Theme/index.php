<?php
/** The main template file.
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 * loop.php mas zahrnute tuna
 */
get_header();

// Book add
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (strpos($url,'predlzeniep') !== false) {
   get_template_part('bookadd'); // <!-- Nacita reklamu -->
   // <!-- vola slider get_template_part('inc/theme/sliders/slider'); -->
?>
<?php } ?>

<!-- <main id="main" class="site-main" role="main"> -->
<!-- <div id="content" class="site-content" role="main"> -->

<div class="container">
	<section class="blog-main">
		<!-- Start the Loop -->
		<?php if ( have_posts() ) { while ( have_posts() ) { the_post();
			get_template_part( 'content', false ); }
		} else {
			get_template_part( 'content', 'none' );
		} ?>

		<nav class="pagination btn">
			<!-- 2 Druhy nav v loope -->
			<!-- <?php //previous_posts_link( '&lang;&lang;&nbsp;<<' ); next_posts_link( '>>&nbsp;&rang;&rang;' ); ?> -->
			<?php the_posts_pagination();?>
		</nav>
	</section> <!-- /.blog-main, End the Loop -->

	<?php get_sidebar(); ?>
</div>
<!-- Container Ends-->

<?php get_footer(); ?>
