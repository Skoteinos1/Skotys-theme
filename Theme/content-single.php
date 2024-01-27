<?php
/** Template used to display post content on single pages.*/
?>
<article id="post-<?php the_ID(); ?>" class="blog-post-single"><!-- class="section section-text" OR <?php //post_class(); ?> -->
    <div class="in-post-links">
        <?php the_content();
        wp_link_pages(array('before' => '<div class="pagination">',
                            'after' => '</div>',
                            //'link_before'  => '<span class="current"><span class="currenttext">',
                            //'link_after' => '</span></span>',
                            'next_or_number' => 'next',
                            'nextpagelink' => __('Čítaj ďalej','skotys-theme'),
                            //'previouspagelink' => __('Predošlá strana','skotys-theme'),
                            'separator'	=> ' / ',
                            //'pagelink' => '%',
                            //'echo' => 1
        ));    
    echo ('</div>');
    echo get_option('insertpaypaldonate');
    $category_list = get_the_category_list( __( ' ', 'skotys-theme' ) ); echo '<div class="entry-categories"><span>Kategórie:</span>' . $category_list . '</div>';
    the_tags( '<div class="entry-tags">'.__( '<span>Značky:</span>', 'skotys-theme' )  ,' ', '</div>');

    do_action( 'blog_related_posts_tags' );
    // do_action( 'blog_related_posts_category' );

    if ( comments_open() || get_comments_number() ) { comments_template(); } ?>
</article>