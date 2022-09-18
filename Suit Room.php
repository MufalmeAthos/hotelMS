
	<?php
      include('Menu Bar.php')
  ?><br><br><br>
	<div class="container-fluid"style="margin-top:2%;">
		<div class="continer">
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-7">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="image/Suit Room/img1.jpg"class="thumbnail" alt="img1">
    </div>

    <div class="item">
      <img src="image/Suit Room/img2.jpg"class="thumbnail" alt="im2">
    </div>

    <div class="item">
       <img src="image/Suit Room/img3.jpg"class="thumbnail" alt="im3">
    </div>

    <div class="item">
       <img src="image/Suit Room/img4.jpg"class="thumbnail" alt="img4">
    </div>

    <div class="item">
       <img src="image/Suit Room/img5.jpg"class="thumbnail" alt="img5">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		<h2 class="Ac_Room_Text">Suit Room</h2>
		<p class="text-justify">Enjoy the view of Anand from attach sitting area, An upgraded version of the Deluxe room, these rooms offer an elegant design with larger room space..</p>
    <div class="row">
      <h2>Amenities</h2>
      <img src="image/icon/wifi.png">
      </div>
	</div>
				<div class="col-sm-3">
					<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 align="center">Room Type</h4>
					</div><br>
					<div class="panel-body-right text-center">	
						<a href="Delux Room.php">Delux Room</a><hr>
						<a href="Standard Room.php">Standard Room</a><hr>
						<a href="Luxurious Suite.php">Luxurious Suite</a><hr>
            <a href="Twin Delux Room.php">Twin Delux Room</a><hr>
            <a href="Suit Room.php">Suit Room</a><hr>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
  <?php
      include('footer.php')
  ?>
</body>
</html>
