<?php 
session_start();
error_reporting(1);
require('../connection.php');
extract($_REQUEST);
if(isset($login))
{
	if($eid=="" || $pass=="")
	{
	$error= "<h3 style='color:red'>fill all details</h3>";	
	}		
	else
	{
	$sql=mysqli_query($con,"select * from admin where username='$eid' && password='$pass' ");
		if(mysqli_num_rows($sql))
		{
		$_SESSION['admin_logged_in']=$eid;	
		header('location:dashboard.php');	
		}
		else
		{
		$error= "<h3 style='color:red'>Invalid login details</h3>";	
		}	
	}
}
?>
<?php
include('Menu Bar.php');
	?>
<div class="container-fluid"> <!-- Primary Id-->
  <div class="container">
    <div class="row"><br>
      <div class="col-sm-4"></div>
		<div class="col-sm-4 text-center"style="box-shadow:2px 2px 2px;background-color:#c5c5c5;">
			
			<h1 class="text-primary"><b>Admin Login </b></h1>

          <img src="../image/clipart/user.png"alt="Bird" width="200" height="170"style="padding-top:30px;">

			<?php echo @$error;?>
          <form action="#" method="post"><br>
              <div class="form-group">
                <input type="Email" class="form-control"name="eid" placeholder="Email Id"required>
              </div>
            <div class="form-group">
                <input type="Password" class="form-control"name="pass" placeholder="Password"required>
            </div>
          <input type="submit" value="Login" name="login" class="btn btn-primary btn-group btn-group-justified"required>
      	</form><br>  
        </div>
    </div><br>
  </div>
</div>
<?php
include('Footer.php');
?>
</body>
</html>
