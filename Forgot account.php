<?php 
include('connection.php');
error_reporting(1);
extract($_REQUEST);
if(isset($submit))
{
  $sql=mysqli_query($con,"select * from create_account where email='$email' ");
    if(mysqli_num_rows($sql))
    {
     $res=mysqli_fetch_assoc($sql); 
    $error= "<h3 style='color:blue'>Your Passwrod is :".$res['password']."</h3>"; 
    }
    else
    {
    $error= "<h3 style='color:red'>Invalid  details</h3>"; 
    }  
}
?>  

<?php
include('Menu Bar.php')
?>
<div class="container-fluid"id="primary"> <!-- Primary Id-->
  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <h1 style="margin-top:50px;padding-top:50px;">Forgot Account?</h1><hr>
          <?php echo  @$error; ?>
          <p class="text-center">Please Enter your Email-id or Phone Number to Find Your Account.</p><br><br>
          <form method="post">
        <div class="form-group">
          <input type="Email" name="email" class="form-control" id="#"placeholder="Email Id or Phone Number"required>
        </div><hr>
          <input type="submit" value="submit" name="submit" class="btn btn-primary btn-group-justified"required>
        </form><br><br><br><br>  
        </div>
    </div>
  </div>
</div>

<?php
include('Footer.php')
?>
</body>
</html>
