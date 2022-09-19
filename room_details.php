
	<?php
      include('Menu Bar.php')
  ?><br><br><br>
	<div class="container-fluid"style="margin-top:2%;">
		<div class="continer">
			<div class="row">
<?php 
include('connection.php');
$room_id=$_GET['room_id'];
$sql=mysqli_query($con,"select * from rooms where room_id='$room_id' ");
$res=mysqli_fetch_assoc($sql);
?>

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
                <li data-target="#myCarousel" data-slide-to="5"></li>
              </ol>
              <a href="https://wa.me/country_code_and_your_phone_number" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
              <!--Indicators Close Here-->

                <!-- Wrapper for slides -->
                <a href="https://wa.me/250785999950" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="image/rooms/<?php echo $res['image']; ?>" class="thumbnail" alt="img1">
                </div>

                <div class="item">
                  <img src="image/rooms/<?php echo $res['image']; ?>" class="thumbnail" alt="img2">
                </div>

                <div class="item">
                  <img src="image/rooms/<?php echo $res['image']; ?>" class="thumbnail" alt="img4">
                </div>

                <div class="item">
                  <img src="image/rooms/<?php echo $res['image']; ?>" class="thumbnail" alt="img5">
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

        <h2 class="Ac_Room_Text"><?php echo $res['type']; ?></h2>
        <h3 class="" style="color:black; text-align:center;"> <b>Price: </b><?php echo $res['price']; ?> Rwf</h3>
        <h4 class="" style="color:black; text-align:center;"> <b>Room No: </b><?php echo $res['room_no']; ?> </h4>
        <p class="text-justify">
              <?php echo $res['details']; ?>
        </p>
    <div class="row">
      <h2>Amenities & Facilities</h2>
      <img src="image/icon/wifi.png"  class="img-responsive">
       <a href="Login.php" class="btn btn-primary" ><i class="fa fa-credit-card"></i> Book Now</a>
      <a href="https://sandbox-flw-web-v3.herokuapp.com/pay/70std7ulfc8h" class="btn btn-primary"><i class="fa fa-money"></i> Pay Now</a><br><br><br><br>
      <!-- <a href="https://sandbox-flw-web-v3.herokuapp.com/pay/70std7ulfc8h" class="btn btn-primary"><i class="fa fa-money"></i> Pay Now</a><br><br><br><br> -->
    </div> <br><br>
	</div>
				<div class="col-sm-3">
					<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 align="center">Rooms</h4>
					</div><br>
					<div class="panel-body-right text-center">
    <!--Fatch Mysql Database Select Query Room Details -->
						<?php
            include('connection.php');
            $sql1=mysqli_query($con,"select * from rooms");
           while($result1= mysqli_fetch_assoc($sql1))
           {

            ?>
            <a href="room_details.php?room_id=<?php echo $result1['room_id']; ?>"><?php echo $result1['type']; ?></a><hr>
            <?php } ?>

    <!--Fatch Mysql Database Select Query Room Details -->
    					
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
