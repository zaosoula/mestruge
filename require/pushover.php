<?php
require_once(__DIR__.'/../class/Pushover.php');

$push = new Pushover();


function sendPushover($message, $title = "MESTRUGUE") {
  if(!defined('PushoverToken') || !defined('PushoverUseKey'))
    return;

  global $push;
  $push->setToken(PushoverToken);
  $push->setUser(PushoverUseKey);
  $push->setTitle($title);
  $push->setMessage($message);
  $push->send();
}
