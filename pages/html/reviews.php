<section class="site-hero overlay" style="background-image: url(<?php $__('reviewsHeroBackground'); ?>)" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade">
        <h1 class="heading mb-3"><?php $__('reviewsHeroTitle'); ?></h1>
        <ul class="custom-breadcrumbs mb-4" itemscope itemtype="https://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="index.html" itemprop="item">
              <span itemprop="name"><?php $__('navHome'); ?></span>
            </a>
            <meta itemprop="position" content="1" />
          </li>
          <li>&bullet;</li>
          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name"><?php $__('navReviews'); ?></span>
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

<section class="section testimonial-section" id="next">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up"><?php $__('reviewsSectionTestimonialTitle'); ?></h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <?php
        for ($i=$i18n->get("#reviewsSectionTestimonialCount"); $i > 0; $i--) {

          $score = $i18n->get("reviewsSectionTestimonialItem".$i."Score");
          $scoremax = $i18n->get("#reviewsSectionTestimonialScoreMax");
          $scoreString = "";
          for ($j=1; $j <= intval($score); $j++) {
            $scoreString = $scoreString.'<i class="fas fa-star"></i>';
          }
          if(floatval($score) - intval($score) > 0){
            $scoreString = $scoreString.'<i class="fas fa-star-half-alt"></i>';
          }
          $missing = $scoremax - intval($score) - ((floatval($score) - intval($score)>0)?1:0);
          for ($j=0; $j < $missing; $j++) {
            $scoreString = $scoreString.'<i class="far fa-star"></i>';
          }

          echo '

          <div class="timeline-item" date-is="'.$i18n->get("reviewsSectionTestimonialItem".$i."Date").'" data-aos="fade" itemprop="review" itemscope itemtype="http://schema.org/Review">
            <h3><span itemprop="author">'.$i18n->get("reviewsSectionTestimonialItem".$i."Author").'</span>
            <span class="text-warning h6" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
            '.$scoreString.'
            	<meta itemprop="ratingValue" content="'.$score.'" />
            	<meta itemprop="bestRating" content="'.$scoremax.'" />
            	<meta itemprop="worstRating" content="0" />
            </span>
            </h3>
            <p itemprop="reviewBody">&ldquo;'.$i18n->get("reviewsSectionTestimonialItem".$i."Text").'&rdquo;</p>

            <meta itemprop="author" content="'.$i18n->get("reviewsSectionTestimonialItem".$i."Author").'" />

          </div>
          ';
        }
         ?>
      </div>
    </div>

  </div>
</section>

<?php
  include(__DIR__.'/../../require/modules/calltoaction.php');
?>
