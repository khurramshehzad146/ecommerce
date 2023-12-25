<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
$link = "https";
else
  $link = "http";
 
// Here append the common URL characters.
$link .= "://";
 
$link .= $_SERVER['HTTP_HOST'].'/';
$link .= explode('/', $_SERVER['REQUEST_URI'])[1];

session_start(); 
if($_SESSION['login'] == ''){
  echo "<script> window.location.href='".$link."/sign-in.php';</script>";
}
?>
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free">
  <?php 
   include('header.php');
   include('db_connect.php');
  
  ?>
<head>
 
  <style>
    .bg-menu-theme {
    background-color: #00000011 !important;
    color: #544f5a;
    }
  </style>
</head>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar ">
      <div class="layout-container fa fa-home ">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme d-print-none">
          <div class="app-brand demo" style="border-bottom:2px solid #9055fd">
            <div class="app-brand-text demo menu-text fw-semibold ms-2 mt-3"><h3>INCOME TAX</h3></div>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <?php include('sidebar.php') ?>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

         <?php include('top-navbar.php')?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->