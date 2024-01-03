<?php
 //Load config file
 require_once(__DIR__.'/configs/config.php');

 //Load common function file
 require_once(__DIR__.'/require/commonFunc.php');

 //Load load page
 if(!empty($sGET['p'])){ //Check if url attribute p is not empty
   $pageName = $sGET['p']; //Define page name
   if(file_exists(__DIR__.'/pages/php/'.$pageName.'.php')){ //Check if the php file exist
    if(file_exists(__DIR__.'/pages/html/'.$pageName.'.php')){ //Check if the html file exist
      require_once(__DIR__.'/pages/php/'.$pageName.'.php'); //Include php file
    }else{
      logger('pages/html/'.$pageName.'.php don\'t exist'); //Add in log
      $pageName = '404'; //Define page name
      require_once(__DIR__.'/pages/php/404.php'); //Include 404 php file
    }
   }else{
      logger('pages/php/'.$pageName.'.php don\'t exist'); //Add in log
      $pageName = '404'; //Define page name
      require_once(__DIR__.'/pages/php/404.php'); //Include 404 php file
   }
 }else{ //If p attribute is empty load the home page
   $pageName = 'home'; //Define page name
   require_once(__DIR__.'/pages/php/home.php');  //Include home php file
 }

 //Load page HTML template
 require(__DIR__.'/require/html.php');


?>
