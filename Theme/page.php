<?php
/** The template for displaying all pages.
 * This is the template that displays all pages by default. Please note that this is 
 * the WordPress construct of pages and that other 'pages' on your WordPress site will use a
 * different template. */
get_header(); ?>
<div class="container">
    <main class="site-main in-post-links" role="main">
        <?php // Start the Loop  if ( have_posts() ) { 
            while ( have_posts() ) { the_post();
                // get_template_part( 'content', 'page' );
                the_title( '<h1 class="entry-title">', '</h1>' );
                the_content();
                // if ( comments_open() || get_comments_number() ) { comments_template(); }
        } //} ?>
    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>