<section class="section bg-light pb-0"  >
  <div class="container">

    <div class="row check-availabilty" id="next">
      <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

        <form action="<?php echo BaseUrl; ?>/contact" method="POST">
          <div class="row">
            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
              <label for="checkin_date" class="font-weight-bold text-black"><?php $__("formCheckAvailabilityDate"); ?></label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="fa fa-calendar"></span></div>
                <input type="text" id="checkin_date" name="checkin_date" class="form-control">
              </div>
            </div>
            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
              <label for="checkout_date" class="font-weight-bold text-black"><?php $__("formCheckAvailabilityEmail"); ?></label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="fa fa-mail"></span></div>
                <input type="email" id="email" name="email" class="form-control">
              </div>
            </div>
            <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <label for="persons" class="font-weight-bold text-black"><?php $__("formCheckAvailabilityPersons"); ?></label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select id="persons" name="persons" class="form-control">
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
            <div class="col-md-6 col-lg-3 align-self-end">
              <button class="btn btn-primary btn-block text-white"><?php $__("formCheckAvailabilityButton"); ?></button>
            </div>
          </div>
        </form>
      </div>


    </div>
  </div>
</section>
