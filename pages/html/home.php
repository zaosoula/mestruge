<!-- <section class="site-hero overlay" style="background-image: url(https://static1.squarespace.com/static/5790ba85be65943e3718b271/5794abb5f5e231331d1ce4a0/579ddf09ebbd1a85da875542/1469964042318/pool+by+night.JPG?format=2500w)" data-stellar-background-ratio="0.5"> -->
<section class="site-hero overlay" style="background-image: url(<?php $__('homeHeroBackground'); ?>)" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade-up">
        <span class="custom-caption text-uppercase text-white d-block  mb-3"><?php $__("homeHeroCaption"); ?></span>
        <h1 class="heading"><?php $__("homeHeroTitle"); ?></h1>
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

<!-- <?php
  include('./require/modules/calltoactionHero.php');
?> -->

<section class="py-5 bg-light" id="next">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
        <!-- <figure class="img-absolute">
          <img src="<?php $__("homeSectionWelcomeCircledImageUrl"); ?>" alt="<?php $__("homeSectionWelcomeCircledImageAlt"); ?>" class="img-fluid">
        </figure> -->
        <img src="<?php $__("homeSectionWelcomeImageUrl"); ?>" alt="<?php $__("homeSectionWelcomeImageAlt"); ?>" class="img-fluid rounded">
      </div>
      <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
        <h2 class="heading"><?php $__("homeSectionWelcomeTitle"); ?></h2>
        <p class="mb-4 text-justify"><?php $__("homeSectionWelcomeText"); ?></p>
        <p style="white-space: nowrap"><a href="#learnmore" class="smoothscroll btn btn-primary text-white py-2 mr-3"><?php $__("homeSectionWelcomeButtonPrimary"); ?></a> <span class="mr-3 font-family-serif"><em><?php $__('homeSectionWelcomeOr'); ?></em></span> <a href="#next" class="smoothscroll text-uppercase letter-spacing-1 open-menu"><?php $__('homeSectionWelcomeButtonSecondary'); ?></a></p>
      </div>

    </div>
  </div>
</section>

<section class="section" id="learnmore">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-12">
        <h2 class="heading" data-aos="fade-up"><?php $__("homeSectionAreaTitle"); ?></h2>
        <p data-aos="fade-up"><?php $__("homeSectionAreaCaption"); ?></p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-6 col-sm-6 col-12 post" data-aos="fade-up">

        <div class="media media-custom d-block mb-4 h-100">
          <a href="<?php echo BaseUrl; ?>/pool" class="mb-4 d-block">
            <img src="<?php $__("homeSectionAreaColumn1ImageUrl"); ?>" alt="<?php $__("homeSectionAreaColumn1ImageAlt"); ?>" class="img-fluid"></a>
          <div class="media-body">
            <h2 class="mt-0 mb-3 font-weight-bold"><a href="<?php echo BaseUrl; ?>/pool"><?php $__("homeSectionAreaColumn1Title"); ?></a></h2>
            <!-- <p><?php $__("homeSectionAreaColumn1Description"); ?></p> -->

          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 col-12 post" data-aos="fade-up">
        <div class="media media-custom d-block mb-4 h-100">
          <a href="<?php echo BaseUrl; ?>/garden" class="mb-4 d-block">
            <img src="<?php $__("homeSectionAreaColumn2ImageUrl"); ?>" alt="<?php $__("homeSectionAreaColumn2ImageAlt"); ?>" class="img-fluid"></a>
          <div class="media-body">
            <h2 class="mt-0 mb-3 font-weight-bold"><a href="<?php echo BaseUrl; ?>/garden"><?php $__("homeSectionAreaColumn2Title"); ?></a></h2>
            <!-- <p><?php $__("homeSectionAreaColumn2Description"); ?></p> -->

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section  bg-light" id="cottagesList">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up"><?php $__("homeSectionCottagesTitle"); ?></h2>
        <p data-aos="fade-up"><?php $__("homeSectionCottagesCaption"); ?></p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-6 col-sm-6 col-12 post" data-aos="fade-up">

        <div class="media media-custom d-block mb-4 h-100">
          <a href="<?php echo BaseUrl; ?>/cottages/amandier" class="mb-4 d-block">
            <img src="<?php $__("homeSectionCottagesColumn1ImageUrl"); ?>" alt="<?php $__("homeSectionCottagesColumn1ImageAlt"); ?>" class="img-fluid"></a>
          <div class="media-body">
            <!-- <span class="meta-post"><?php $__("homeSectionCottagesColumn1Caption"); ?></span> -->
            <h2 class="mt-0 mb-3 font-weight-bold"><a href="<?php echo BaseUrl; ?>/cottages/amandier"><?php $__("homeSectionCottagesColumn1Title"); ?></a></h2>
            <div class="row">
              <div class="col-6">
                <ul class="list-unstyled">
                  <li><?php $__("homeSectionCottagesColumn1Attribute1"); ?></li>
                  <li><?php $__("homeSectionCottagesColumn1Attribute3"); ?></li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="list-unstyled">
                  <li><?php $__("homeSectionCottagesColumn1Attribute2"); ?></li>
                  <li><?php $__("homeSectionCottagesColumn1Attribute4"); ?></li>
                </ul>
              </div>
            </div>
            <!-- <p><?php $__("homeSectionCottagesColumn1Description"); ?></p> -->

          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 col-12 post" data-aos="fade-up">
        <div class="media media-custom d-block mb-4 h-100">
          <a href="<?php echo BaseUrl; ?>/cottages/mimosa" class="mb-4 d-block">
            <img src="<?php $__("homeSectionCottagesColumn2ImageUrl"); ?>" alt="<?php $__("homeSectionCottagesColumn2ImageAlt"); ?>" class="img-fluid"></a>
          <div class="media-body">
            <!-- <span class="meta-post"><?php $__("homeSectionCottagesColumn2Caption"); ?></span> -->
            <h2 class="mt-0 mb-3 font-weight-bold"><a href="<?php echo BaseUrl; ?>/cottages/mimosa"><?php $__("homeSectionCottagesColumn2Title"); ?></a></h2>
            <div class="row">
              <div class="col-6">
                <ul class="list-unstyled">
                  <li><?php $__("homeSectionCottagesColumn2Attribute1"); ?></li>
                  <li><?php $__("homeSectionCottagesColumn2Attribute3"); ?></li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="list-unstyled">
                  <li><?php $__("homeSectionCottagesColumn2Attribute2"); ?></li>
                  <li><?php $__("homeSectionCottagesColumn2Attribute4"); ?></li>
                </ul>
              </div>
            </div>
            <!-- <p><?php $__("homeSectionCottagesColumn2Description"); ?></p> -->

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  include('./require/modules/calltoaction.php');
?>
