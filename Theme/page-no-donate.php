<?php get_header();

$txt_msg = '<p>Chápem. Každý chce koláče bez práce a veľa muziky za málo peňazí. Či naše články niesu dosť dobré na to aby ste ich
        podporili? Ak je chyba v nás tak prosíme aspoň o komentár pod nejaký článok s konštruktívnou kritikou. Čítame každý jeden
        komentár a spravíme všetko v našich silách aby sme sa zlepšili.</p>
        <p>Bez podpory ľudí ako ste Vy to nezvládneme a preto máme takýto banner pod každým článkom a prosíme takto ľudí o pomoc.</p>';
$txt_thx = '<p><b>Za každý dar do predu ďakujeme.</b></p>';
$txt_alt = "Sme sklamaný";
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (!str_contains($url, 'org/sk/') && str_contains($url, 'y.org')){
  $txt_msg = "<p>I understand. Everyone likes free lunch. Or our articles are not good enough and don't deserve to be supported?
        If we are doing something wrong, please let us know in comment under an article. We read every single one.
        And we will do our best to improve.</p>
        <p>We can't do this without the support of people like you, so we have a banner like this under every article, to ask people for help.</p>";
  $txt_thx = '<p><b>Thank you in advance for every gift.</b></p>';
  $txt_alt = "We are very sad";
}
?>

<div class="container">
    <main class="site-main in-post-links" role="main">
        <img src="<?php echo get_bloginfo('template_url') ?>/Cry.gif" width="450" alt="<?php echo $txt_alt; ?>" />
        <?php echo $txt_msg; ?>
        <div style='box-shadow: 0 1px 5px rgba(104, 104, 104, 0.8); padding: 20px; '><?php echo get_option('insertpaypaldonate'); ?></div>
        <?php echo $txt_thx; ?>
    </main>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
