<?php
/**
 * Template Name: Shop
 */
get_header(); ?>
<div class="woo_container">
    <main class="woo_site-main-fw" role="main">
        <?php // Start the Loop  if ( have_posts() ) { 
            while ( have_posts() ) { the_post();
                //get_template_part( 'content', 'page' );
                //the_title( '<h1 class="entry-title">', '</h1>' );
                the_content();
                // if ( comments_open() || get_comments_number() ) { comments_template(); }
        } //} ?>
    </main>
</div>
<?php get_footer(); ?>