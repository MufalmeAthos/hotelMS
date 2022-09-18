<?php 
session_start();
error_reporting(1);
include('connection.php');
?>
  <?php
      include('Menu Bar.php')
  ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel"> <!--Slider Image Start Here--> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
	   <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <a href="https://wa.me/country_code_and_your_phone_number" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
    <!--Indicators Close Here-->

    <!-- Wrapper for slides -->
    <a href="https://wa.me/250785999950" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

    <div class="carousel-inner" role="listbox">
      <?php
		$i=1;
	  $sql=mysqli_query($con,"select * from slider");
		while($slider=mysqli_fetch_assoc($sql))
		{
		$slider_img=$slider['image'];
		$slider_cap=$slider['caption'];
		$path="image/Slider/$slider_img";	
			if($i==1)
			{	
		?>
	  <div class="item active">
        <img src="<?php echo $path; ?>" alt="Image">
        <div class="carousel-caption">
			<h2><?php echo $slider_cap; ?></h2>
		</div>      
      </div>
		<?php 
		} 
		else 
			{
			?>	
		<div class="item">
        <img src="<?php echo $path; ?>" alt="Image">
        <div class="carousel-caption">
        <h2><?php echo $slider_cap; ?></h2>
		</div>      
      </div>	
				
		<?php	} ?>
	  
	  
		<?php $i++; } ?>
      
	  
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> 
    <!-- Left and right controls Close Here -->
    
</div> <!--Room Info Start Here-->

 <div class="container-fluid"id="red"><!--Id Is Red--> 
<div class="container text-center">    
  <h1>Welcome To <font color="#a6e22b;"><b>Furaha and Masabo Hotel.Com</b></font></h1><hr><br>
  <div class="row">
    <div class="hov"><!--Hov is Class-->
    
	<style type="text/css">
   
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
	$sql=mysqli_query($con,"select * from rooms");
	while($r_res=mysqli_fetch_assoc($sql))
	{
	?>
	<div class="col-sm-4">
    <a href="room_details.php?room_id=<?php echo $r_res['room_id']; ?>"> <img src="image/rooms/<?php echo $r_res['image']; ?>"class="img-responsive thumbnail"alt="Image"id="img1"></a>  <!--Id Is Img-->
      <h4 class="Room_Text" style="color: white; font-family: Franklin Gothic Medium; height: 10px">[ <?php echo $r_res['type']; ?>]</h4><br>
       <h4 class="price" style="color: white; font-family: Franklin Gothic Medium; height: 10px"> <?php echo $r_res['price']; ?> &nbsp Frw</h4>

     <center> <p class="text-justify" style="text-align: center; color: white; font-size: 30px;"><?php echo substr($r_res['details'],0,100); ?></p><br></center>
	    <a href="room_details.php?room_id=<?php echo $r_res['room_id']; ?>" class="btn btn-danger text-center">Read More</a><br><br>
    </div>
	<?php } ?>
  </div>
  </div>
</div>
</div>

<?php
  include('Footer.php')
?>
</body>
</html>