<?php
  $total = 0;
  $reviewCount = $i18n->get("#reviewsSectionTestimonialCount");
  for ($i=$reviewCount; $i > 0; $i--) {
    $score = $i18n->get("reviewsSectionTestimonialItem".$i."Score");
    $total += $score;
  }
  $averageRating = $total / $reviewCount;
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BedAndBreakfast",
  "name": "Domaine de Mestrugue",
  "image": "https://www.domaine-de-mestrugue.fr/assets/images/photos/exterieur/5.JPG",
  "@id": "https://www.domaine-de-mestrugue.fr",
  "url": "https://www.domaine-de-mestrugue.fr",
  "email": "contact@domaine-de-mestrugue.fr",
  "telephone": "+33685931485",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Domaine de Mestrugue",
    "addressLocality": "Montréal",
    "postalCode": "11290",
    "addressCountry": "FR"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 43.160767,
    "longitude": 2.15339
  } ,
  "sameAs": "https://www.facebook.com/Domaine-de-Mestrugue-645495012592650/",
  "petsAllowed": false,
  "priceRange": "$$$",
  "aggregateRating": {
    "@type": "AggregateRating",
    "bestRating": "<?php $__('#reviewsSectionTestimonialScoreMax'); ?>",
    "worstRating": "0",
    "ratingValue" : "<?php echo $averageRating ?>",
    "ratingCount": "<?php echo $reviewCount ?>",
    "reviewCount": "<?php echo $reviewCount ?>"
  },
  "reviews": [
    <?php
      for ($i=$reviewCount; $i > 0; $i--) {

        $score = $i18n->get("reviewsSectionTestimonialItem".$i."Score");
        echo '{
            "@type": "Review",
            "author": "'.$i18n->get("reviewsSectionTestimonialItem".$i."Author").'",
            "reviewBody": "'.$i18n->get("reviewsSectionTestimonialItem".$i."Text").'",
            "reviewRating": {
              "@type": "Rating",
              "bestRating": "'.$i18n->get("#reviewsSectionTestimonialScoreMax").'",
              "ratingValue": "'.$i18n->get("reviewsSectionTestimonialItem".$i."Score").'",
              "worstRating": "0"
            }
          }';
          if($i>1) echo ',';
      }
    ?>
  ]
}
</script>

<meta property="og:title" content="Domaine De Mestrugue">
<meta property="og:url" content="https://www.domaine-de-mestrugue.fr">
<meta property="og:description" content="<?php echo $i18n->get("metaDescription");?>">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.domaine-de-mestrugue.fr/assets/images/photos/exterieur/5.JPG">


<meta name="twitter:card" content="summary_large_image"></meta>
<meta name="twitter:title" content="Domaine De Mestrugue"></meta>
<meta name="twitter:description" content="<?php echo $i18n->get("metaDescription");?>"></meta>
<meta name="twitter:image" content="https://www.domaine-de-mestrugue.fr/assets/images/photos/exterieur/5.JPG"></meta>
