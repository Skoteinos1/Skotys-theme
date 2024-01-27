<style>
    .error-popis,
    .error-asciiart {
        display: inline-block;
        vertical-align: middle;
    }
    .error-popis{
        font-size: 20px;
        text-align: center;
    }
    .error-asciiart {
        overflow: hidden;
    }

    @media all and (min-width: 770px) {
        .error-popis,
        .error-asciiart {
            width: 46%;
        }
    }
</style>

<?php get_header();

$txt_to_prnt = "<strong>OOOuuuu!!!<br><br>
            ERROR 404: Stránka sa nenašla<br><br>
            Nasadíme tím našich špičkových programátorov, ktorý budú pracovať 24/7 kým nevyriešia tento problém.<br><br>
            Dovtedy Vám môžeme ponúknuť stránky z horného menu alebo bočného panelu. Prípadne môžete použiť Vyhľadávanie.<br></strong>";
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (!str_contains($url, 'org/sk/') && str_contains($url, 'y.org')){
$txt_to_prnt = "<strong>OOOuuuu!!!<br><br>
            ERROR 404: Page not found<br><br>
            We will deploy a team of our top programmers who will work 24/7 until they solve this problem.<br><br>
            Until then, we can offer you pages from the top menu or sidebar. Alternatively, you can use Search.<br></strong>";
} ?>

<div class="container">
    <main class="site-main" role="main">
        <div class="error-asciiart">
            <pre>
                                 __
                       _ ,___,-'",-=-.
           __,-- _ _,-'_)_  (""`'-._\ `.
        _,'  __ |,' ,-' __)  ,-     /. |
      ,'_,--'   |     -'  _)/         `\
    ,','      ,'       ,-'_,`           :
    ,'     ,-'       ,(,-(              :
         ,'       ,-' ,    _            ;
        /        ,-._/`---'            /
       /        (____)(----. )       ,'
      /         (      `.__,     /\ /,
     :           ;-.___         /__\/|
     |         ,'      `--.      -,\ |
     :        /            \    .__/
      \      (__            \    |_
       \       ,`-, *       /   _|,\
        \    ,'   `-.     ,'_,-'    \
       (_\,-'    ,'\")--,'-'       __\
        \       /  // ,'|      ,--'  `-.
         `-.    `-/ \'  |   _,'         `.
            `-._ /      `--'/             \
    -hrr-      ,'           |              \
              /             |               \
           ,-'              |               /
          /                 |             -'
</pre>
        </div>
    
        <div class="error-popis">
            <?php echo $txt_to_prnt ?>
        </div>
    
    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>