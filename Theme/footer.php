<?php
$prava = "Všetky práva vyhradené.";
$to_top_msg = "Späť na začiatok";
$kontakt_pg = '/kontakt/';
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (strpos($url,'XXXXXXXXXX.co') !== false) {
   $pg_nm = "XXXXXXX.com";
   $strt_yr = 2014;
} elseif (strpos($url,'XXXXXX.org') !== false) {
  $pg_nm = "XXXXX.XXXXX";
  $strt_yr = 2022;
  $to_top_msg = "Back to Top";
  $prava = "All rights reserved.";
  $kontakt_pg = '/contact/';
} elseif (strpos($url,'tloto.c') !== false) {
  $pg_nm = "XXXXXX.XXXXXX";
  $strt_yr = 2014;
} elseif (strpos($url,'.local') !== false) {
  $pg_nm = "XXXXXXX.XXXXXXXXX";
  $strt_yr = 2022;
} else {
  $pg_nm = "";
  $strt_yr = 0;
} ?>

<footer class="colophon">
    <div class="footer-backttop">
        <a href="#" title="<?php echo $to_top_msg; ?>" rel="nofollow">&#9650;</a>
    </div>

    <div class="footer-links blog-footer">
        <div class="column"><?php dynamic_sidebar('footer-1'); ?></div>
        <div class="column"><?php dynamic_sidebar('footer-2'); ?></div>
        <div class="column"><?php dynamic_sidebar('footer-3'); ?></div>
        <!--   <div class="column"><?php dynamic_sidebar('footer-4'); ?></div> -->
    </div><!-- Uprav sirku v style.scss .column{width: x%;} -->
    
    <div class="copyright footer-links">
        <p>©&nbsp;<?php echo $strt_yr; ?>&nbsp;-&nbsp;<?php echo date('Y'); ?> <strong><a href="/" title=<?php echo $pg_nm; ?>><?php echo $pg_nm; ?></a></strong> –&nbsp;<?php echo $prava; ?></p>
        <!--<p>Created by: <strong><a href="https://github.com/Skoteinos1">Skoty. Hire me</a></strong></p>-->
    </div>
</footer>

<!-- <?php echo get_option('insertfooter'); // kebyze chcem mat nejaky footer kod ?> -->

<?php wp_footer(); ?>  <!-- Ukoncuje pluginy -->
</body>
</html>