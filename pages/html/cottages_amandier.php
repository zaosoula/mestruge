<section class="site-hero overlay" style="background-image: url(<?php $__('amandierHeroBackground'); ?>)" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade">
        <h1 class="heading mb-3"><?php $__('amandierHeroTitle'); ?></h1>
        <ul class="custom-breadcrumbs mb-4">
          <li><a href="<?php echo BaseUrl ?>/home"><?php $__('navHome'); ?></a></li>
          <li>&bullet;</li>
          <li><?php $__('navCottages'); ?></li>
          <li>&bullet;</li>
          <li><?php $__('navAmandier'); ?></li>
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
  include(__DIR__.'/../../require/modules/calltoactionHero.php');
?> -->


<section class="section py-5 bg-light" id="next">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
        <img src="<?php $__('amandierSectionWelcomeImageUrl'); ?>" alt="<?php $__('amandierSectionWelcomeImageAlt'); ?>" class="img-fluid rounded">
      </div>
      <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
        <h2 class="heading"><?php $__('amandierSectionWelcomeTitle'); ?></h2>
        <p class="mb-4 text-justify"><?php $__('amandierSectionWelcomeText'); ?></p>
        <p style="white-space: nowrap"><a href="#learnmore" class="smoothscroll btn btn-primary text-white py-2 mr-3"><?php $__('amandierSectionWelcomeButtonPrimary'); ?></a> <span class="mr-3 font-family-serif"><em><?php $__('amandierSectionWelcomeOr'); ?></em></span> <a href="#prices"  class="smoothscroll text-uppercase letter-spacing-1"><?php $__('amandierSectionWelcomeButtonSecondary'); ?></a></p>
      </div>

    </div>
  </div>
</section>


<section class="section">
  <div class="container ">
    <div class="row justify-content-center text-center">
      <div class="col-md-7">
        <h2 class="heading" id="learnmore" data-aos="fade"><?php $__("amandierSectionDetailsSubGroundTitle"); ?></h2>
        <p data-aos="fade" class="text-justify"><?php $__("amandierSectionDetailsSubGroundCaption"); ?></p>
      </div>
    </div>
    <div class="image block-slider major-caousel owl-carousel" data-aos="fade-up">
      <div class="slider-item">
          <img src="<?php $__("amandierSectionDetailsSubGroundPic1Url"); ?>" alt="<?php $__("amandierSectionDetailsSubGroundPic1Alt"); ?>" class="img-fluid rounded">
      </div>
      <div class="slider-item">
          <img src="<?php $__("amandierSectionDetailsSubGroundPic2Url"); ?>" alt="<?php $__("amandierSectionDetailsSubGroundPic2Alt"); ?>" class="img-fluid rounded">
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container ">
    <div class="row justify-content-center text-center pt-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade"><?php $__("amandierSectionDetailsSubFirstFloorTitle"); ?></h2>
        <p data-aos="fade" class="text-justify"><?php $__("amandierSectionDetailsSubFirstFloorCaption"); ?></p>
      </div>
    </div>
    <div class="image block-slider major-caousel owl-carousel" data-aos="fade-up">
      <div class="slider-item">
          <img src="<?php $__("amandierSectionDetailsSubFirstFloorPic1Url"); ?>" alt="<?php $__("amandierSectionDetailsSubFirstFloorPic1Alt"); ?>" class="img-fluid rounded">
      </div>
      <div class="slider-item">
          <img src="<?php $__("amandierSectionDetailsSubFirstFloorPic2Url"); ?>" alt="<?php $__("amandierSectionDetailsSubFirstFloorPic2Alt"); ?>" class="img-fluid rounded">
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container ">
    <div class="row justify-content-center text-center pt-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade"><?php $__("amandierSectionDetailsSubSecondFloorTitle"); ?></h2>
        <p data-aos="fade" class="text-justify"><?php $__("amandierSectionDetailsSubSecondFloorCaption"); ?></p>
      </div>
    </div>
    <div class="image block-slider major-caousel owl-carousel" data-aos="fade-up">
      <div class="slider-item">
          <img src="<?php $__("amandierSectionDetailsSubSecondFloorPic1Url"); ?>" alt="<?php $__("amandierSectionDetailsSubSecondFloorPic1Alt"); ?>" class="img-fluid rounded x0-5 mx-auto mr-lg-0">
      </div>
      <?php if(!$i18n->empty("amandierSectionDetailsSubSecondFloorPic2Url")){ ?>
        <div class="slider-item">
          <img src="<?php $__("amandierSectionDetailsSubSecondFloorPic2Url"); ?>" alt="<?php $__("amandierSectionDetailsSubSecondFloorPic2Alt"); ?>" class="img-fluid rounded  x0-5 mx-auto ml-lg-0">
      </div>
    <?php } ?>
    </div>
  </div>
