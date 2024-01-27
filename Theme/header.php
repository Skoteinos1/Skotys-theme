<?php
/** The header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- <html lang="sk-SK" prefix="og: http://ogp.me/ns#"> -->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" /> <!--<meta charset="UTF-8"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- <link rel="stylesheet" href="<?php //echo esc_url( get_template_directory_uri() );?>/style.css"> <!-- Nacitava css, lepsie z functions.php -->
<!-- <link rel="stylesheet" href="<?php //echo esc_url( get_template_directory_uri() );?>/test.css"> -->

<?php echo get_option('insertheader'); ?>

<script>
    function acceptGDPR() {
        var d = new Date();
        d.setTime(d.getTime() + (5 * 365 * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = "gdpr-consent" + "=" + true + ";" + expires + ";path=/";
        var x = document.getElementById("gdpr");
        x.style.display = "none";
    }
</script>

<?php wp_head();?> <!-- Nacita nastavenia z WP -->
</head>

<!-- <?php // flush(); ?> --> <!-- FLUSH Vraj je to dobre -->

<body <?php body_class(); ?>>
<?php echo get_option('insertafterbody'); ?>
    <header id="masthead" class="site-header site-branding sticky" role="banner">
        <div class="blog-header">
            <a class= "blog-logo" href="<?php echo site_url();?>"><img alt="<?php echo get_bloginfo( 'name' ); ?>" src="<?php echo get_option('pagelogo'); ?>"></a>
            <span class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></span>
        </div>
        <input type="checkbox" id="collapsible-cbx">
        <label class="collapsible-cbx-lbl" for="collapsible-cbx">&#9776;</label>
        <!--Navigation widget-area-2-->
        <nav class="main-nav moving-line" role="complementary">
            <?php dynamic_sidebar('header-1'); ?>
        </nav>
    </header>
    <div id="masthead-after"></div>

<?php
// GDPR
$txt_gdpr = 'Pre lepší online zážitok používame cookies. Pomáhajú nám analyzovať návštevnosť, prispôsobiť reklamu a zvyšovať kvalitu služieb. <a href="/ochrna-sukromia/">Viac informácií a možnosti nastavenia tu.</a> <button onclick="acceptGDPR()" id="gdpr-submit" type="submit" name="submit">Rozumiem</button>';
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (!str_contains($url, 'org/sk/') && str_contains($url, 'y.org')){
  $txt_gdpr = 'We use cookies to ensure you have the best browsing experience on our website. By using our site, you acknowledge that you have read and understood our <a href="/privacy-policy/"> Privacy Policy.</a> <button onclick="acceptGDPR()" id="gdpr-submit" type="submit" name="submit">Got It!</button>';
}
if ( !isset( $_COOKIE['gdpr-consent'] ) ) { ?>
    <div id="gdpr" class="in-post-links sticky">
        <button id="gdpr-close" onclick='this.parentNode.style.display = "none";'>&#10005;</button>
        <?php echo $txt_gdpr; ?>
    </div>
<?php } ?>

<!-- <div id="main" class="site-main"> 
<div id="content" class="site-content"> <!-- Zacinaju content div na konci headera, okrem Foxy-->