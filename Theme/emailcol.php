<style>
.success,
.error {
  padding: 5px 9px;
  border-radius: 3px;
  width: 88%;
  display: block;
  margin: 0px auto 10px auto;
}
.success {
  border: 2px solid green;
  color: green;
}
.error {
  border: 2px solid red;
  color: red;
}
.contact-header h2{
  text-align: center;
  padding: 15px 0 5px 0;
}
.contact-header p{
  text-align: center;
  padding: 5px 5px 15px 5px;
  font-size: 18px;
}
.msg-under {
  text-align: center;
  font-size: 14px;
  margin: -20px 0 0px 0;
}
.contact-form {
  padding: 0px 5px 15px 5px;
  overflow: auto;
  border: 1px solid grey;
  background-color: #A6D6E8;
  margin: 0 0 15px 0;
}
.contact-form input[type='text'] {
  width: 90%;
  border: none;
  outline: none;
  border-bottom: 1px solid grey;
  padding: 5px;
  font-size: 16px;
  display: block;
  margin: -3px auto;
}
::placeholder {
  color: #404040;
  opacity: 1;
}
.optin_btn{
  display: block;
  margin: auto;
}
</style>

<?php
//response generation function
global $response;
$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){
  global $response;
  if($type == "success") $response = "<div class='success'>{$message}</div>";
  else $response = "<div class='error'>{$message}</div>";
}

//response messages
$email_invalid   = "Prosím skontroluj eMail.";
$name_invalid    = 'Mám ťa oslovovať "Hej ty" ?';
$name_long       = "To je ale dlhé meno.";
$no_consent      = "GDPR - Musíte súhlasiť s uložením Vašich údajov.";
$message_unsent  = "Kontaktné údaje neboli odoslané. Prosím skús znova.";
$message_sent    = "Kontaktné údaje boli odoslané.";
$txt_hdr   = "Zapíš sa na náš newsletter a získaj zľavy na naše produkty, bonusy a upozornenia na zaujímavé ponuky.";
$snd       = "Odoslať";
$txt_btm   = '';
$phdr1     = "Ako ťa mám oslovovať";

$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (str_contains($url, 'oto.co')){
$txt_hdr   = "Zapíš sa na náš newsletter a získaj doteraz najziskovejšiu kombináciu siedmych čísel v hre Keno Desať.";
$txt_btm   = "<p class='msg-under'>Nebudeme ti posielať spam ani predávať tvoje osobné údaje.</p>";
}
if (!str_contains($url, 'org/sk/') && str_contains($url, 'y.org')){
$email_invalid   = "Please check your email.";
$name_invalid    = 'Should I call you "Hey you"?';
$name_long       = "What a long name.";
$no_consent      = "GDPR - You must agree to the storage of your data.";
$message_unsent  = "Contact information was not sent. Please try again.";
$message_sent    = "Contact information was sent.";
$snd   = "Opt in";
$hdr   = "Sign up for our newsletter and get discounts on our products, bonuses and notifications about interesting offers.";
$phdr1 = "How should I address you?";
}

if (empty($_POST['message_name'])) { $_POST['message_name'] = ''; }
if (empty($_POST['message_email'])) { $_POST['message_email'] = ''; }

//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $name . "\r\n" . $email . "\r\n" . $url;

//php mailer variables
$to = get_option('admin_email');
$subject = "Optin " . get_bloginfo('wpurl');
//$headers = 'From: '. $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";

//$headers[] = 'From: '. $name . ' <' . $email . ">\r\n";
//$headers[] = 'Reply-To: '. $name . ' <' . $email . ">\r\n";

$headers = 'From: '. $name . ' <' . $email . ">\r\n" .
           'Reply-To: '. $name . ' <' . $email . ">\r\n";

if(empty($name) && empty($email)){ }
else {
  if(empty($name)) {
    my_contact_form_generate_response("error", $name_invalid);
  } elseif (strlen($name) > 30){
    my_contact_form_generate_response("error", $name_long);
  } else {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      my_contact_form_generate_response("error", $email_invalid);
    else //email is valid
    {
      //ready to go! send email
      $sent = wp_mail($to, $subject, strip_tags($message), $headers);
      if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
      else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
    }
  }
}

?>

<div class="contact-form">
  <div class="contact-header">
    <h2>Newsletter</h2>
    <p><?php echo $txt_hdr; ?></p>
  </div>
  <?php echo $response; ?>
  <form action="<?php the_permalink(); ?>" method="post">
    <input type="text" name="message_name" maxlength="30" placeholder="<?php echo $phdr1; ?>" value="<?php echo esc_attr($_POST['message_name']); ?>"><br>
    <input type="text" name="message_email" maxlength="40" placeholder="eMail" value="<?php echo esc_attr($_POST['message_email']); ?>"><br>
    <input type="hidden" name="submitted" value="1">
    <?php echo $txt_btm; ?>
    <button type="submit" name="submit" class="optin_btn"><?php echo $snd; ?></button>
  </form>
</div>
