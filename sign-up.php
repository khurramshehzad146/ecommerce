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
                    <a href="" class="info_logo"> <img src="./assets/images/logo.png" class="img-fluid" alt=""></a>
                    <h5 class="brand_title_b fs-24 mb-3 fw-bold">Create Account</h5>
                    <div class="user_form">
                        <form method="post">  
                          <div class="mb-3">
                            <input type="text" class="form-control" name="name" aria-describedby="Name" placeholder="Enter Your Name">
                          </div>
                            <div class="mb-3">
                              <input type="email" class="form-control" name="email" aria-describedby="Email" placeholder="Enter Your Email">
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" name="number" aria-describedby="Number" placeholder="Enter Your Number">
                              </div>
                            <div class="mb-3">
                              <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="mb-2">
                              <input type="password" class="form-control" name="password" placeholder="Re-Enter Password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <small class="form-check-label" for="exampleCheck1">Lorem ipsum dolor sit amet</small>
                              </div>
                            <button type="submit" class="btn btn_brand_red w-100" name='submit'>Submit</button>
                          </form>
                          <h6 class="text-center my-4 brand_title_b">Or</h6>
                          <a href="sign-in.html" class="sign_up_link">Already  have an account? <b>Sign In</b></a>
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
include('db_connect.php');
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    
    $sql = "INSERT INTO `users`(`name`, `email`, `password`, `number`,`role`) VALUES ('$name', '$email','$password','$number','user')";
    $conn->query($sql);
    echo "<script> window.location.href='sign-in.php';</script>";
  }
?>