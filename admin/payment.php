
<div style="" id="printableArea">

<table class="table table-bordered table-striped table-hover">
	<h1>
		Payment 
		<button onclick="Print();" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</button>
	</h1> 
	<hr>

	<tr>
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Gender</th>
		<th>Country</th>
		<th>Payment(Amount)</th>
	</tr>
	<?php 
$i=1;
$sql=mysqli_query($con,"select * from create_account");
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['mobile']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['gender']; ?></td>
		<td><?php echo $res['country']; ?></td>
		<td>5000FRW</td>
	</td>
	</tr>	
<?php 	
}
?>
</div>

<script type="text/javascript">
        function Print() {
            var printContents = document.getElementById("printableArea").innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
</script>