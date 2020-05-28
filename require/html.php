<!DOCTYPE html>
<html lang="<?php echo $i18n->getCurrentLang(); ?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $i18n->get("metaDescription");?>" />
<meta name="keywords" content="" />
<meta name="author" content="" />

<title><?php echo $Page->getTitle();?></title>

<!-- Bootstrap Core CSS -->
<link href="<?php echo BaseUrl?>/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto&display=swap" rel="stylesheet">

<!-- Plugin CSS -->
<link rel="stylesheet" href="<?php echo BaseUrl?>/assets/css/animate.css">
<link rel="stylesheet" href="<?php echo BaseUrl?>/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo BaseUrl?>/assets/css/aos.css">

<link rel="stylesheet" href="<?php echo BaseUrl?>/assets/fonts/ionicons/css/ionicons.min.css">
<!-- <link rel="stylesheet" href="<?php echo BaseUrl?>/assets/fonts/fontawesome/css/font-awesome.min.css"> -->

<!-- Theme CSS -->
<link rel="stylesheet" href="<?php echo BaseUrl?>/assets/css/style.css">

<link href="<?php echo BaseUrl?>/assets/css/mestrugue.css" rel="stylesheet">

<script src="<?php echo BaseUrl?>/assets/js/aos.js"></script>

<link type="text/plain" rel="author" href="<?php echo BaseUrl?>/humans.txt" />
<?php require_once('require/shema.php'); ?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<?php echo $Page->getMeta(); ?>

</head>
<body id="page-top" class="page-<?php echo $pageName; ?>">
  <script type="text/javascript">
  // aos
  AOS.init({
    duration: 1000
  });
  </script>
  <?php
    if (in_array("header", $Page->getRequire())) //Check if header need to be include (set in php file of page)
      require_once('require/header.php');

    require_once('pages/html/'.$pageName.'.php'); //Load the html file of page

    if (in_array("footer", $Page->getRequire())) //Check if foter need to be include (set in php file of page)
      require_once('require/footer.php');
  ?>

  <script src="<?php echo BaseUrl?>/assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo BaseUrl?>/assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo BaseUrl?>/assets/js/popper.min.js"></script>
  <script src="<?php echo BaseUrl?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo BaseUrl?>/assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo BaseUrl?>/assets/js/jquery.stellar.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>

  <?php
  $i18n->passToJavascript();
  ?>

  <script src="<?php echo BaseUrl?>/assets/js/main.js"></script>
  <!-- Theme JavaScript -->
  <script src="<?php echo BaseUrl?>/assets/js/mestrugue.js"></script>


  <script src="https://kit.fontawesome.com/3877a492f8.js" crossorigin="anonymous"></script>

<?php
  $Page->load(); //Load all assets (set in php file of page)
?>

<div hidden>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="fr" viewBox="0 0 512 512"><title>france</title><circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"/><path style="fill:#D80027;" d="M512,256c0-110.071-69.472-203.906-166.957-240.077v480.155C442.528,459.906,512,366.071,512,256z"/><path style="fill:#0052B4;" d="M0,256c0,110.071,69.473,203.906,166.957,240.077V15.923C69.473,52.094,0,145.929,0,256z"/></symbol><symbol id="en" viewBox="0 0 512 512"><title>united-kingdom</title><circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"/><g> <path style="fill:#0052B4;" d="M52.92,100.142c-20.109,26.163-35.272,56.318-44.101,89.077h133.178L52.92,100.142z"/> <path style="fill:#0052B4;" d="M503.181,189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075,89.076H503.181z"/> <path style="fill:#0052B4;" d="M8.819,322.784c8.83,32.758,23.993,62.913,44.101,89.075l89.074-89.075L8.819,322.784L8.819,322.784 z"/> <path style="fill:#0052B4;" d="M411.858,52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177L411.858,52.921z"/> <path style="fill:#0052B4;" d="M100.142,459.079c26.163,20.109,56.318,35.272,89.076,44.102V370.005L100.142,459.079z"/> <path style="fill:#0052B4;" d="M189.217,8.819c-32.758,8.83-62.913,23.993-89.075,44.101l89.075,89.075V8.819z"/> <path style="fill:#0052B4;" d="M322.783,503.181c32.758-8.83,62.913-23.993,89.075-44.101l-89.075-89.075V503.181z"/> <path style="fill:#0052B4;" d="M370.005,322.784l89.075,89.076c20.108-26.162,35.272-56.318,44.101-89.076H370.005z"/> </g><g> <path style="fill:#D80027;" d="M509.833,222.609h-220.44h-0.001V2.167C278.461,0.744,267.317,0,256,0 c-11.319,0-22.461,0.744-33.391,2.167v220.44v0.001H2.167C0.744,233.539,0,244.683,0,256c0,11.319,0.744,22.461,2.167,33.391 h220.44h0.001v220.442C233.539,511.256,244.681,512,256,512c11.317,0,22.461-0.743,33.391-2.167v-220.44v-0.001h220.442 C511.256,278.461,512,267.319,512,256C512,244.683,511.256,233.539,509.833,222.609z"/> <path style="fill:#D80027;" d="M322.783,322.784L322.783,322.784L437.019,437.02c5.254-5.252,10.266-10.743,15.048-16.435 l-97.802-97.802h-31.482V322.784z"/> <path style="fill:#D80027;" d="M189.217,322.784h-0.002L74.98,437.019c5.252,5.254,10.743,10.266,16.435,15.048l97.802-97.804 V322.784z"/> <path style="fill:#D80027;" d="M189.217,189.219v-0.002L74.981,74.98c-5.254,5.252-10.266,10.743-15.048,16.435l97.803,97.803 H189.217z"/> <path style="fill:#D80027;" d="M322.783,189.219L322.783,189.219L437.02,74.981c-5.252-5.254-10.743-10.266-16.435-15.047 l-97.802,97.803V189.219z"/> </g></symbol></svg>    </div>
</body>
</html>
