<?php
	include "con1.php";
	$sbid=$_GET["sbid"];
	$qry="delete from sidebar where sbid='$sbid'";
	$res=mysqli_query($conn,$qry);
	if($res)
	{
		?>
		<script>
			alert("sidebar Delete Successfully");
			window.location.href="sbar.php";
		</script>
	<?php } ?>