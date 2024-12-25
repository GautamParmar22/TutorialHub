<?php 
	include "con1.php";
	$tid=$_GET["tid"];
	$qry="delete from tutorials where tid='$tid'";
	$res=mysqli_query($conn,$qry);
	if($res)
	{
		?>
		<script>
			alert("Delete Successfully....");
			window.location.href="stutorial.php";
		</script>
     <?php } ?>