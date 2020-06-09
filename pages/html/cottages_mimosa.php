<section class="site-hero overlay" style="background-image: url(<?php $__('mimosaHeroBackground'); ?>)" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade">
        <h1 class="heading mb-3"><?php $__('mimosaHeroTitle'); ?></h1>
        <ul class="custom-breadcrumbs mb-4">
          <li><a href="<?php echo BaseUrl ?>/home"><?php $__('navHome'); ?></a></li>
          <li>&bullet;</li>
          <li><?php $__('navCottages'); ?></li>
          <li>&bullet;</li>
          <li><?php $__('navMimosa'); ?></li>
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
        <img src="<?php $__('mimosaSectionWelcomeImageUrl'); ?>" alt="<?php $__('mimosaSectionWelcomeImageAlt'); ?>" class="img-fluid rounded">
      </div>
      <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
        <h2 class="heading"><?php $__('mimosaSectionWelcomeTitle'); ?></h2>
        <p class="mb-4 text-justify"><?php $__('mimosaSectionWelcomeText'); ?></p>
        <p style="white-space: nowrap"><a href="#learnmore" class="btn btn-primary text-white py-2 mr-3 smoothscroll"><?php $__('mimosaSectionWelcomeButtonPrimary'); ?></a> <span class="mr-3 font-family-serif"><em><?php $__('mimosaSectionWelcomeOr'); ?></em></span> <a href="#prices" class="smoothscroll text-uppercase letter-spacing-1"><?php $__('mimosaSectionWelcomeButtonSecondary'); ?></a></p>
      </div>

    </div>
  </div>
</section>

<section class="section">
  <div class="container ">
    <div class="row justify-content-center text-center">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade" id="learnmore"><?php $__("mimosaSectionDetailsSubGroundTitle"); ?></h2>
        <p data-aos="fade" class="text-justify"><?php $__("mimosaSectionDetailsSubGroundCaption"); ?></p>
      </div>
    </div>
    <div class="image block-slider major-caousel owl-carousel" data-aos="fade-up">
      <div class="slider-item">
          <img src="<?php $__("mimosaSectionDetailsSubGroundPic1Url"); ?>" alt="<?php $__("mimosaSectionDetailsSubGroundPic1Alt"); ?>" class="img-fluid rounded">
      </div>
      <div class="slider-item">
          <img src="<?php $__("mimosaSectionDetailsSubGroundPic2Url"); ?>" alt="<?php $__("mimosaSectionDetailsSubGroundPic2Alt"); ?>" class="img-fluid rounded">
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container ">
    <div class="row justify-content-center text-center pt-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade"><?php $__("mimosaSectionDetailsSubFirstFloorTitle"); ?></h2>
        <p data-aos="fade" class="text-justify"><?php $__("mimosaSectionDetailsSubFirstFloorCaption"); ?></p>
      </div>
    </div>
    <div class="image block-slider major-caousel owl-carousel" data-aos="fade-up">
      <div class="slider-item">
          <img src="<?php $__("mimosaSectionDetailsSubFirstFloorPic1Url"); ?>" alt="<?php $__("mimosaSectionDetailsSubFirstFloorPic1Alt"); ?>" class="img-fluid rounded x0-5 mx-auto mr-lg-0">
      </div>
      <div class="slider-item">
          <img src="<?php $__("mimosaSectionDetailsSubFirstFloorPic2Url"); ?>" alt="<?php $__("mimosaSectionDetailsSubFirstFloorPic2Alt"); ?>" class="img-fluid rounded x0-5 mx-auto ml-lg-0">
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container ">
    <div class="row justify-content-center text-center pt-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade"><?php $__("mimosaSectionDetailsSubSecondFloorTitle"); ?></h2>
        <p data-aos="fade" class="text-justify"><?php $__("mimosaSectionDetailsSubSecondFloorCaption"); ?></p>
      </div>
    </div>
    <div class="image block-slider major-caousel owl-carousel" data-aos="fade-up">
      <div class="slider-item">
          <img src="<?php $__("mimosaSectionDetailsSubSecondFloorPic1Url"); ?>" alt="<?php $__("mimosaSectionDetailsSubSecondFloorPic1Alt"); ?>" class="img-fluid rounded">
      </div>
      <?php if(!$i18n->empty("mimosaSectionDetailsSubSecondFloorPic2Url")){ ?>
        <div class="slider-item">
          <img src="<?php $__("mimosaSectionDetailsSubSecondFloorPic2Url"); ?>" alt="<?php $__("mimosaSectionDetailsSubSecondFloorPic2Alt"); ?>" class="img-fluid rounded">
      </div>
    <?php } ?>
    </div>
  </div>
