<!doctype html>
<html lang="en">
  <?php
    include('inc/header.php');
  ?>
  <body>
   <section class="section_user_info">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-6">
                <img src="./assets/images/info.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="flex_v_center">
                    <a href="index.php" class="info_logo"> <img src="./assets/images/logo.png" class="img-fluid" alt=""></a>
                    <h5 class="brand_title_b fs-24 mb-3 fw-bold">Create New Password</h5>
                    <p class="mb-3 w-75 mx-auto text-center">Lorem ipsum dolor sit amet consectetur. Ullamcorper nec vitae dictum mauris.</p>
                    <div class="user_form">
                        <form>  
                            <div class="mb-3">
                              <input type="password" class="form-control" id="Password" placeholder="Password">
                            </div>
                            <div class="mb-2">
                              <input type="password" class="form-control" id="Password" placeholder="Re-Enter Password">
                            </div>
                            <button type="submit" class="btn btn_brand_red w-100">Create</button>
                          </form>
                          <h6 class="text-center my-4 brand_title_b">Or</h6>
                          <a href="sign-in.php" class="sign_up_link">Already  have an account? <b>Sign In</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>
    <!-- jQuery link -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <!-- date range  -->
    <script src="./assets/script/jquery.calendrical.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./assets/script/bootstrap.bundle.min.js"></script>
    <!-- Owl Js -->
    <script src="./assets/script/owl.carousel.min.js"></script>
    <!-- Custom Script -->
    <script src="./assets/script/custom.js"></script>
  </body>
</html> 