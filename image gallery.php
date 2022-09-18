<!DOCTYPE html>
<html lang="en">
<head><!--Head Open  Here-->
  <title>Online Hotel.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head> <!--Head Open  Here-->
<body style="margin-top:50px;"> 
  <?php
      include('Menu Bar.php')
  ?>
<div class="container">
  <h2>Image Gallery</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/image gallery/1.jpg" target="_blank">
          <img src="image/image gallery/1.jpg" alt="img1 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/image gallery/2.jpg" target="_blank">
          <img src="image/image gallery/2.jpg" alt="img2 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/image gallery/3.jpg" target="_blank">
          <img src="image/image gallery/3.jpg" alt="img3 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/Delux Room Single Bed Ac Room/img1.jpg" target="_blank">
          <img src="image/Luxury Room/Luxury_img8.jpg" alt="img3 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/Delux Room Single Bed Ac Room/img3.jpg" target="_blank">
          <img src="image/Luxury Room/Luxury_img9.jpg" alt="img3 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/Delux Room Single Bed Ac Room/img4.jpg" target="_blank">
          <img src="image/Luxury Room/Luxury_img10.jpg" alt="img3 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/image gallery/4.jpg" target="_blank">
          <img src="image/image gallery/4.jpg" alt="img4 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/image gallery/5.jpg" target="_blank">
          <img src="image/image gallery/5.jpg" alt="img5 Not Show" style="width:100%;height:160px;">
        </a>
      </div>

    </div>
    <a href="https://wa.me/country_code_and_your_phone_number" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/image gallery/6.jpg" target="_blank">
          <img src="image/image gallery/6.jpg" alt="img6 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/image gallery/7.jpg" target="_blank">
          <img src="image/image gallery/7.jpg" alt="img7 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
  </div>
</div>
<style>
  /* for desktop */
.whatsapp_float {
  position:fixed;
  width:60px;
  height:60px;
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
  margin-top:16px;
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
<?php
  include('Footer.php')
?>
</body>
</html>


