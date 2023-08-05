<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>Maha e Sea Kendra</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/cssFile.css">
<script src="js/js.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <style>
.sidebar {
  /* width: 200px; */
  height: 80vh;
  background-color: #333;
  color: #fff;
  padding: 20px;
}

.sidebar a {
  display: block;
  color: #fff;
  text-decoration: none;
  padding: 10px 0;
}

.sub-menu {
  display: none;
  list-style: none;
  padding-left: 15px;
}

.sidebar li:hover .sub-menu {
  display: block;
}

.sidebar li:hover .sub-menu li {
  margin-bottom: 5px;
}

.sidebar li:hover .sub-menu li:last-child {
  margin-bottom: 0;
}

.sidebar li:hover .sub-menu a {
  display: block;
  padding: 5px 0;
  color: #666;
}

.sidebar li:hover .sub-menu a:hover {
  color: #333;
  background-color: #e9ecef;
}

/* .content {
  margin-left: 220px;
  padding: 20px;
} */

</style>

</head>
<body>
<nav class="navbar navbar-light bg-dark">
<h1 class="text-warning"><b> MAHA-E-SEVA-KENDRA</b></h1>
<a href="logout.php" class="btn btn-primary">Log Out</a>
</nav>
<div class="sidebar col-2 col-sm-2 col-xl-2 col-xxl-2 col-md-2">
  <div class=" col-12 p-0">
  <h3 class="text-warning"><b>Welcome</b> <?php echo $_SESSION['firstname']; ?></h3>
  <hr>
  </div>
    <ul class="list-unstyled">
    <?php
      if($_SESSION['usertype']== 1){
        ?>
    <li>
        <a href="#">Admin</a>
        <ul class="sub-menu">
          <li><a href="userRequest.php">User Requests</a></li>
        </ul>
      </li>
      <?php } ?>
      <li>
        <a href="#">Users</a>
        <ul class="sub-menu">
          <li><a href="documentStatus.php">History</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Orders</a>
      </li>
      <li>
        <a href="#">Documents</a>
        <ul class="sub-menu">
          <li><a href="#">Income Certificate</a></li>
          <li><a href="birthCertificate.php">Birth Certificate</a></li>
          <li><a href="#">Domicial Certificate</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Settings</a>
        <ul class="sub-menu">
          <li><a href="logout.php">Log Out</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="content col-10 col-sm-10 col-xl-12 col-xxl-10 col-md-10">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
