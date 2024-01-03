<section class="site-hero overlay" style="background-image: url(<?php echo BaseUrl; ?>/assets/images/hero_4.jpg)" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade">
        <h1 class="heading mb-3"><?php $__('cottagesHeroTitle'); ?></h1>
        <ul class="custom-breadcrumbs mb-4">
          <li><a href="<?php echo BaseUrl ?>/home"><?php $__('navHome'); ?></a></li>
          <li>&bullet;</li>
          <li><?php $__('navCottages'); ?></li>
        </ul>
      </div>
    </div>
  </div>
  <a class="mouse smoothscroll" href="#next">
    <div class="mouse-icon">
      <span class="mouse-wheel"></span>
    </div>
  </a>
</section>
<!-- END section -->

<?php
  include(__DIR__.'/../../require/modules/calltoactionHero.php');
?>

<section class="section">
  <div class="container">

    <div class="row">
      <div class="col-md-6 col-lg-4" data-aos="fade-up">
        <a href="<?php echo BaseUrl; ?>/cottages/amandier" class="room">
          <figure class="img-wrap">
            <img src="<?php $__("cottagesSectionListColumn1ImageUrl"); ?>" alt="<?php $__("cottagesSectionListColumn1ImageAlt"); ?>" class="img-fluid mb-3">
          </figure>
          <div class="p-3 text-center room-info">
            <h2><?php $__("cottagesSectionListColumn1Title"); ?></h2>
            <span class="text-uppercase letter-spacing-1"><?php $__("cottagesSectionListColumn1Caption"); ?></span>
            <p><?php $__("cottagesSectionListColumn1Description"); ?> </p>

          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up">
        <a href="<?php echo BaseUrl; ?>/cottages/mimosa" class="room">
          <figure class="img-wrap">
            <img src="<?php $__("cottagesSectionListColumn2ImageUrl"); ?>" alt="<?php $__("cottagesSectionListColumn2ImageAlt"); ?>" class="img-fluid mb-3">
          </figure>
          <div class="p-3 text-center room-info">
            <h2><?php $__("cottagesSectionListColumn2Title"); ?></h2>
            <span class="text-uppercase letter-spacing-1"><?php $__("cottagesSectionListColumn2Caption"); ?></span>
            <p><?php $__("cottagesSectionListColumn2Description"); ?> </p>

          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up">
        <a href="<?php echo BaseUrl; ?>/cottages/heated-pool-area" class="room">
          <figure class="img-wrap">
            <img src="<?php $__("cottagesSectionListColumn3ImageUrl"); ?>" alt="<?php $__("cottagesSectionListColumn3ImageAlt"); ?>" class="img-fluid mb-3">
          </figure>
          <div class="p-3 text-center room-info">
            <h2><?php $__("cottagesSectionListColumn3Title"); ?></h2>
            <span class="text-uppercase letter-spacing-1"><?php $__("cottagesSectionListColumn3Caption"); ?></span>
            <p><?php $__("cottagesSectionListColumn3Description"); ?> </p>

          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<?php
  include(__DIR__.'/../../require/modules/calltoaction.php');
?>

<footer class="section footer-section">
  <div class="container">
    <div class="row mb-4">
      <div class="col-md-3 mb-5">
        <ul class="list-unstyled link">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Terms &amp; Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
         <li><a href="#">Rooms</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-5">
        <ul class="list-unstyled link">
          <li><a href="#">The Rooms &amp; Suites</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Restaurant</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-5 pr-md-5 contact-info">
        <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
        <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> 198 West 21th Street, <br> Suite 721 New York NY 10016</span></p>
        <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> (+1) 435 3533</span></p>
        <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span> info@domain.com</span></p>
      </div>
      <div class="col-md-3 mb-5">
        <p>Sign up for our newsletter</p>
        <form action="#" class="footer-newsletter">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email...">
            <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
          </div>
        </form>
      </div>
    </div>
    <div class="row pt-5">
      <p class="col-md-6 text-left">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>

      <p class="col-md-6 text-right social">
        <a href="#"><span class="fa fa-tripadvisor"></span></a>
        <a href="#"><span class="fa fa-facebook"></span></a>
        <a href="#"><span class="fa fa-twitter"></span></a>
        <a href="#"><span class="fa fa-linkedin"></span></a>
        <a href="#"><span class="fa fa-vimeo"></span></a>
      </p>
    </div>
  </div>
</footer>
