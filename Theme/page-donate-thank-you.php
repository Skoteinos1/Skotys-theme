<?php get_header();

$txt_thx = '<h1>Ďakujeme.</h1>
        <p>Stránky žijú vďaka reklamám, predaju a darom svojich návštevníkov. Aj vďaka Vám tu budeme môcť byť ďalší deň a tvoriť skvelý obsah.</p> ';
$txt_bck = '<p style="text-align: center;"><b><a href="/">Späť na hlavnú stránku.</a></b></p>';
$txt_tx = 'Ďakujeme';
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (!str_contains($url, 'org/sk/') && str_contains($url, 'y.org')){
  $txt_thx = '<h1>Thank you</h1>
        <p>The site lives on thanks to the ads, sales and gifts of our visitors. Thanks to you, we will be able to be here the next day and create great content.</p> ';
  $txt_bck = '<p style="text-align: center;"><b><a href="/">Back to main page.</a></b></p>';
  $txt_tx = 'Thank You';
}
?>

<style>
.imggff {
  position: relative;
  padding: 0;
  margin: 0;
}
.centered {
  position: absolute;
  width: 100%;
  color: white;
  font-size: 32px;
  bottom: 0;
  text-align: center;
  padding: 20px 0;
  font-weight: 700;
  z-index: 2;
  text-shadow: -1px 1px 2px #000,
               1px 1px 2px #000,
               1px -1px 0 #000,
               -1px -1px 0 #000;
}
</style>

<div class="container">
    <main class="site-main in-post-links" role="main">
        <?php echo $txt_thx; ?>
        <div class="imggff">
            <img src="<?php echo get_bloginfo('template_url') ?>/ThankYou.gif" width="450" />
            <div class="centered"><?php echo $txt_tx; ?></div>
        </div>
        <?php echo $txt_bck; ?>
    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>