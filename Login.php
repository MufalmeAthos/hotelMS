<?php 
session_start();
error_reporting(1);
if($_SESSION['create_account_logged_in']!="")
{
header('location:Booking Form.php');
}
error_reporting(1);
require('connection.php');
extract($_REQUEST);
if(isset($login))
{
  if($eid=="" || $pass=="")
  {
  $error= "<h4 style='color:red'>fill all details</h4>";  
  }   
  else
  {
  $sql=mysqli_query($con,"select * from create_account where email='$eid' && password='$pass' ");
    if(mysqli_num_rows($sql))
    {
    $_SESSION['create_account_logged_in']=$eid;  
    header('location:Booking Form.php'); 
    }
    else
    {
    $error= "<h4 style='color:red'>Invalid login details</h4>"; 
    } 
  }
}
?>

<?php
include('Menu Bar.php')
?>
<div class="container-fluid"><!-- Primary Id-->
  <div class="container">
    <div class="row"><br>
      <div class="col-sm-4"></div>
        <div class="col-sm-4 text-center"style="box-shadow:2px 2px 2px;background-color:blue;"><br>

        	<h1 align="center"><b><font style="font-family: 'Libre Baskerville', serif;text-shadow:3px 3px #000;">User Login </font></b></h1>
          <img src="image/clipart/user.png" class="img-circle" alt="Bird" width="200" height="160">
          <?php echo @$error; ?>
          <form method="post"><br>
              <div class="form-group">
                <input type="Email" class="form-control"name="eid"placeholder="Email Id" autocomplete="off"required >
              </div>
            <div class="form-group">
                <input type="Password" class="form-control"name="pass"placeholder="Password" autocomplete="off"required>
            </div>
          <input type="submit" value="Login" name="login" class="btn btn-primary btn-group btn-group-justified"required>
          <div class="form-group forget">
                <a href="Forgot account.php">Forget Account</a>&nbsp; <b>|</b>&nbsp; 
                <a href="Registation form.php">Create an Account</a>
            </div>
      	</form><br>
        </div>
    </div><br>
  </div>
</div>
<?php
include('Footer.php')
?>
</body>
</html>
