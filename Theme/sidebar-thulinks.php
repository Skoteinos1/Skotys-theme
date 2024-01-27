<style>
.sidebar-thumbnail-posts {
  width: 100%;
  padding: 5px 0px;
}
.sb-thumbnail {
  width: 49%; // 184px;
  display: inline-block;
  vertical-align: top;
}
.sb-thumbnail img{
  height: 120px;
  object-fit: cover;
}
.sb-excerpt {
  display: inline-block;
  width: 49%; 
  max-height: 120px;
  overflow: hidden;
}
.sb-excerpt h3{
  padding: 0;
  font-size: 1.1em;
}
.sb-excerpt-text p{
  padding: 0;
  font-size: 0.9em;
  line-height: 1.2em;
}
</style>

<section class="sidebar-thumb-links">
  <!-- Start the Loop -->
  <?php $orig_post = $post;
  global $post;
  if ($post) {
    $tags = wp_get_post_tags($post->ID);
    $cats = wp_get_object_terms(
    $post->ID, 'category', array(
      'fields' => 'ids',
      )
    );
  } else { $tags = '';}
  if ($tags) {
    $tag_ids = array();
    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
    $args=array(
      //'tag__in' => $tag_ids,
      'cat' => $cats,
      'post__not_in' => array($post->ID),
      'posts_per_page'=>20, // Posts to display.
      'caller_get_posts'=>1
    );

    $args2=array(
      'category__not_in' => $cats, 
      'post__not_in' => array($post->ID),
      'posts_per_page'=>20, // Posts to display.
      'caller_get_posts'=>1
    );

    $loop = new WP_Query( $args );
    while( $loop->have_posts() ) {
      $loop->the_post(); ?>

	<a href="<?php the_permalink(); ?>" rel="nofollow">
            <article id="post-<?php the_ID(); ?>" class="sidebar-thumbnail-posts">
	        <?php if ( has_post_thumbnail() ) {?>
		    <div class="sb-thumbnail">
		        <?php the_post_thumbnail('medium'); ?>
		    </div>
		<?php } ?>	
		<div class="sb-excerpt">
		    <h3><?php the_title(); ?></h3>
		    <div class="sb-excerpt-text">
		        <?php the_excerpt(); ?>
		    </div>
		</div>
	    </article>
	</a>
    <?php }

    $loop2 = new WP_Query( $args2 );
    while( $loop2->have_posts() ) {
      $loop2->the_post(); ?>
      
	<a href="<?php the_permalink(); ?>" rel="nofollow">
            <article id="post-<?php the_ID(); ?>" class="sidebar-thumbnail-posts">
	        <?php if ( has_post_thumbnail() ) {?>
		    <div class="sb-thumbnail">
		        <?php the_post_thumbnail('medium'); ?>
		    </div>
		<?php } ?>	
		<div class="sb-excerpt">
		    <h3><?php the_title(); ?></h3>
		    <div class="sb-excerpt-text">
		        <?php the_excerpt(); ?>
		    </div>
		</div>
	    </article>
	</a>

    <?php }
  }
  $post = $orig_post;
  wp_reset_postdata(); // wp_reset_query();
?>
</section> <!-- /.blog-main, End the Loop -->