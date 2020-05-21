<section class="site-hero inner-page overlay" style="background-image: url(<?php $__('gardenHeroBackground'); ?>)" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade">
        <h1 class="heading mb-3"><?php $__('gardenHeroTitle'); ?></h1>
        <ul class="custom-breadcrumbs mb-4">
          <li><a href="<?php echo BaseUrl ?>/home"><?php $__('navHome'); ?></a></li>
          <li>&bullet;</li>
          <li><?php $__('navGarden'); ?></li>
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

<!-- <?php
  include('./require/modules/calltoactionHero.php');
?> -->

<section class="section py-5 bg-light" id="next">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
        <img src="<?php $__('gardenSectionWelcomeImageUrl'); ?>" alt="<?php $__('gardenSectionWelcomeImageAlt'); ?>" class="img-fluid rounded">
      </div>
      <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
        <h2 class="heading"><?php $__('gardenSectionWelcomeTitle'); ?></h2>
        <p class="mb-4 text-justify"><?php $__('gardenSectionWelcomeText'); ?></p>
        <p style="white-space: nowrap"><a href="#learnmore" class="btn btn-primary text-white py-2 mr-3 smoothscroll"><?php $__('gardenSectionWelcomeButtonPrimary'); ?></a></p>
      </div>

    </div>
  </div>
</section>

<section class="section slider-section" id="learnmore">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up"><?php $__('gardenSectionPhotosTitle'); ?></h2>
        <p data-aos="fade-up"><?php $__('gardenSectionPhotosCaption'); ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="photo-slider mb-5" data-aos="fade-up">
          <?php
          for ($i=1; $i <= $i18n->get("#gardenSectionPhotosPicCount"); $i++) {
            echo '<div class="sslider-item">
              <img src="'.$i18n->get("gardenSectionPhotosPic".$i."Url").'" alt="'.$i18n->get("gardenSectionPhotosPic".$i."Alt").'" class="img-fluid">
            </div>';
          }
           ?>
        </div>
        <!-- END slider -->
      </div>

    </div>
  </div>
</section>
<!-- END section -->

<?php
  include('./require/modules/calltoaction.php');
?>
