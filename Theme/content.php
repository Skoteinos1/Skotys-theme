<?php 
/** Template used to display post content.*/

$txt_c_read = "Čítaj ďalej";
$txt_com = '1 Koment';
$txt_coms = '%1$s Komentov';
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (!str_contains($url, 'org/sk/') && str_contains($url, 'y.org')){
$txt_c_read = "Continue reading";
$txt_com = '1 Comment';
$txt_coms = '%1$s Comments';
} ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
	<?php if ( has_post_thumbnail() ) {?>
		<div class="post-pic">
			<a href="<?php the_permalink(); ?>" rel="nofollow"><?php the_post_thumbnail('medium'); ?></a>
		</div>
	<?php } ?>
				
	<div class="post-excerpt">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="post-excerpt-text">
			<?php the_excerpt(); ?>
			<span class="read-more"><a href="<?php the_permalink(); ?>" class="button"><?php echo $txt_c_read; ?></a></span>
		</div>
		<p class="blog-post-meta"><?php the_date(); ?> <a href="#"><?php the_author(); ?></a>
			<!-- Pocet komentov v clanku 
			<a href="<?php comments_link(); ?>"> &#9993;
				<?php printf( _nx( $txt_com, '%1$s Komentov', get_comments_number(), 'comments title', 'skotys-theme' ), number_format_i18n( get_comments_number() ) ); ?>
			</a>-->
		</p>
	</div>
</article>