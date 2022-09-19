<?php 
session_start();
$eid=$_SESSION['create_account_logged_in'];
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head><!--Head Open  Here-->
  <title>Online Hotel.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link href="../css/style.css"rel="stylesheet"/>
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
</head> <!--Head Open  Here-->
<body style="margin-top:50px;">



<!--Menu Bar Close Here-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

    <p style="margin-top:15px;margin-right:20px;color:white;">Furaha and Masabo Hotel.Com</p>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../index.php"title="Home">Home</a></li>
        <li><a href="../about.php"title="About">About </a></li>
		    <li><a href="../image gallery.php"title="Gallery">Gallery </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="admin/index.php"title="Admin Login"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Login</a></li>

        <?php 
      if($_SESSION['create_account_logged_in']!="")
      {
        ?>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View Status <span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<li><a href="profile.php">Profile</a></li>
              <li><a href="order.php">Booking Status</a></li>
              <li><a href="logout.php">Logout</a></li>
        	</ul>
        </li>
        <?PHP } else
		{ 
		?>
		<li><a href="Login.php"title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
        </li>
		<?php 
		} ?>
      </ul>
    </div>
  </div>
</nav>   

<!--Menu Bar Close Here-->
