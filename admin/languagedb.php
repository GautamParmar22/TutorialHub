<?php
	include "con1.php";
	
	$lname=$_POST["lname"];
	$ldefination=$_POST["ldefination"];
	$conn = mysqli_connect("localhost", "root", "root", "tutorial4all");
	$qry="insert into languages values('','$lname','$ldefination')";
	$res=mysqli_query($conn,$qry);
	
	if($res)
	{
		?>
		<script>
		 alert("Language Insert Successfully");
		 window.location.href="language.php";
		</script>
	<?php } ?>
	