</section>
<section class="section">
  <div class="container ">
    <div class="row justify-content-center text-center pt-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade"><?php $__("amandierSectionDetailsSubOutdoorTitle"); ?></h2>
        <p data-aos="fade" class="text-justify"><?php $__("amandierSectionDetailsSubOutdoorCaption"); ?></p>
      </div>
    </div>
    <div class="image block-slider major-caousel owl-carousel" data-aos="fade-up">
      <div class="slider-item">
          <img src="<?php $__("amandierSectionDetailsSubOutdoorPic1Url"); ?>" alt="<?php $__("amandierSectionDetailsSubOutdoorPic1Alt"); ?>" class="img-fluid rounded">
      </div>
      <?php if(!$i18n->empty("amandierSectionDetailsSubOutdoorPic2Url")){ ?>
        <div class="slider-item">
          <img src="<?php $__("amandierSectionDetailsSubOutdoorPic2Url"); ?>" alt="<?php $__("amandierSectionDetailsSubOutdoorPic2Alt"); ?>" class="img-fluid rounded">
      </div>
    <?php } ?>
    </div>
  </div>
</section>

<!--<section class="section slider-section">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up"><?php $__('amandierSectionPhotosTitle'); ?></h2>
        <p data-aos="fade-up"><?php $__('amandierSectionPhotosCaption'); ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up">
          <?php
          for ($i=1; $i <= $i18n->get("#amandierSectionPhotosPicCount"); $i++) {
            echo '<div class="slider-item">
              <a href="'.$i18n->get("amandierSectionPhotosPic".$i."Url").'" data-fancybox="images" data-caption="'.$i18n->get("amandierSectionPhotosPic".$i."Alt").'"><img src="'.$i18n->get("amandierSectionPhotosPic".$i."Url").'" alt="'.$i18n->get("amandierSectionPhotosPic".$i."Alt").'" class="img-fluid"></a>
            </div>';
          }
           ?>
        </div>
        <!-- END slider -->
      <!--</div>

    </div>
  </div>
</section>-->
<!-- END section -->

