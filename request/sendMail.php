<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
  require_once('../configs/config.php');

  require_once('../require/commonFunc.php');

  $email_to = $i18n->get('contactEmail');
  $email_subject = "[MESTRUGUE] Nouveau message depuis le site";

  function died($error) {
      echo "We are very sorry, but there were error(s) found with the form you submitted. ";
      echo "These errors appear below.<br /><br />";
      echo $error."<br /><br />";
      echo "Please go back and fix these errors.<br /><br />";
      exit();
  }

  if(!isset($sPOST['name']) ||
      !isset($sPOST['surname']) ||
      !isset($sPOST['phone']) ||
      !isset($sPOST['email']) ||
      !isset($sPOST['checkin_date']) ||
      !isset($sPOST['checkout_date']) ||
      !isset($sPOST['adults']) ||
      !isset($sPOST['children']) ||
      !isset($sPOST['message'])) {
      died('We are sorry, but there appears to be a problem with the form you submitted.');
  }

  $name = $sPOST['name']; // required
  $surname = $sPOST['surname']; // required
  $phone = $sPOST['phone']; // required
  $email_from = $sPOST['email']; // required
  $checkin_date = $sPOST['checkin_date']; // not required
  $checkout_date = $sPOST['checkout_date']; // required
  $adults = $sPOST['adults']; // required
  $children = $sPOST['children']; // required
  $notes = $sPOST['message']; // required

  $error_message = "";

  if(strlen($notes) < 1) {
    $error_message .= 'The Message you entered do not appear to be valid.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }

  $email_message = "";


  function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }

  $email_message .= "Name: ".html_entity_decode(clean_string($name), ENT_QUOTES)."\n";
  $email_message .= "Surname: ".html_entity_decode(clean_string($surname), ENT_QUOTES)."\n";
  $email_message .= "Phone: ".html_entity_decode(clean_string($phone), ENT_QUOTES)."\n";
  $email_message .= "Email: ".html_entity_decode(clean_string($email_from), ENT_QUOTES)."\n";
  $email_message .= "Check in date: ".clean_string($checkin_date)."\n";
  $email_message .= "Check out date: ".clean_string($checkout_date)."\n";
  $email_message .= "Adults: ".clean_string($adults)."\n";
  $email_message .= "Children: ".clean_string($children)."\n\n";
  $email_message .= "Messages: \n\n\t".html_entity_decode(clean_string($notes), ENT_QUOTES)."\n";

  $headers = "From: contact@domaine-de-mestrugue.fr\r\n".
  "Reply-To: ".$email_from."\r\n".
  "MIME-Version: 1.0\r\n".
  "Content-type: text/plain; charset=UTF-8\r\n";

  if(mail($email_to, $email_subject, $email_message, $headers)){
    header("Location: ".BaseUrl."/contact/success#next");
  };
?>
