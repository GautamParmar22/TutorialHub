<?php
	include "con1.php";
	$sid=$_GET["sid"];
	$qry="delete from subtutorial where sid='$sid'";
	$res=mysqli_query($conn,$qry);
	if($res)
	{
		?>
		<script>
			alert("Tutorial Delete Successfully");
			window.location.href="tutorial.php";
		</script>
	<?php } ?>