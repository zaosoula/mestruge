<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
  require_once(__DIR__.'/../configs/config.php');

  require_once(__DIR__.'/../require/commonFunc.php');
  require_once(__DIR__.'/../require/pushover.php');

  function died($error = "") {
      sendPushover("$error\n".json_encode($_POST), "Error");
      echo "We are very sorry, but there were error(s) found with the form you submitted. ";
      echo "These errors appear below.<br /><br />";
      echo $error."<br /><br />";
      echo "Please go back and fix these errors.<br /><br />";
      exit();
  }

  function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

  function checkDates($checkin_date, $checkout_date) {
    if(!validateDate($checkin_date, 'Y-m-d') || !validateDate($checkout_date, 'Y-m-d')) {
      died("Invalid date format");
    }

    $current_date = new DateTime("now");
    $checkin_date = new DateTime($checkin_date);
    $checkout_date = new DateTime($checkout_date);

    if($checkin_date < $current_date) {
      died("Check in date is in the past");
    }

    if($checkout_date < $checkin_date) {
      died("Check out date is before check in date");
    }
  }

  if(!isset($_POST['g-recaptcha-response'])) {
    died("Captcha is missing");
  }else{
    $url = 'https://www.google.com/recaptcha/api/siteverify';
  	$data = array(
  		'secret' => '6Lfsbs0ZAAAAANbpG6st8tCyMfLBMD9lTmjgCWHv',
  		'response' => $_POST["g-recaptcha-response"]
  	);
  	$options = array(
  		'http' => array (
  			'method' => 'POST',
  			'content' => http_build_query($data),
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
  		)
  	);
  	$context  = stream_context_create($options);
  	$verify = file_get_contents($url, false, $context);
  	$captcha_success=json_decode($verify);

  	if ($captcha_success->success==false) {
      died("Captcha validation failed<br />". implode(',', $captcha_success->{"error-codes"}));
  	} else if ($captcha_success->success==true) {
      $email_to = $i18n->get('contactEmail');
      $email_subject = "[MESTRUGUE] Nouveau message depuis le site";

      if(!isset($sPOST['name']) ||
          !isset($sPOST['surname']) ||
          !isset($sPOST['lastname']) ||
          !isset($sPOST['phone']) ||
          !isset($sPOST['email']) ||
          !isset($sPOST['checkin_date']) ||
          !isset($sPOST['checkout_date']) ||
          !isset($sPOST['adults']) ||
          !isset($sPOST['children']) ||
          !isset($sPOST['message'])) {
          died("Fields are missing");
      }

      $name = $sPOST['name']; // required
      $honeypot = $sPOST['lastname']; // Honeypot
      $surname = $sPOST['surname']; // required
      $phone = $sPOST['phone']; // required
      $email_from = $sPOST['email']; // required
      $checkin_date = $sPOST['checkin_date']; // not required
      $checkout_date = $sPOST['checkout_date']; // required
      $adults = $sPOST['adults']; // required
      $children = $sPOST['children']; // required
      $notes = $sPOST['message']; // required

      $error_message = "";

      /* Bot Detection */
      if(!empty($honeypot)) {
        died("Bot detected");
      }

      checkDates($checkin_date, $checkout_date);

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
        sendPushover("Message sent to contact email\n".json_encode($_POST), "Success");
        header("Location: ".BaseUrl."/contact/success#next");
      };
  	}
  }
?>
