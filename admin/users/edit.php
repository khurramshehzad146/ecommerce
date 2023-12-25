<?php include('../inc2/top-file.php');?>
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row gy-4">
        <div class="col-sm-12">
        <div class="card  mx-2">
            <div class="card-header" >
                <h4>Edit Settings</h4>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                <div class="row" style="margin-top:-28px">
                    <div class="col">
                    <?php
                    $id = $_GET['id'];
                    $q1 = "select * from `users` where id='$id'";
                    $data1 = $conn->query($q1);
                    $row = $data1->fetch_assoc()
                    ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $row['name'];?>">

                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                            <input type="hidden" name="old_image" value="<?php echo $row['image'];?>">

                            <label for="">Email</label>
                            <input type="text" name="email" value="<?php echo $row['email'];?>" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="">Password</label>
                            <input type="text" name="password" value="<?php echo $row['password'];?>" class="form-control">

                            <label for="">Number</label>
                            <input type="text" name="number" value="<?php echo $row['number'];?>" class="form-control">

                            <label for="">Role</label>
                            <input type="text" name="role" value="<?php echo $row['role'];?>" class="form-control">
                        </div>
                     </div>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-primary mt-3">Save</button>
                </form>
            </div>
        </div>  
        </div>
    </div>
</div>
<?php include('../inc2/bottom-file.php'); ?>
<?php
if(isset($_POST['submit'])){
    $filename="";
    if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] !=""){
        $filename = $_FILES["image"]["name"];
        $tmp_name = $_FILES["image"]["tmp_name"];
        $folder = "../upload_image/".$filename;
        move_uploaded_file($tmp_name,$folder);
    }else{
        $filename = $_POST['old_image'];
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $role = $_POST['role'];
    
    $sql = "UPDATE `users` SET `name`='$name',`image`='$filename',`email`='$email',`password`='$password',`number`='$number',`role`='$role' WHERE id='$id'";
    $conn->query($sql);
    echo "<script> window.location.href='list.php';</script>";

}
?>