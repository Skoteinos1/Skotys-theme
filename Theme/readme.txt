<h1 id="gdpr-definitions">Nadpis</h1>     <a href="#gdpr-definitions">Link na nadpis</a>

&bull;		Bullet		Gulka
&#9679;		Bullet		Gulka	
&#9892;		Male&Female
&#9658; 	Arrov E
&#9808; 	Saturn NE	WP Color
&#9812; 	White King
&#9776;     Menu symbol
&#9794; 	Male		WP Color
&#9792; 	Female		WP Color
&#9818;		Black King
&#9989;		OK		WP Color
&#9993; 	Envelope	
&#10004; 	OK
&#10095;	Arrow
&#10097;	Arrow
&lang;    Sipkka
&rang;    Sipka
&#10003;  OK fajka - nike
&#10005;  X
&#10007;  X
&#10008;  X

Obrazok postu maly              <?php the_post_thumbnail('thumbnail'); ?>
Akurat velkost                  <?php the_post_thumbnail('medium'); ?>
Obrazok postu full              <?php the_post_thumbnail(); ?>
Link na post                    <?php the_permalink(); ?>
Nadpis postu                    <?php the_title(); ?>
Vynatok z postu                 <?php the_excerpt(); ?>
Cely clanok                     <?php the_content(); ?>
Blog Description                <?php echo get_bloginfo( 'description' ); ?>
Blog Title                      <?php echo get_bloginfo( 'name' ); ?>
Blog title je sucastne linkom   <a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a>
Ako na post cez content.php     <?php get_template_part( 'content', get_post_format() ); ?>
Header Menu                     <?php dynamic_sidebar('header-1'); ?>
Insert Header script            <?php echo get_option('insertheader'); ?>
Insert Footer script            <?php echo get_option('insertfooter'); ?>
Zalomenie strany v clanku       <!--nextpage-->
Padding: top right bottom left

FOXY - Pekny efekt na najnovsich clankoch - sidebar
Skin - TOP button
Writee - Zlate pismo #bf9e3b
Zeal - Krasna uvodna stranka 
---------------------------------------------------------
TO DO:
.blog-post - upravit velkost excerptu a read more link
Google Console
---------------------------------------------------------
UPDATE NOTES:
---------------------------------------------------------
skotytheme 0.5.5
zjednoteny footer a index. Pridane 2 jazyky
vlastny newsletter optin
bugfixes
---------------------------------------------------------
skotytheme 0.5.4
sidebar-thulinks.php V sidebare linky s obrazkami a kratkym vycucom. Blokujes v sidebar.php s // do spravneho riadku
page-kniha.php Pridany countodown do hlavicky
---------------------------------------------------------
skotytheme 0.5.3
page-kniha.php vyhodeny filipov analytics
bezpecnosna zaplata: zobrazovalo pravy login v komentoch
---------------------------------------------------------
skotytheme 0.5.2
pridane single-product.php
CSS:
  .woocommerce nahradene za .woocom_chckout
  Pridana moznost zneviditelnovat tlacitko horneho menu
