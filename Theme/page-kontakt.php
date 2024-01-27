<style>
.success,
.error {
  padding: 5px 9px;
  border-radius: 3px;
  width: 86%;
}
.success {
  border: 1px solid green;
  color: green;
}
.error {
  border: 1px solid red;
  color: red;
}
iframe {
  pointer-events:none;
}
.contact-form {
  padding: 20px;
  overflow: auto;
}
.contact-form input[type='text'],
.contact-form textarea {
  width: 90%;
  border: none;
  outline: none;
  border-bottom: 1px solid grey;
  padding: 16px;
  font-size: 16px;
}
.contact-form textarea {
  height: 120px;
  font-size: 18px;
}
.adresa {
  padding: 20px;
  font-weight: 800;
  color: grey;
}
.adresa span{
  color: black;
  font-size:24px;
}

@media all and (min-width: 770px) {
  .contact-form {
    padding: 50px 0 0 50px;
    box-sizing: border-box;
    display: inline-block;
    vertical-align: middle;
    width: 70%;
  }
  .adresa {
    box-sizing: border-box;
    width: 28%;
    display: inline-block;
    vertical-align: middle;
  }
  .contact-form input[type='text'],
  .contact-form textarea {
    width: 70%;
  }
  .success,
  .error {
    width: 68%;
  }
}
</style>

<?php
//response generation function
$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){

  global $response;

  if($type == "success") $response = "<div class='success'>{$message}</div>";
  else $response = "<div class='error'>{$message}</div>";
}

//response messages
$not_human       = "Odpoveď je niekde medzi jeden a tri.";
$missing_content = "Prosím vyplňte všetky polia.";
$email_invalid   = "Prosím skontrolujte si Váš eMail.";
$no_consent      = "GDPR - Musíte súhlasiť s uložením Vašich údajov.";
$message_unsent  = "Správa nebola odoslaná. Prosím skúste znova.";
$message_sent    = "Ďakujeme! Vaša správa bola odoslaná.";

// fix PHP8
if (empty($_POST['message_name'])) { $_POST['message_name'] = ''; }
if (empty($_POST['message_email'])) { $_POST['message_email'] = ''; }
if (empty($_POST['message_text'])) { $_POST['message_text'] = ''; }
if (empty($_POST['message_human'])) { $_POST['message_human'] = ''; }
if (empty($_POST['submitted'])) { $_POST['submitted'] = ''; }

//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];

//php mailer variables
$to = get_option('admin_email');
$subject = "Sprava cez " . get_bloginfo('wpurl');
//$headers = 'From: '. $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";

//$headers[] = 'From: '. $name . ' <' . $email . ">\r\n";
//$headers[] = 'Reply-To: '. $name . ' <' . $email . ">\r\n";

$headers = 'From: '. $name . ' <' . $email . ">\r\n" .
           'Reply-To: '. $name . ' <' . $email . ">\r\n";


if(!$human == 0){
  if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
  else {
    //validate email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      my_contact_form_generate_response("error", $email_invalid);
    else //email is valid
      {
      //validate presence of name and message
      if(empty($name) || empty($message)){
        my_contact_form_generate_response("error", $missing_content);
      }
      else {
        // consent with storage of data
        // if($_POST['consent-kontakt-cbx'] != 7) {
        //   my_contact_form_generate_response("error", $no_consent);
        // }
        // else {
          //ready to go! send email
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        // }
      }
    }
  }
}
else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>

<?php get_header(); ?>

<div class="container">
  <iframe src="https://maps.google.com/maps?q=n31aa&amp;t=m&amp;z=7&amp;output=embed&amp;iwloc=near" width="100%" height="280" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>

  <div class="contact-form">
    <div class="contact-header">
      <h1>Kontaktný formulár</h1>
      <p>V prípade akýchkoľvek otázok nás neváhajte kontaktovať. Odpovedáme zvyčajne do 48 hodín.<br>Pred odoslaním si prosím skontrolujte adresu. Ak uvediete nesprávnu, nebudeme Vám môcť odpovedať.</p>
    </div>
    <?php echo $response; ?>
    <form action="<?php the_permalink(); ?>" method="post">
      <input type="text" name="message_name" placeholder="Vaše Meno" value="<?php echo esc_attr($_POST['message_name']); ?>"><br>
      <input type="text" name="message_email" placeholder="Váš eMail" value="<?php echo esc_attr($_POST['message_email']); ?>"><br>
      <textarea type="text" name="message_text" placeholder="Správa"><?php echo esc_textarea($_POST['message_text']); ?></textarea><br>
      <p><label for="message_human">Nie som robot:<br>5 - 3 = <input type="text" style="width: 60px;" name="message_human"></label></p><br>
      <!-- <p><input type="checkbox" id="consent-kontakt-cbx" name="consent-kontakt-cbx" value="7"><label for="consent-kontakt-cbx">Použitím tohto formulára, súhlasíte s uložením a spracovaním vašich údajov touto stránkou.</label></p>-->
      <br>
      <input type="hidden" name="submitted" value="1">
    
      <button type="submit" name="submit">Odoslať správu</button>
    </form>
  </div>
  
  <div class="adresa">
    <span>Naša adresa:</span><br><br>
    <?php echo get_option('insertaddress'); ?>
  </div>
</div>

<?php get_footer(); ?>