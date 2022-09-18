
<?php
      include('Menu Bar.php')
  ?><br>
  <div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="imgicon/default1.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>FURAHA Irene</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>furah@gmailss.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="imgicon/default1.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Masabo Chance</h2>
        <p class="title">Manager</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>masabo@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="imgicon/default1.png" alt="John" style="width:100%">
      <div class="container">
        <h2>Team Reader</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>gigs@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid text-center">
<div class="container"> 
  <div class="row content">
    <div class="col-sm-12">

    </div>
  </div><br><br>
  <?php
      error_reporting(0);
  ?>
  <center>
  <div class="row"align="center">
  <!--map Start Here-->
  <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
      <a href="#" type="button" data-toggle="modal" data-target="#myModal"><img src="image/icon/icon-01.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
  </div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <iframe class="frame"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.9012415990155!2d77.37085911440647!3d28.602739392180986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce57ca5ff4435%3A0x6de631b7a5bfdacb!2sUnion+Bank+Of+India!5e0!3m2!1sen!2sin!4v1555502551059!5m2!1sen!2sin" width="550"height="300" frameborder="0" style="border:1" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>      
<!--Map Close Here-->
        <div class="col-sm-2">
          <h4><b>Address</b></h4>
          <b>Gisozi Ulk Computer Science</b>
        </div>
        <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
            <a href="#"><img src="image/icon/icon-02.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
        </div>
         <div class="col-sm-2">
          <h4><b>Phone</b></h4>
              <b>0780465854</b>
        </div>
        <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
            <a href="#"><img src="image/icon/icon-03.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
        </div>
<center>
         <div class="col-sm-2" align="center" style="align-items: center;">
          <h4><b>Email-Id</b></h4>
              <b>furaha@gmail.com</b>
        </div></center></center>
  </div><br><br>
</div>
</div>
<a href="https://wa.me/250785999950" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
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
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
<?php
  include('Footer.php')
?>
</body>
</html>