odstraneny header-shop.php
pridany insert_after_body
pridane Inser_after_body a insert_header do page-kniha.php 
---------------------------------------------------------
skotytheme 0.5.1
page-kontakt - zruseny GDPR suhlas ked mi posielaju mail a X+4=9 upravene na 5-3=X
footer - zneviditelnene stranku vytvoril skoty
---------------------------------------------------------
skotytheme 0.5.0
Pridane popisy php suborov
Pridany shop template a css - Ak budes chciet mat skutocny store bude tu treba nieco prerobit pretoze blogovy post a product page sa loaduju z toho isteho suboru
---------------------------------------------------------
skotytheme 0.4.9
Vyhodeny Google+
Privacy Policy v theme
Akismet upozornenie v theme: Táto webová stránka používa Akismet na redukciu spamu...
Paypal donate button
---------------------------------------------------------
skotytheme 0.4.8
31.1.2020 - css post-pic{max-height: 250px;}
pridany archive.php (Umoznuje nadpis napr: Kategoria: Nieco)
mozno v buducnosti budes chciet pridat riadok do archive:  the_archive_description( '<div class="taxonomy-description">', '</div>' );
Pridane Views Count
adresa zmenena na XXXXXXXX a kontaktny formular nadpis na <h1>
Sortable views_count
---------------------------------------------------------
skotytheme 0.4.7
HOTOVO 24.6.2018
---------------------------------------------------------
skotytheme 0.4.6
Upravene Social ikony
h2 nadpis v bookadd
---------------------------------------------------------
skotytheme 0.4.5
Social Media Share
---------------------------------------------------------
skotytheme 0.4.4
Oprava Mailov
Zalozka uz neprekryva footer widget
---------------------------------------------------------
skotytheme 0.4.3
Theme Check je spokojny
Skontrolovane stare verzie Single
Zmazane nepotrebne priecinky
---------------------------------------------------------
skotytheme 0.4.0
Theme Check
premenovanie na skotys-theme
---------------------------------------------------------
skotytheme 0.3.9
GDPR dokoncene aj s textom, letime na Slovensko
---------------------------------------------------------
skotytheme 0.3.8
GDPR-consent done
---------------------------------------------------------
skotytheme 0.3.7
hotovo page page-kontakt, pracujem na page-cviky-na...
---------------------------------------------------------
skotytheme 0.3.6
Zaciatok 404 page a content-page
Pred odletom do LTN
---------------------------------------------------------
skotytheme 0.3.5
Dokoncena stranka single postu
---------------------------------------------------------
skotytheme 0.3.4
single.php		v podstate hotovo, este comments chyba
content-single.php	hotovo
---------------------------------------------------------
skotytheme 0.3.3
single.php - prakticky hotovo
Odchod do prahy
---------------------------------------------------------
skotytheme 0.3.2
Home page hotovo
---------------------------------------------------------
skotytheme 0.3.1
Idem rozdelit style.css - je proste toho vela
---------------------------------------------------------
skotytheme 0.3.0
bookadd.php	hotovo aj s media query
style.css	pracujem na headeri, prisiel som na to ako obyst grid aj flex (cez width: X%;)
ak je odkaz na style.css len vo functions.php tak stranka potrebuje cistit pamat aby zobrazila lepsi verziu
---------------------------------------------------------
skotytheme 0.2.9
index.php	Mobile version hotovo
---------------------------------------------------------
skotytheme 0.2.8
bookadd.php	formatovanie
style.css	formatovanie pagination
---------------------------------------------------------
skotytheme 0.2.7
functions.php	Insert header, footer. Page logo, Hide WP version, block email login, hide login error, wrong adress repair, insert user on forgotten pasword, ready for excerpt length change a readmore link
---------------------------------------------------------
skotytheme 0.2.6
Idem prerobit na mobile first
header.php      Mobile-Bar
---------------------------------------------------------
skotytheme 0.2.5
index.php       Vybraty content.php - aby sa dal rozne upravovat v roznych temach
content.php     <article> tagy
---------------------------------------------------------
skotytheme 0.2.4
Pred Odletom
---------------------------------------------------------
skotytheme 0.2.3
style.scss      Explorer nedokazal citat premenne. Vdaka Live SASS Compiler mozem pisat kod do style.scss s premennymi a on ho potom prelozi do style.css bez premennych  
style.scss      Uvodne prikazy prebrane z inych tem
footer.php      Uz ho chape aj explorer vdaka .scss
---------------------------------------------------------
skotytheme 0.2.2
style.css	Presunute formatovanie z css/blog.css
update.txt	Presunute poznamky z style.css
footer.php  upraveny kod podla inych tem
header.php  upraveny kod podla inych tem
index.php   upraveny kod podla inych tem, presunuty obsah content.php sem
content.php upraveny kod podla inych tem, vyzera ze bude zbytocny
Idem pracovat na style.css vyzera ze je lepsie pisat css vo vnutri .php cez <style> a potom to presunut do .css ked je hotovo
---------------------------------------------------------
skotytheme 0.2.1
header.php	Upraveny podla inych tem
bookad.php	oddelene z index.php a blog.css
---------------------------------------------------------
skotytheme 0.2.0
Idem kopirovat php z inych tem
---------------------------------------------------------
skotytheme 0.1.9
style.css	Update a Citaj ma presunute sem 
Responsiveness
---------------------------------------------------------
skotytheme 0.1.8
Uvodna (index.php) +- hotovo. Penis symbol je formatovany wordpressom
Pridane 4 nahodne clanky na sidebar
Vysledky speed testu:
Staci 1 roundabout na nacitanie stranky. Ostatne potrebuju 4
Divna obrazovka. Explorer divne rozhadzuje
---------------------------------------------------------
skotytheme 0.1.7
Reklama hotovo, penis symbol mi divne formatuje
---------------------------------------------------------
skotytheme 0.1.6
Grid Header, sidebar, Footer hotovo. Priprava na reklamu nka knihu
Zacinam pracovat na zobrazovani postov na hlavnej stranke
---------------------------------------------------------
skotytheme 0.1.5
Bootstrap je von z headera, sidebaru a footera
Vyhodende bootstrap.css a js-veci
Pracujem na Gride
Zefektivnene div-i v headeri a footeri
---------------------------------------------------------
skotytheme 0.1.4
Netusim		Idem vyhodit Bootstrap a prerobit na GRID
---------------------------------------------------------
skotytheme 0.1.3
sidebar.php	Upraveny <div>
blog.css	uprava moving-line. Zjednoteny kod sidebar a header ciar
---------------------------------------------------------
skotytheme 0.1.2
footer.php	prerabka <div>ov, prilis vela
footer.php	vyhodena trieda, oprava chyby, usetrene 100 znakov v blog.css za cenu 150 znakov v footer.php (asi taby)
---------------------------------------------------------
skotytheme 0.1.1
header.php	zaciatok prac na headeri
---------------------------------------------------------
skotytheme 0.1.0
blog.css	premenna    --sidebar-heading-font-color:
blog.css	dokonceny search widget
---------------------------------------------------------
skotytheme 0.0.8 - 0.0.9 
update.txt	Reorganizovany
blog.css	.bocny-panel	Zarovnanie doprava
blog.css	Uprava		.NIECO a:link, .NIECO a:visited   na	.NIECO a
blog.css	Zacinam robit Search widget
Idem pouzit Brackets
blog.css	Pridane ciary pod nadpisy
blog.css	oprava chyby sposobujucej "siroku stranku"    margin: -20px;   na  margin-top: -20px;
blog.css	Uprava searchbaru
---------------------------------------------------------
skotytheme 0.0.7
footer.php	Triangle ako Back to top
blog.css	Optimalised footer
blog.css	Sidebar
sidebar.php	widgety
blog.css	Rosirenie na 1150px	.container {width: 1150px;}
sidebar.php	Uprava		col-sm-3 col-sm-offset-1	na	col-sm-4
---------------------------------------------------------
skotytheme 0.0.6
functions.php Znovu vytvorene z tutorialu
functions.php Obsahuje prikazy na bootstrap, jquery a blog.css
footer.php	Naozaj hotovo Pridane widgety
sidebar.php	Zacate
---------------------------------------------------------
skotytheme 0.0.5
footer.php	Vyhodene	<div id="footer-widget-area" class="widget__wrapper" role="complementary">
footer.php	Vyhodene	<div class="row">
footer.php	Cistocne linky na local stranku		<a href="/podmienky-pouzivania/">podmienkach pou��vania</a>
footer.php	Hotovo
---------------------------------------------------------
skotytheme 0.0.4
Stiahnuty Bootstrap a Jquery z netu
---------EDIT Comments------------------------------------------------
// ---------- WISTERIA ----------------------
/*.commentlist .reply {
  border-bottom: $main-theme-color solid;
  background: #f2f2f2;
}
.commentlist p {
  background: #f2f2f2;
}
.commentlist .reply a,
.commentlist .reply a:visited {
  text-transform: uppercase;
  color: $main-theme-color;
  text-decoration: none;
}
.commentlist .comment-meta {
  background: #f2f2f2;
}
.commentlist .vcard {
  background: #f2f2f2;
}
*/

