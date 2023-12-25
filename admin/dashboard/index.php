<?php include('../inc2/top-file.php'); 

if($_SESSION['login'] == ''){
    echo "<script> window.location.href='".$link."/sign-in.php';</script>";
}
?>
Dashboard
<?php include('../inc2/bottom-file.php'); ?>
