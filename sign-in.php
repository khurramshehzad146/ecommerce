<!doctype html>
<html lang="en">
    <?php
    session_start();
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
              <?php $_SESSION['danger'] ?>
              <div class="flex_v_center">
                <a href="index.php" class="info_logo"> <img src="./assets/images/logo.png" class="img-fluid" alt=""></a>
                <h5 class="brand_title_b fs-24 mb-3 fw-bold">Login</h5>
                <p class="mb-3 w-75 mx-auto text-center">Lorem ipsum dolor sit amet consectetur. Ullamcorper nec vitae dictum mauris.</p>
                <div class="user_form">
                  <form method="POST">
                            <div class="mb-3">
                              <input type="email" name="email" class="form-control" id="Email" aria-describedby="Email" placeholder="Enter Your Email">
                            </div>
                            <div class="mb-1">
                              <input type="password" name="password" class="form-control">
                            </div>
                            <div class="text-end mb-3">
                               <a href="forget-password.php" class="brand_title_b fs-7 text-decoration-none">Forget Password</a>
                            </div>
                            <button type="submit" class="btn btn_brand_red w-100" name="submit">Submit</button>
                          </form>
                          <h6 class="text-center my-4 brand_title_b">Or</h6>
                          <a href="sign-up.php" class="sign_up_link">Don’t  have an account? <b>Sign Up</b></a>
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
<?php
include("db_connect.php");
     $_SESSION['login'] = '';
     $_SESSION['name'] = '';
     $_SESSION['email'] = '';
if(isset($_POST['submit']))
{
   $email= $_POST['email'];
   $pass= $_POST['password'];

   $q = "select * from users where email='$email' and password='$pass'";
   $data = $conn->query($q);
   $row = $data->fetch_assoc();

 if(isset($row) && $row >0){
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['login'] = "success";
    echo "<script> window.location.href='admin/dashboard';</script>";
  }else{
     $_SESSION['danger'] = "danger";
    // echo "<script> window.location.href='sign-in.php';</script>";
   }
}