/*Comment Output*/
/*
#respond
.comment-respond
#reply-title
.comment-reply-title
#commentform
.comment-form
.comment-notes
.comment-form-comment
.comment-form-author
.comment-form-email
.comment-form-url
#submit
.submit
*/
.comments-area article header {
.commentlist .reply {
.commentlist .reply a {
.commentlist .alt {
.commentlist .odd {
.commentlist .even {
.commentlist .thread-alt {
.commentlist .thread-odd {
.commentlist .thread-even {
.commentlist li ul.children .alt {
.commentlist li ul.children .odd {
.commentlist li ul.children .even {
.commentlist .vcard {
.commentlist .vcard cite.fn {
.commentlist .vcard span.says {
.commentlist .vcard img.photo {
.commentlist .vcard img.avatar {
.commentlist .vcard cite.fn a.url {
.commentlist .comment-meta {
.commentlist .comment-meta a {
.commentlist .commentmetadata {
.commentlist .commentmetadata a {
.commentlist .parent {
.commentlist .comment {
.commentlist .children {
.commentlist .pingback {
.commentlist .bypostauthor {
.commentlist .comment-author {
.commentlist .comment-author-admin {
.commentlist {
.commentlist li {
.commentlist li p {
.commentlist li ul {
.commentlist li ul.children li {
.commentlist li ul.children li.alt {
.commentlist li ul.children li.byuser {
.commentlist li ul.children li.comment {
//.commentlist li ul.children li.depth-{id} {}
.commentlist li ul.children li.bypostauthor {
.commentlist li ul.children li.comment-author-admin {
#cancel-comment-reply {
#cancel-comment-reply a {
.commentlist .even .comment {
.commentlist .odd .comment {