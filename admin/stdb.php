<?php
include "con1.php";

	@$tname=$_POST["tname"];
	$ttutorial=$_POST["ttutorial"];
	if(@$_FILES["timage"]["name"]!=""){
			$timage = $_FILES["timage"]["name"];
			move_uploaded_file($_FILES["timage"]["tmp_name"],"upload/".$timage);
		}else{
			$timage = "";
		}
	
	$qry="insert into tutorials values('','$tname','$ttutorial','$timage')";
	$res=mysqli_query($conn,$qry);
	
	if($res)
	{
		?>
		<script>
		alert("Tutorial added successfull")
		window.location.href="stutorial.php";
		</script>
	<?php } 
?>