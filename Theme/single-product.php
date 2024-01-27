<?php
/**
 * The Template for displaying all single products
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 */

get_header(); ?>
<?php do_action( 'woocommerce_before_main_content' );?>

<div class="woocom-product">
<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>
	<?php wc_get_template_part( 'content', 'single-product' ); ?>
<?php endwhile; // end of the loop. ?>
</div>

<?php do_action( 'woocommerce_after_main_content' ); ?>

<?php get_footer();
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */