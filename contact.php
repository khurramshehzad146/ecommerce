<!doctype html>
<html lang="en">
  <body>
    <?php
      include('inc/navbar.php');
    ?>
    <section class="section_component mb-5">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-4">
                    <div class="component_box">
                        <h1 class="text-white">Our <i class="clr_brand"> Contact</i></h1>
                    <ul class="bread_crum">
                        <li><a href="#">Home</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                     </div>
                </div>
            </div>
        </div>
    </section>
   <secrion class="section secrion_conatct_form">
    <div class="container-xl">
      <h1 class="fw-bold">Get in touch</h1>
      <p class="mb-md-0 mb-2">Get started with a free tax estimate on your income tax</p>
      <div class="row pt-md-5">
        <div class="col-md-8">
             <div class="contact_form_main">
              <form>
                <div class="row g-3">
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="your-name" name="your-name" placeholder="Name" required>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="your-surname" name="your-surname" placeholder="Last Name" required>
                  </div>
                  <div class="col-md-6">
                    <input type="email" class="form-control" id="your-email" name="your-email" placeholder="Email" required>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="your-subject" name="your-subject" placeholder="Subjact">
                  </div>
                  <div class="col-12">
                    <textarea class="form-control" id="your-message" name="your-message" rows="7" required placeholder="Message"></textarea>
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <div class="col-md-12">
                        <button data-res="<?php echo $sum; ?>" type="submit" class="btn w-100 fw-bold btn_brand_red" >Send</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
             </div>  
        </div>
        <div class="col-md-4">
            <div class="contact_box top-0">
              <div class="icon_list_item">
                  <a href="locations.php" class="icon_list_item_check"><span><i class="fas fa-map-marker-alt"></i></span><h5 class="fw-normal mb-2">Location</h5></a>
                  <p class="fs-14 fw-normal">
                    Lorem Ipsum is dolar sit Morbi dapibus morbi diam maecenas 
                  </p>
                  <p>121, USA</p>
              </div>  
          </div>
          <div class="contact_box top-0">
            <div class="icon_list_item">
                <a href="location.php" class="icon_list_item_check"><span><i class="fas fa-envelope"></i></span><h5 class="fw-normal mb-2">Email</h5></a>
                <p class="fs-14 fw-normal">
                  eagletaxpros.com
                </p>
            </div>  
        </div>
        <div class="contact_box top-0">
          <div class="icon_list_item">
              <a href="location.php" class="icon_list_item_check"><span><i class="fas fa-phone-alt"></i></span><h5 class="fw-normal mb-2">Call Anytime</h5></a>
              <p class="fs-14 fw-normal">
                760-684-8289
              </p>
          </div>  
      </div>
      <div class="contact_box top-0">
        <div class="icon_list_item">
            <a href="location.php" class="icon_list_item_check"><span><i class="fas fa-clock"></i></span><h5 class="fw-normal mb-2">Business Hour</h5></a>
            <p class="fs-14 fw-normal">Monday - Friday: 09am - 06pm</p>
            <p class="fs-14 fw-normal">Saturday: 09am to 03pm</p>
            <p class="fs-14 fw-normal">Sunday: Closed</p>
        </div>  
    </div>
        </div>
      </div>
    </div>
   </secrion>
    <section class="contact_map mt-5">
      <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-12">
              <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=calofornia%20Riverside%20&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 100%; height: 410px;"></iframe><style>.mapouter{position:relative;height:410px;width:100%;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:410px;width:100%}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
            </div>
        </div>
    </div>
    </section>

    <?php
      include('inc/footer.php');
    ?>

</body>
</html>