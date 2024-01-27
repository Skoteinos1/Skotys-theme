<?php
/** The template part for displaying a message that posts cannot be found. */

$txt_c_read = '<h2>Žiadne výsledky</h2>
	<p>Prepáčte, nič sa nezhoduje s hľadaným výrazom.<br>
	Prosím skúste použiť iné slovo.</p>';
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (!str_contains($url, 'org/sk/') && str_contains($url, 'y.org')){
$txt_c_read = '<h2> No results </h2>
            <p> Sorry, nothing matches the search term. <br>
            Please try another word.</p>';
}

?>
<article class="not-found">
        <?php echo $txt_c_read; ?>
	<div class="not-found-search">
		<?php get_search_form(); ?>
	</div>
</article>