<section class="site-hero overlay" style="background-image: url(<?php $__('contactHeroBackground'); ?>)" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade">
        <h1 class="heading mb-3"><?php $__('contactHeroTitle'); ?></h1>
        <ul class="custom-breadcrumbs mb-4" itemscope itemtype="https://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="index.html" itemprop="item">
              <span itemprop="name"><?php $__('navHome'); ?></span>
            </a>
            <meta itemprop="position" content="1" />
          </li>
          <li>&bullet;</li>
          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name"><?php $__('navContact'); ?></span>
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

<section class="section contact-section pt-5" id="next">
  <div class="container">
    <div class="row">
      <div class="col-md-7" data-aos="fade-up">

        <?php if(isset($sGET["status"]) && $sGET["status"]=="success"){
          echo '<div class="alert alert-success" role="alert">'.$i18n->get('contactSuccessLabel').'</div>';
        }
        ?>

        <form action="<?php echo BaseUrl; ?>/request/sendMail.php" id="contactForm" method="post" class="bg-white p-md-3 p-2 mb-5 border" style="border-radius: 5px">
          <div class="row">
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="name"><?php $__("contactFormNameLabel"); ?></label>
              <input type="text" id="name" name="name" placeholder="<?php $__("contactFormNamePlaceholder"); ?>" class="form-control" required>
            </div>
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="name"><?php $__("contactFormSurnameLabel"); ?></label>
              <input type="text" id="surname" name="surname" placeholder="<?php $__("contactFormSurnamePlaceholder"); ?>" class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="email"><?php $__("contactFormEmailLabel"); ?></label>
              <input type="email" id="email" name="email" placeholder="<?php $__("contactFormEmailPlaceholder"); ?>" value="<?php echo (!empty($sPOST["email"]))?$sPOST["email"]:null; ?>" class="form-control " required>
            </div>
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="phone"><?php $__("contactFormPhoneLabel"); ?></label>
              <input type="text" id="phone" name="phone" placeholder="<?php $__("contactFormPhonePlaceholder"); ?>" class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="checkin_date"><?php $__("contactFormCheckinLabel"); ?></label>
              <input type="text" id="checkin_date" name="checkin_date" placeholder="<?php $__("contactFormCheckinPlaceholder"); ?>" value="<?php echo (!empty($sPOST["checkin_date"]))?$sPOST["checkin_date"]:null; ?>" class="form-control" required>
            </div>
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="checkout_date"><?php $__("contactFormCheckoutLabel"); ?></label>
              <input type="text" id="checkout_date" name="checkout_date" placeholder="<?php $__("contactFormCheckoutPlaceholder"); ?>"class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 form-group">
              <label for="adults" class="font-weight-bold text-black"><?php $__("contactFormAdultsLabel"); ?></label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="adults" id="adults" class="form-control">
                  <option value="1" <?php echo (!empty($sPOST["persons"]) && $sPOST["persons"]=="1")?"selected":null; ?>>1</option>
                  <option value="2" <?php echo (!empty($sPOST["persons"]) && $sPOST["persons"]=="2")?"selected":null; ?>>2</option>
                  <option value="3" <?php echo (!empty($sPOST["persons"]) && $sPOST["persons"]=="3")?"selected":null; ?>>3</option>
                  <option value="4" <?php echo (!empty($sPOST["persons"]) && $sPOST["persons"]=="4")?"selected":null; ?>>4</option>
                  <option value="5" <?php echo (!empty($sPOST["persons"]) && $sPOST["persons"]=="5")?"selected":null; ?>>5</option>
                  <option value="6" <?php echo (!empty($sPOST["persons"]) && $sPOST["persons"]=="6")?"selected":null; ?>>6</option>
                  <option value="7" <?php echo (!empty($sPOST["persons"]) && $sPOST["persons"]=="7")?"selected":null; ?>>7</option>
                  <option value="8" <?php echo (!empty($sPOST["persons"]) && $sPOST["persons"]=="8")?"selected":null; ?>>8</option>
                  <option value="9" <?php echo (!empty($sPOST["persons"]) && $sPOST["persons"]=="9")?"selected":null; ?>>9</option>
                  <option value="10+" <?php echo (!empty($sPOST["persons"]) && $sPOST["persons"]=="10+")?"selected":null; ?>>10+</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 form-group">
              <label for="children" class="font-weight-bold text-black"><?php $__("contactFormChildrenLabel"); ?></label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="children" id="children" class="form-control">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10+">10+</option>
                </select>
              </div>
            </div>
          </div>



          <div class="row mb-4">
            <div class="col-md-12 form-group">
              <label class="text-black font-weight-bold" for="message"><?php $__("contactFormNotesLabel"); ?></label>
              <textarea required name="message" id="message" name="message" placeholder="<?php $__("contactFormNotesPlaceholder"); ?>" class="form-control" style="padding-bottom:1.2em;" rows="2"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
              <button type="submit" class="btn btn-primary text-white py-3 px-5 font-weight-bold"><?php $__("contactFormSubmit"); ?></button>
            </div>
          </div>

        </form>

      </div>
      <div class="col-md-5" data-aos="fade-up">
        <div class="row">
          <div class="col-md-10 ml-auto contact-info">
            <p><span class="d-block"><?php $__("contactAddressLabel"); ?></span> <span class="text-black"> <?php $__("contactAddress"); ?></span></p>
            <p><span class="d-block"><?php $__("contactPhoneLabel"); ?></span> <span class="text-black"> <?php $__("contactPhone"); ?></span></p>
            <p><span class="d-block"><?php $__("contactEmailLabel"); ?></span> <span class="text-black"> <?php $__("contactEmail"); ?></span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  include('./require/modules/calltoaction.php');
?>
