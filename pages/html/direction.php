<section class="site-hero inner-page overlay" style="background-image: url(<?php $__('directionHeroBackground'); ?>)" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade">
        <h1 class="heading mb-3"><?php $__('directionHeroTitle'); ?></h1>
        <ul class="custom-breadcrumbs mb-4" itemscope itemtype="https://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="index.html" itemprop="item">
              <span itemprop="name"><?php $__('navHome'); ?></span>
            </a>
            <meta itemprop="position" content="1" />
          </li>
          <li>&bullet;</li>
          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name"><?php $__('navDirection'); ?></span>
            <meta itemprop="position" content="2" />
          </li>
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

<section class="section contact-section" id="next">
  <div class="container">
    <div class="row">
      <div class="col-md-7" data-aos="fade-up">
        <p class="text-muted text-small"><?php $__("directionItineraryNotice"); ?></p>

        <div id="directionMap" class="embed-responsive embed-responsive-1by1" style="max-height: calc(100vh - 100px)">

        </div>


        <div class="contact-info mt-5">
          <p class="pb-0 mb-0"><span class="d-block"><?php $__("directionItineraryTitle"); ?></span></p>
          <ul class="text-black text-left">
            <?php $__("directionItinerarySteps"); ?>
          </ul>
        </div>
      </div>
      <div class="col-md-5" data-aos="fade-up">
        <div class="row">
          <div class="col-md-10 ml-auto contact-info">
            <p><span class="d-block"><?php $__("directionAddressLabel"); ?></span> <span class="text-black"> <?php $__("directionAddress"); ?></span></p>
            <p><span class="d-block"><?php $__("directionPhoneLabel"); ?></span> <span class="text-black"> <?php $__("directionPhone"); ?></span></p>
            <p><span class="d-block"><?php $__("directionEmailLabel"); ?></span> <span class="text-black"> <?php $__("directionEmail"); ?></span></p>
            <hr>
            <p><span class="d-block"><?php $__("directionCoordsLabel"); ?></span> <span class="text-black text-left"><?php $__("directionCoords"); ?></span></p>
            <hr>
            <p><span class="d-block"><?php $__("directionByCarLabel"); ?></span> <span class="d-block"><?php $__("directionByCarFrom1Label"); ?></span> <span class="text-black text-left"><?php $__("directionByCarFrom1"); ?></span></p>
            <p><span class="d-block"><?php $__("directionByCarFrom2Label"); ?></span> <span class="text-black text-left"><?php $__("directionByCarFrom2"); ?></span>
            </p>
            <hr>
            <p><span class="d-block"><?php $__("directionByPlaneLabel"); ?></span> <span class="text-black text-left"><?php $__("directionByPlane"); ?></span></p>
            <p><span class="d-block"><?php $__("directionByPlaneFrom1Label"); ?></span> <span class="text-black text-left"><?php $__("directionByPlaneFrom1"); ?></span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  include('./require/modules/calltoaction.php');
?>
