<ul class="menu-inner py-1 d-print-none">
<?php 
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
$link = "https";
else
  $link = "http";
 
// Here append the common URL characters.
$link .= "://";
 
$link .= $_SERVER['HTTP_HOST'].'/';
$link .= explode('/', $_SERVER['REQUEST_URI'])[1].'/admin';

?>
<ul class="menu-inner py-1 d-print-none" >
  <li class="menu-item">
    <a href="<?php echo $link ?>/dashboard/" class="menu-link">
      <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
      <div data-i18n="">Dashboards</div>
    </a>
  </li>
  <li class="menu-item">
    <a href="<?php echo $link ?>/users/list.php" class="menu-link">
      <i class="menu-icon tf-icons mdi mdi-account-multiple-outline"></i>
      <div data-i18n="">Users</div>
    </a>
  </li>


<ul>