<?php
	include "con1.php";
	
	$sname=$_POST["sname"];
	$stutorial=$_POST["stutorial"];
	if($_FILES["fname"]["name"]!=""){
			$fname = $_FILES["fname"]["name"];
			move_uploaded_file($_FILES["fname"]["tmp_name"],"upload/".$fname);
		}else{
			$fname = "";
		}
	$ftype=$_POST["ftype"];
	
	$qry="insert into subtutorial values('','$sname','$stutorial','$fname','$ftype')";
	$res=mysqli_query($conn,$qry);
	
	if($res)
	{
		?>
		<script>
		 alert("tutorial Insert Successfully");
		 window.location.href="tutorial.php";
		</script>
	<?php } ?>
	