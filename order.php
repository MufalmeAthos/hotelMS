<?php 
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
?>

  <?php
  include('Menu Bar.php');
  ?>
<div class="container-fluid"><!--Primary Id-->
  <h1 class="text-center text-primary">[ Booking Details ]</h1><br>
  <div class="container">
    <div class="row">
        <table class="table table-striped table-bordered table-hover table-responsive"style="height:150px;">
               <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Contury</th>
                    <th>Room Type</th>
                    <th>Check In Date</th>
                    <th>Check In Time</th>
                    <th>Check Out Date</th>]
                    <th>Pay</ht>
                    <th>Occupancy</th>
					<th>Cancel</th>
               </tr>

               <?php 
$sql= mysqli_query($con,"select * from room_booking_details where email='$eid' "); 
while($result=mysqli_fetch_assoc($sql))
{
$oid=$result['id'];
echo "<tr>";
echo "<td>".$result['name']."</td>";
echo "<td>".$result['email']."</td>";
echo "<td>".$result['phone']."</td>";
echo "<td>".$result['address']."</td>";
echo "<td>".$result['contry']."</td>";
echo "<td>".$result['room_type']."</td>";
echo "<td>".$result['check_in_date']."</td>";
echo "<td>".$result['check_in_time']."</td>";
echo "<td>".$result['check_out_date']."</td>";
echo "<td>".$result['Occupancy']."</td>";
echo "<td><a href='cancel_order.php?order_id=$oid' style='color:Red'>Cancel</a></td>";
echo "</tr>";
}                         
               ?> 
          </table>

    </div>
    </div>
  </div>
<?php

include('Footer.php')
?>
</body>
</html>
