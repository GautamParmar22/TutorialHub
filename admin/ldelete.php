<?php
	include "con1.php";
	$lid=$_GET["lid"];
	$conn = mysqli_connect("localhost", "root", "root", "tutorial4all");
	$qry="delete from languages where lid='$lid'";
	$res=mysqli_query($conn,$qry);
	if($res)
	{
		?>
		<script>
			alert("Language Delete Successfully");
			window.location.href="language.php";
		</script>
	<?php } ?>