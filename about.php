
<?php
      include('Menu Bar.php')
  ?>
  <div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

  <h2 style="text-align:center">Our Team</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="imgicon/default1.png" alt="Jane" style="width:100%">
        <div class="about_description">
          <h2>FURAHA Irene</h2>
          <p class="title">CEO & Founder</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>furaha@gmail.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="imgicon/default1.png" alt="Mike" style="width:100%">
        <div class="about_description">
          <h2>Masabo Chance</h2>
          <p class="title">Manager</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>masabo@gmail.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="imgicon/default1.png" alt="John" style="width:100%">
        <div class="about_description">
          <h2>Team Leader</h2>
          <p class="title">Designer</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>gigs@gmail.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
<div class="container-fluid center">
  <div class="container "> <br><br>
  
    <div class="row "  >
      <div class="col-md-4 row">
        <!--map Start Here-->
        <div class="col-sm-2 col-md-6"style="background-color:#27303b;height:80px;width:100px;">
            <a href="#" type="button" data-toggle="modal" data-target="#myModal"><img src="image/icon/icon-01.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
        </div>
        <!--map modal Start Here-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.57593623349!2d30.05470746432854!3d-1.921040037188697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca3f75b7b8b91%3A0xc9ab953c704fa9d3!2sKigali%20Independent%20University!5e0!3m2!1sen!2srw!4v1663496635956!5m2!1sen!2srw" width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>      
        <!--Map Close Here-->
        <div class="col-sm-2 col-md-6">
            <h4><b>Address</b></h4>
            <b>Gisozi Ulk Computer Science</b>
        </div>
      </div>
      
      <div class="col-md-4 row">
        <div class="col-sm-2 col-md-6"style="background-color:#27303b;height:80px;width:100px;">
            <a href="#"><img src="image/icon/icon-02.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
        </div>
         <div class="col-sm-2 col-md-6">
          <h4><b>Phone</b></h4>
              <b>0780465854</b>
        </div>
      </div>
      <div class="col-md-4 row">
        <div class="col-sm-2 col-md-6"style="background-color:#27303b;height:80px;width:100px;">
            <a href="#"><img src="image/icon/icon-03.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
        </div>

         <div class="col-sm-2 col-md-6"  style="align-items: center;">
          <h4><b>Email-Id</b></h4>
              <b>furaha@gmail.com</b>
        </div>
      </div>
      
  </div><br><br>
</div>
</div>
<a href="https://wa.me/250785999950" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
<style>
  
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
.about_description{
  padding: 5%;
}

/* .container {
  padding: 0 16px;
} */

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
  /* width: 100%; */
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
