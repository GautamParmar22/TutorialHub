<?php
include "con1.php";

	@$sbname=$_POST["sbname"];
	$sbtutorial=$_POST["sbtutorial"];
	
	$qry="insert into sidebar values('','$sbname','$sbtutorial')";
	$res=mysqli_query($conn,$qry);
	
	if($res)
	{
		?>
		<script>
		
		window.location.href="sbar.php";
		</script>
	<?php } 
?>