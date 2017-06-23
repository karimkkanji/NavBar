<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cryosoft Designs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/foundation.css">  
  <script src="js/jquery.min.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/modernizr.js"></script>
  <style>
  .chip {
    display: inline-block;
    padding: 0 25px;
    height: 50px;
    font-size: 16px;
    line-height: 50px;
    border-radius: 25px;
    background-color: #f1f1f1;
}

.chip img {
    float: left;
    margin: 0 10px 0 -25px;
    height: 50px;
    width: 50px;
    border-radius: 50%;
}
  </style>
</head>
<body>
<nav class="top-bar">
  <ul class="title-area">
    <li class="name">
      <!-- Remove this if you don't want a title/logo -->
      <h1><a href="#">Cryosoft Designs</a></h1>
    </li>
      <!-- Collapsible Button on small screens: remove .menu-icon to get rid of icon. 
      Remove the "Menu" text if you only want to show the icon -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <ul class="left">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Reports</a></li>
      <li><a href="#">Accounts</a></li>
      <li><a href="#">Admin</a></li> 
    </ul>
  </section>
</nav>

<!-- Initialize Foundation JS for the collapsible button to work-->
<script>
$(document).ready(function() {
    $(document).foundation();
})
</script>
  <div class="medium-2 columns" style="height: 100%; border-width:1px; box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <ul class="side-nav" >
    <li><div class="chip">
  <img src="android.png" alt="Person" width="96" height="96">
  <?php echo "John Doe";?>
</div></li>
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Friends</a></li>
      <li><a href="#">Notifications</a></li>
      <li><a href="#">Inbox</a></li>
      <li><a href="#">Control Panel</a></li>    
      <li><a href="#">Games</a></li>
      <li><a href="#">My Github</a></li>
      <li><a href="#">My Progress</a></li>
      <li><a href="#">Groups</a></li>      
    </ul>
  </div>
  <div class="medium-10 columns">
  <h1>Know who you are when you want to</h1>
  </div>

</body>
</html>
