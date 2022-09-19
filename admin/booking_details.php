
<table class="table table-bordered table-striped table-hover">
	<h1>Room Booking Details</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Address</th>
		<th>Room Type</th>
		<th>Check in Date</th>
		<th>Check Out Time</th>
		<th>Check Out Date</th>
		<th>Occupancy</th>
		<th>Status</th>
		<th>Cancel Order</th>
		<th>Action</th>
	</tr>

<?php 
$i=1;
$sql=mysqli_query($con,"select * from room_booking_details");
while($res=mysqli_fetch_assoc($sql))
{
$oid=$res['id'];

?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['phone']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['room_type']; ?></td>
		<td><?php echo $res['check_in_date']; ?></td>
		<td><?php echo $res['check_in_time']; ?></td>
		<td><?php echo $res['check_out_date']; ?></td>
		<td><?php echo $res['Occupancy']; ?></td>
		<td><?php echo $res['status']; ?></td>
		<td>
<?php 
	if($res['status'] != 'Canceled'):
?>
			<a style="color:red" href="cancel_order.php?booking_id=<?php echo $oid; ?>">Cancel</a>
<?php
	else:
		echo '-';
	endif;
?>
		</td>
		<td>
<?php 
	if($res['status'] == 'Pending'):
?>
			<a style="color:green" href="approve_order.php?booking_id=<?php echo $oid; ?>">Approve</a>
<?php
	elseif($res['status'] == 'Approved'):
?>
			<a style="color:orange" href="deapprove_order.php?booking_id=<?php echo $oid; ?>">Deapprove</a>
<?php
	else:
		echo '-';
	endif;
?>
		</td>
	</td>
	</tr>
<?php 	
}

?>	
</table>