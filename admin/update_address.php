<script>
	function deladdress(id)
	{
		if(confirm("You want to delete this Room ?"))
		{
		window.location.href='delete_address.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Update Address</h1><hr>
	
	<tr style="height:40">
    <tr>
		<th>Sr No</th>
		<th>Address</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
	<?php 
$i=1;
$sql=mysqli_query($con,"select * from create_account");
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
        <td><?php echo $res['address']; ?></td>

		<td><a href="dashboard.php?option=address?&id=<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

		
		<td><a href="#" onclick="deladdress('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>