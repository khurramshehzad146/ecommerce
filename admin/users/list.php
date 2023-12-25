<?php include('../inc2/top-file.php'); ?>
<div class="container">
<div class="row">
    <div class="col-sm-12">
                <div class="row mt-2 pt-3 ">
                    <div class="col-sm-10 h3">
                        Users
                    </div>
                    <div class="col-sm-2">
                            <div style="float: inline-end;">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                <i class="mdi mdi-plus"></i> Users
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="modalCenterTitle">Add Users</h4>
                                            <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="col mb-2">
                                                            <div class="form-floating form-floating-outline">
                                                                <input type="text" id="" name="name" class="form-control" placeholder="Enter Name" />
                                                                <label for="">Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col mb-2">
                                                            <div class="form-floating form-floating-outline">
                                                                <input type="email" id="" name="email" class="form-control" placeholder="xxxx@xxx.xx" />
                                                                <label for="">Email</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="col mb-2">
                                                            <div class="form-floating form-floating-outline">
                                                                <input type="file" id="" name="image" class="form-control" placeholder="Enter Image" />
                                                                <label for="">Image</label>
                                                            </div>
                                                        </div>
                                                        <div class="col mb-2">
                                                            <div class="form-floating form-floating-outline">
                                                            <input type="text" name="password" id="" class="form-control" placeholder="Enter Password">
                                                            <label for="">Password</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col mb-2">
                                                        <div class="form-floating form-floating-outline">
                                                            <input type="text" id="" name="number" class="form-control" placeholder="Enter Number" />
                                                            <label for="">Number</label>
                                                        </div>
                                                    </div>
                                                    <div class="col mb-2">
                                                        <div class="form-floating form-floating-outline">
                                                            <input type="text" id="" name="role" class="form-control" placeholder="Enter Role" />
                                                            <label for="">Role</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                                <button type="submit" name="submit" class="btn btn-info mt-2" data-bs-dismiss="modal">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      </div>
                    </div>
                </div>
                <table class="table table-bordered table-hover">
                    <thead class="bg-warning">
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th width="16%" >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('../inc2/db_connect.php');
                        $count=0;
                        $qry = $conn->query("SELECT * FROM users");
                        foreach($qry as $row){
                        ?>
                        <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><img src="../upload_image/<?php echo $row['image'] ?>" class="img-fluid" style="width:40px" srcset=""></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['password'] ?></td>
                            <td><?php echo $row['role'] ?></td>
                            <td><?php echo $row['created_at'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                            <td class="text-center">
                                <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-warning btn-sm"><i class="mdi mdi-pencil-outline"></i></a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm"><i class="mdi mdi-delete-outline"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
    </div>
</div>
</div>
<?php include('../inc2/bottom-file.php'); ?>
<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $role = $_POST['role'];

    $filename = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $folder = "../upload_image/".$filename;
  
    move_uploaded_file($tmp_name,$folder);
    
    $sql = "INSERT INTO `users`(`name`, `image`, `email`, `password`, `number`, `role`) VALUES ('$name','$filename','$email','$password','$number','$role')";
    
    $conn->query($sql);
    echo "<script> window.location.href='list.php';</script>";
  }
?>