<?php
session_start();

function logger($message){
  $debug_backtrace = debug_backtrace();
  $error = '['.date("Y-m-d H:i:s").'] "'.$message.'" in '.$debug_backtrace[0]['file'].' line '.$debug_backtrace[0]['line'];
  error_log($error."\n" , 3, LOG_FILE);
}

spl_autoload_register('classAutoload');
function classAutoload($class)
{
	include __DIR__.'/../class/' . $class . '.php';
}

//Secure $_GET in $sGET & $_POST in $sPost
foreach($_GET as $key=>$value){if(is_array($value))$sGET[$key]=secureArray($value);$sGET[$key]=htmlentities($value,ENT_QUOTES);}
foreach($_POST as $key=>$value){if(is_array($value))$sPOST[$key]=secureArray($value);else$sPOST[$key]=htmlentities($value,ENT_QUOTES);}
function secureArray($array_sec){foreach($array_sec as $key=>$value){if(is_array($value)){$array_sec[$key]=secureArray($value);}else{$array_sec[$key]=htmlentities($value,ENT_QUOTES);}}return $array_sec;}

if(isset($_COOKIE["lang"])){
  $lang = $_COOKIE["lang"];
}else{
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

$acceptLang = ['fr', 'en'];
$userLang = in_array($lang, $acceptLang) ? $lang : 'en';


$i18n = new i18n(array(
  'availableLangDir'=>__DIR__.'/../lang',
  'currentLang' => $userLang,
  'defaultLang'=>'en',
));

$__ = function ($key='') use ($i18n)
{
  echo $i18n->get($key);
};

function isDateInRange($date, $rangeString){
  $return = false;
  $ranges = explode(';',$rangeString);

  foreach ($ranges as $range) {
    $range = explode('to', $range);
    $startDate = $range[0];
    $endDate = $range[1];
    $year = '2000';

    $start_ts = strtotime($year.'-'.$startDate);
    $end_ts = strtotime($year.'-'.$endDate);
    $test_ts = strtotime($year.'-'.$date);

    if ($start_ts > $end_ts) {
      $year -= 1;
      $start_ts = strtotime($year.'-'.$startDate);
    }
    $inRange = ($test_ts >= $start_ts) && ($test_ts <= $end_ts);
    if($inRange){
      $return = true;
    }
  }
  return $return;
}

define("currentDate", date('m-d'));
$currentPriceSeason = function ($date=currentDate) use ($i18n) {
  if(isDateInRange($date, $i18n->get('#priceSeasonLowDaterange'))) return 'low';
  if(isDateInRange($date, $i18n->get('#priceSeasonMidDaterange'))) return 'mid';
  if(isDateInRange($date, $i18n->get('#priceSeasonHighDaterange'))) return 'high';
};
// ?>