<section class="section bg-light">

  <div class="container">
    <div class="row justify-content-center text-center mb-2">
      <div class="col-md-7">
        <h2 class="heading" id="prices" data-aos="fade"><?php $__('amandierSectionPriceTitle'); ?></h2>
        <p data-aos="fade"><?php $__('amandierSectionPriceCaption'); ?></p>
        <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab">
          <li class="">
            <a class="btn btn-primary active" id="pills-2p-tab" data-toggle="pill" href="#pills-2p" role="tab" aria-controls="pills-2p" aria-selected="true"><?php $__('amandierSectionButton2p'); ?></a>
          </li>
          <li class="">
            <a class="btn btn-primary" id="pills-3p-tab" data-toggle="pill" href="#pills-3p" role="tab" aria-controls="pills-3p" aria-selected="false"><?php $__('amandierSectionButton3p'); ?></a>
          </li>
          <li class="">
            <a class="btn btn-primary" id="pills-5p-tab" data-toggle="pill" href="#pills-5p" role="tab" aria-controls="pills-5p" aria-selected="false"><?php $__('amandierSectionButton5p'); ?></a>
          </li>
          <li class="">
            <a class="btn btn-primary" id="pills-7p-tab" data-toggle="pill" href="#pills-7p" role="tab" aria-controls="pills-7p" aria-selected="false"><?php $__('amandierSectionButton7p'); ?></a>
          </li>
        </ul>


      </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane active" id="pills-2p" role="tabpanel" aria-labelledby="pills-2p-tab">
        <div class="row">
          <div class="col-12 col-lg-4 mb-2">
            <div class="card-price">
              <div class="card-body">
                <?php if($currentPriceSeason()=="low"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
                <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonLowLabel'); ?></span></span>
                <span class="d-block text-center display-4 text-primary"><?php $__('amandierPriceSeasonLow2pPrice'); ?></span>
                <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('amandierPriceSeasonLow2pPricePeriod'); ?></span> </span>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-4 mb-2">
            <div class="card-price">
              <div class="card-body">
                <?php if($currentPriceSeason()=="mid"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
                <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonMidLabel'); ?></span></span>
                <span class="d-block text-center display-4 text-primary"><?php $__('amandierPriceSeasonMid2pPrice'); ?></span>
                <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('amandierPriceSeasonMid2pPricePeriod'); ?></span> </span>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-4 mb-2">
            <div class="card-price">
              <div class="card-body">
                <?php if($currentPriceSeason()=="high"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
                <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonHighLabel'); ?></span></span>
                <span class="d-block text-center display-4 text-primary"><?php $__('amandierPriceSeasonHigh2pPrice'); ?></span>
                <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('amandierPriceSeasonHigh2pPricePeriod'); ?></span> </span>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="tab-pane" id="pills-3p" role="tabpanel" aria-labelledby="pills-3p-tab">
     <div class="row">
       <div class="col-12 col-lg-4 mb-2">
         <div class="card-price">
           <div class="card-body">
             <?php if($currentPriceSeason()=="low"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
             <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonLowLabel'); ?></span></span>
             <span class="d-block text-center display-4 text-primary"><?php $__('amandierPriceSeasonLow3pPrice'); ?></span>
             <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('amandierPriceSeasonLow3pPricePeriod'); ?></span> </span>
           </div>
         </div>
       </div>

       <div class="col-12 col-lg-4 mb-2">
         <div class="card-price">
           <div class="card-body">
             <?php if($currentPriceSeason()=="mid"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
             <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonMidLabel'); ?></span></span>
             <span class="d-block text-center display-4 text-primary"><?php $__('amandierPriceSeasonMid3pPrice'); ?></span>
             <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('amandierPriceSeasonMid3pPricePeriod'); ?></span> </span>
           </div>
         </div>
       </div>

       <div class="col-12 col-lg-4 mb-2">
         <div class="card-price">
           <div class="card-body">
             <?php if($currentPriceSeason()=="high"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
             <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonHighLabel'); ?></span></span>
             <span class="d-block text-center display-4 text-primary"><?php $__('amandierPriceSeasonHigh3pPrice'); ?></span>
             <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('amandierPriceSeasonHigh3pPricePeriod'); ?></span> </span>
           </div>
         </div>
       </div>
      </div>
    </div>
      <div class="tab-pane" id="pills-5p" role="tabpanel" aria-labelledby="pills-5p-tab">
        <div class="row">
          <div class="col-12 col-lg-4 mb-2">
            <div class="card-price">
              <div class="card-body">
                <?php if($currentPriceSeason()=="low"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
                <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonLowLabel'); ?></span></span>
                <span class="d-block text-center display-4 text-primary"><?php $__('amandierPriceSeasonLow5pPrice'); ?></span>
                <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('amandierPriceSeasonLow5pPricePeriod'); ?></span> </span>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-4 mb-2">
            <div class="card-price">
              <div class="card-body">
                <?php if($currentPriceSeason()=="mid"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
                <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonMidLabel'); ?></span></span>
                <span class="d-block text-center display-4 text-primary"><?php $__('amandierPriceSeasonMid5pPrice'); ?></span>
                <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('amandierPriceSeasonMid5pPricePeriod'); ?></span> </span>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-4 mb-2">
            <div class="card-price">
              <div class="card-body">
                <?php if($currentPriceSeason()=="high"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
                <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonHighLabel'); ?></span></span>
                <span class="d-block text-center display-4 text-primary"><?php $__('amandierPriceSeasonHigh5pPrice'); ?></span>
                <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('amandierPriceSeasonHigh5pPricePeriod'); ?></span> </span>
              </div>
            </div>
          </div>
      </div>
    </div>
      <div class="tab-pane" id="pills-7p" role="tabpanel" aria-labelledby="pills-7p-tab">
        <div class="row">
          <div class="col-12 col-lg-4 mb-2">
            <div class="card-price">
              <div class="card-body">
                <?php if($currentPriceSeason()=="low"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
                <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonLowLabel'); ?></span></span>
                <span class="d-block text-center display-4 text-primary"><?php $__('amandierPriceSeasonLow7pPrice'); ?></span>
                <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('amandierPriceSeasonLow7pPricePeriod'); ?></span> </span>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-4 mb-2">
            <div class="card-price">
              <div class="card-body">
                <?php if($currentPriceSeason()=="mid"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
                <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonMidLabel'); ?></span></span>
                <span class="d-block text-center display-4 text-primary"><?php $__('amandierPriceSeasonMid7pPrice'); ?></span>
                <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('amandierPriceSeasonMid7pPricePeriod'); ?></span> </span>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-4 mb-2">
            <div class="card-price">
              <div class="card-body">
                <?php if($currentPriceSeason()=="high"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
                <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonHighLabel'); ?></span></span>
                <span class="d-block text-center display-4 text-primary"><?php $__('amandierPriceSeasonHigh7pPrice'); ?></span>
                <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('amandierPriceSeasonHigh7pPricePeriod'); ?></span> </span>
              </div>
            </div>
          </div>
      </div>
    </div>
    </div>

    <div class="text-muted mt-3 mb-1 text-center"> <?php $__('priceSeasonNotice'); ?></div>
    <div class="row justify-content-center text-center">
      <div class="col-md-7">
        <a href="<?php echo BaseUrl; ?>/contact"><button class="btn btn-primary btn-lg mx-auto text-white"><?php $__("amandierSectionButtonReserve"); ?></button></a>
      </div>
    </div>
  </div>
</section>

<?php
  include(__DIR__.'/../../require/modules/calltoaction.php');
?>
