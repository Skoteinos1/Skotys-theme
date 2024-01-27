<?php
/** The template for displaying all single posts. */
get_header();

$prev_post = get_previous_post();
if ( ! empty( $prev_post )) {
    echo '<a class="prev-post sticky" href="' . esc_url( get_permalink( $prev_post->ID ) ) . '" title="' . get_the_title( $prev_post->ID ) . '">&lang;&lang;</a>';
}

$next_post = get_next_post();
if ( ! empty( $next_post )) {
    echo '<a class="next-post sticky" href="' . esc_url( get_permalink( $next_post->ID ) ) . '" title="' . get_the_title( $next_post->ID ) . '">&rang;&rang;</a>';
} ?>

<div class="container">
    <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); setPostViews(get_the_ID());
		if ( has_post_thumbnail() ) {
			echo '<div class="blog-post-thumbnail">';
			    the_post_thumbnail();
			echo '</div>'; } ?>

    <div class="blog-post-header">
	    <h1 class="blog-post-title"><?php the_title(); ?></h1>
        <p class="blog-post-meta"><?php the_date();
             echo ' od ';
             the_author(); ?></p>
    </div>

    <div class="single-post-wrapper">
        <?php get_template_part( 'content', 'single' ); } }
        get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>