</section>
<section class="section">
  <div class="container ">
    <div class="row justify-content-center text-center pt-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade"><?php $__("mimosaSectionDetailsSubOutdoorTitle"); ?></h2>
        <p data-aos="fade" class="text-justify"><?php $__("mimosaSectionDetailsSubOutdoorCaption"); ?></p>
      </div>
    </div>
    <div class="image block-slider major-caousel owl-carousel" data-aos="fade-up">
      <div class="slider-item">
          <img src="<?php $__("mimosaSectionDetailsSubOutdoorPic1Url"); ?>" alt="<?php $__("mimosaSectionDetailsSubOutdoorPic1Alt"); ?>" class="img-fluid rounded">
      </div>
      <?php if(!$i18n->empty("mimosaSectionDetailsSubOutdoorPic2Url")){ ?>
        <div class="slider-item">
          <img src="<?php $__("mimosaSectionDetailsSubOutdoorPic2Url"); ?>" alt="<?php $__("mimosaSectionDetailsSubOutdoorPic2Alt"); ?>" class="img-fluid rounded">
      </div>
    <?php } ?>
    </div>
  </div>
</section>

<!--<section class="section slider-section">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up"><?php $__('mimosaSectionPhotosTitle'); ?></h2>
        <p data-aos="fade-up"><?php $__('mimosaSectionPhotosCaption'); ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up">
          <?php
          for ($i=1; $i <= $i18n->get("#mimosaSectionPhotosPicCount"); $i++) {
            // echo '<div class="slider-item">
            //   <a href="'.$i18n->get("mimosaSectionPhotosPic".$i."Url").'" data-fancybox="images" data-caption="'.$i18n->get("mimosaSectionPhotosPic".$i."Alt").'"><img src="'.$i18n->get("mimosaSectionPhotosPic".$i."Url").'" alt="'.$i18n->get("mimosaSectionPhotosPic".$i."Alt").'" class="img-fluid"></a>
            // </div>';
            echo '<div class="slider-item">
              <img src="'.$i18n->get("mimosaSectionPhotosPic".$i."Url").'" alt="'.$i18n->get("mimosaSectionPhotosPic".$i."Alt").'" class="img-fluid">
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
        <h2 class="heading" id="prices" data-aos="fade"><?php $__('mimosaSectionPriceTitle'); ?></h2>
        <p data-aos="fade"><?php $__('mimosaSectionPriceCaption'); ?></p>
        <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab">
          <li class="">
            <a class="btn btn-primary active" id="pills-2p-tab" data-toggle="pill" href="#pills-2p" role="tab" aria-controls="pills-2p" aria-selected="true"><?php $__('mimosaSectionButton2p'); ?></a>
          </li>
          <li class="">
            <a class="btn btn-primary" id="pills-3p-tab" data-toggle="pill" href="#pills-3p" role="tab" aria-controls="pills-3p" aria-selected="false"><?php $__('mimosaSectionButton3p'); ?></a>
          </li>
          <li class="">
            <a class="btn btn-primary" id="pills-4p-tab" data-toggle="pill" href="#pills-5p" role="tab" aria-controls="pills-5p" aria-selected="false"><?php $__('mimosaSectionButton5p'); ?></a>
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
                <span class="d-block text-center display-4 text-primary"><?php $__('mimosaPriceSeasonLow2pPrice'); ?></span>
                <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('mimosaPriceSeasonLow2pPricePeriod'); ?></span> </span>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-4 mb-2">
            <div class="card-price">
              <div class="card-body">
                <?php if($currentPriceSeason()=="mid"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
                <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonMidLabel'); ?></span></span>
                <span class="d-block text-center display-4 text-primary"><?php $__('mimosaPriceSeasonMid2pPrice'); ?></span>
                <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('mimosaPriceSeasonMid2pPricePeriod'); ?></span> </span>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-4 mb-2">
            <div class="card-price">
              <div class="card-body">
                <?php if($currentPriceSeason()=="high"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
                <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonHighLabel'); ?></span></span>
                <span class="d-block text-center display-4 text-primary"><?php $__('mimosaPriceSeasonHigh2pPrice'); ?></span>
                <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('mimosaPriceSeasonHigh2pPricePeriod'); ?></span> </span>
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
             <span class="d-block text-center display-4 text-primary"><?php $__('mimosaPriceSeasonLow3pPrice'); ?></span>
             <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('mimosaPriceSeasonLow3pPricePeriod'); ?></span> </span>
           </div>
         </div>
       </div>

       <div class="col-12 col-lg-4 mb-2">
         <div class="card-price">
           <div class="card-body">
             <?php if($currentPriceSeason()=="mid"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
             <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonMidLabel'); ?></span></span>
             <span class="d-block text-center display-4 text-primary"><?php $__('mimosaPriceSeasonMid3pPrice'); ?></span>
             <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('mimosaPriceSeasonMid3pPricePeriod'); ?></span> </span>
           </div>
         </div>
       </div>

       <div class="col-12 col-lg-4 mb-2">
         <div class="card-price">
           <div class="card-body">
             <?php if($currentPriceSeason()=="high"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
             <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonHighLabel'); ?></span></span>
             <span class="d-block text-center display-4 text-primary"><?php $__('mimosaPriceSeasonHigh3pPrice'); ?></span>
             <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('mimosaPriceSeasonHigh3pPricePeriod'); ?></span> </span>
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
                <span class="d-block text-center display-4 text-primary"><?php $__('mimosaPriceSeasonLow5pPrice'); ?></span>
                <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('mimosaPriceSeasonLow5pPricePeriod'); ?></span> </span>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-4 mb-2">
            <div class="card-price">
              <div class="card-body">
                <?php if($currentPriceSeason()=="mid"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
                <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonMidLabel'); ?></span></span>
                <span class="d-block text-center display-4 text-primary"><?php $__('mimosaPriceSeasonMid5pPrice'); ?></span>
                <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('mimosaPriceSeasonMid5pPricePeriod'); ?></span> </span>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-4 mb-2">
            <div class="card-price">
              <div class="card-body">
                <?php if($currentPriceSeason()=="high"){?><span class="d-block mb-2 text-center display-6 span-badge"><span class="badge badge-primary text-white"><?php $__('priceSeasonCurrentLabel'); ?></span></span><?php } ?>
                <span class="d-block mb-2 text-center"><span class="display-4 text-black"><?php $__('priceSeasonHighLabel'); ?></span></span>
                <span class="d-block text-center display-4 text-primary"><?php $__('mimosaPriceSeasonHigh5pPrice'); ?></span>
                <span class="d-block text-center text-uppercase letter-spacing-2"><?php $__('mimosaPriceSeasonHigh5pPricePeriod'); ?></span> </span>
              </div>
            </div>
          </div>
      </div>
    </div>
    </div>
    <div class="text-muted mt-3 mb-1 text-center"> <?php $__('priceSeasonNotice'); ?></div>
    <div class="row justify-content-center text-center">
      <div class="col-md-7">
        <a href="<?php echo BaseUrl; ?>/contact"><button class="btn btn-primary btn-lg mx-auto text-white"><?php $__("mimosaSectionButtonReserve"); ?></button></a>
      </div>
    </div>
  </div>
</section>




<?php
  include('./require/modules/calltoaction.php');
?>
