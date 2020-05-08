<header class="site-header js-site-header">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="<?php echo BaseUrl;?>"><?php $__("siteName"); ?></a></div>
      <div class="col-6 col-lg-8">

        <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="site-menu-toggle-label" data-aos="fade">Menu</div>

        <!-- <div>
          <div class="dropdown site-menu-toggle-lang" data-aos="fade">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <svg class="icon"><use xlink:href="#<?php echo $i18n->getCurrentLang(); ?>"></use></svg>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <?php
                foreach ($i18n->getAvailableLang() as $lang) {
                  if($lang != $i18n->getCurrentLang()) echo '<a class="dropdown-item site-menu-toggle-lang-item" href="#" data-selected-lang="'.$lang.'"><svg class="icon"><use xlink:href="#'.$lang.'"></use></svg></a>';
                }
              ?>
            </div>
          </div>
        </div> -->
        <div>

          <?php

          switch ($i18n->getCurrentLang()) {
            case 'fr':
              echo '<a class="site-menu-toggle-lang" data-aos="fade" href="#" role="button" data-selected-lang="en"><svg class="icon"><use xlink:href="#en"></use></svg></a>';
              break;
            case 'en':
              echo '<a class="site-menu-toggle-lang" data-aos="fade" href="#" role="button" data-selected-lang="fr"><svg class="icon"><use xlink:href="#fr"></use></svg></a>';
              break;
          }

          ?>
        </div>


        <!-- END menu-toggle -->

        <div class="site-navbar js-site-navbar">
          <nav role="navigation">
            <div class="container">
              <div class="row full-height">
                <div class="col-md-6 mx-auto">
                  <ul class="list-unstyled menu">
                    <li><a href="<?php echo BaseUrl;?>/"><?php $__("navHome"); ?></a></li>
                    <!-- <li><a href="#"><?php $__("navCottages"); ?></a>
                      <ul class="indent-1 list-unstyled  menu">
                        <li><a href="<?php echo BaseUrl;?>/cottages/mimosa"><?php $__("navMimosa"); ?></a></li>
                        <li><a href="<?php echo BaseUrl;?>/cottages/amandier"><?php $__("navAmandier"); ?></a></li>
                      </ul>
                    </li> -->

                    <li><a href="<?php echo BaseUrl;?>/cottages/mimosa"><?php $__("navMimosa"); ?></a></li>
                    <li><a href="<?php echo BaseUrl;?>/cottages/amandier"><?php $__("navAmandier"); ?></a></li>

                    <li><a href="<?php echo BaseUrl;?>/pool"><?php $__("navPool"); ?></a></li>
                    <li><a href="<?php echo BaseUrl;?>/garden"><?php $__("navGarden"); ?></a></li>
                    <li><a href="<?php echo BaseUrl;?>/activities"><?php $__("navActivities"); ?></a></li>
                    <li><a href="<?php echo BaseUrl;?>/reviews"><?php $__("navReviews"); ?></a></li>
                    <li><a href="<?php echo BaseUrl;?>/contact"><?php $__("navContact"); ?></a></li>
                    <li><a href="<?php echo BaseUrl;?>/direction"><?php $__("navDirection"); ?></a></li>
                    <li><a href="<?php echo BaseUrl;?>/ladyofvictories"><?php $__("navLadyOfVictories"); ?></a></li>
                    <!-- <li><a href="about.html">About</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="reservation.html">Reservation</a></li> -->
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- END head -->
