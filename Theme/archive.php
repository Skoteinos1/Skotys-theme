<?php
/** The template for displaying archive pages.*/
get_header(); ?>

<div class="clanky">
	<h1><?php the_archive_title(); ?></h1>
	<p></p>
</div>

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