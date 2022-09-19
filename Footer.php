<?php 
include('connection.php');
extract($_REQUEST);
if(isset($send))
{
mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')");	
$msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<!-- Footer1 Start Here-->

<footer style="background-color: #393939;">
    <div class="container-fluid row">
        <div class="col-sm-4 hov icons_bar">
          <p class="text-justify" ><p style="color:white;">Furaha and Masabo Hotel.Com</p><br>
            <center><a href="about.php" class="btn btn-primary"><b>Read More..</b></a></center><br><br><br>

            <!-- Add font awesome icons -->
            <a href="https://www.facebook.com/" class="fa fa-facebook"target="blank"title="facebook"></a>
            <a href="https://twitter.com/"class="fa fa-twitter"target="blank"title="twitter"></a>
            <a href="https://linkedin.com/" class="fa fa-linkedin"target="blank"title="linkedin"></a>
            <a href="https://youtube.com/" class="fa fa-youtube"target="blank"title="youtube"></a>
            <a href="https://instagram.com/" class="fa fa-instagram"target="blank"title="instagram"></a>     
        </div>
        <div class="col-sm-4 text-justify">
            <h3 style="" class="text-primary">Contact Us</h3>
            <p style="color:white;"><strong>Address:&nbsp;</strong>Gisozi Ulk Computer Science</p>
            <p style="color:white;"><strong>Email-Id:&nbsp;</strong>furaha@gmail.com</p>
            <p style="color:white;"><strong>Contact Us:&nbsp;</strong>0780465854</p>
        </div>
          <!--Feedback Start Here-->
        <div class="col-sm-4 text-left">
          <div class="panel panel-primary">
            <div class="panel-heading">Feedback</div>
              <div class="panel-body">
                <?php echo @$msg; ?>
                  <div class="feedback">
                    <form method="post"><br>
                        <div class="form-group">
                          <input type="text" name="n" class="form-control" id="#"placeholder="Enter Your Name"required>
                        </div>
                        <div class="form-group">
                          <input type="Email" name="e" class="form-control" id="#"placeholder="Email"required>
                        </div>
                        <div class="form-group">
                          <input type="Number" name="mob" class="form-control" id="#"placeholder="Mobile Number"required>
                        </div>
                        <div class="form-group">
                          <textarea type="Text" name="msg" class="form-control" id="#"placeholder="Type Your Massage"required></textarea>
                        </div>
                        <input type="submit" value="send" name="send" class="btn btn-primary btn-group-justified"required>
                    </form>     
                  </div>
              </div>
            </div>
          </div>
        </div>
          <!--Feedback Panel Close here-->

  </div>
</footer>
<!--Footer1 Close Here-->

<!--Footer2 start Here-->

<footer class="container-fluid text-center"style="background-color:#000408;height:40px;padding-top:10px;color:#f0f0f0;">
  <p>Develope By Furaha And Masabo@ | All Rights Reserved 2022</p>
</footer>

<!--Footer2 start Here-->

<style type="text/css">
      
      /* for desktop */
    .whatsapp_float {
      position:fixed;
      width:50px;
      height:50px;
      bottom:40px;
      right:40px;
      background-color:#25d366;
      color:#FFF;
      border-radius:50px;
      text-align:center;
            font-size:30px;
      box-shadow: 2px 2px 3px #999;
            z-index:100;
    }

    .whatsapp-icon {
      margin-top:10px!important;
      margin-left:0px!important;
    }
    /* for mobile */
    @media screen and (max-width: 767px){
        .whatsapp-icon {
      margin-top:10px;
        }
        .whatsapp_float {
            width: 40px;
            height: 40px;
            bottom: 20px;
            right: 10px;
            font-size: 22px;
        }
    } 

    
</style>
<style>
 .icons_bar .fa {
  padding:20px;
  font-size:20px;
  text-align:center;
  margin: 5px 2px;
  border-radius:50%;
   text-decoration:none;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google-plus{
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
</style>
