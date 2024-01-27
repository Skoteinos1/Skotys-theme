<?php
/** The template for displaying comments.
 * The area of the page that contains both current comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet entered the password we will
 * return early without loading the comments. */
if ( post_password_required() ) {
	return;
}

$txt_mys_kc = 'Myšlienky k článku &ldquo;';
$txt_akismt = '<p class="akismet_comment_form_privacy_notice">Táto webová stránka používa Akismet na redukciu spamu. <a href="https://akismet.com/privacy/" target="_blank" rel="nofollow noopener">Získajte viac informácií o tom, ako sú vaše údaje z komentárov spracovávané</a>.</p>';
$txt_mr_thg = 'Ďalšie myšlienky';
$txt_com_cls = 'Komentovanie je uzavreté.';
$txt_priestor = 'Priestor pre tvoje myšlienky:';
$txt_notes = '<p>Použitím tohto formulára, súhlasíte s uložením a spracovaním vašich údajov touto stránkou.<br>Vaša e-mailová adresa nebude zverejnená. Vyžadované polia sú označené *</p>';
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (!str_contains($url, 'org/sk/') && str_contains($url, 'y.org')){
$txt_mys_kc = 'Thoughts on the article &ldquo;';
$txt_akismt = '<p class="akismet_comment_form_privacy_notice">This website uses Akismet to reduce spam. <a href="https://akismet.com/privacy/" target="_blank" rel="nofollow noopener">Learn more about how your comment data is processed</a>.</p>';
$txt_mr_thg = 'More thoughts';
$txt_com_cls = 'Comments are closed.';
$txt_priestor = 'Space for your thoughts:';
$txt_notes = '<p>By using this form, you agree to the storage and processing of your data by this site. <br> Your e-mail address will not be published. Required fields are marked *</p>';
}

 ?>
<div id="comments" class="comments-area"> <hr>
    <?php //comment_form();
	comment_form(array('title_reply' => $txt_priestor,
		'comment_notes_before'   => $txt_notes
	));
    echo $txt_akismt;
    if ( have_comments() ) { ?>
        <h3 class="comments-title">
	    <?php echo $txt_mys_kc . get_the_title() . '&rdquo;'; ?>
	</h3>

      	<div class="commentlist">
		    <?php wp_list_comments( array(
                'short_ping'  => true,
                // 'reverse_top_level' => true, //Novsie na vrchu, Nastavenia>Komentare
                //'reply_text'  => 'To co si tu napisal...',
				'avatar_size' => 0,
			) ); ?>

			<nav class="pagination btn">
				<strong><?php echo $txt_mr_thg; ?></strong>
				<?php the_comments_pagination();?>
			</nav>
	    </div>
    <?php }
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php echo $txt_com_cls; ?></p>
	<?php endif; ?>
</div>