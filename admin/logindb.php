<?php
	include "con1.php";

	$email=$_POST["admin_email"];
	$pass = $_POST["admin_pass"];
	
	 $qry="select * from admin_login where admin_email='$email' and admin_pass='$pass'";
	$res=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($res);
	if($row)
	{
		?>
		<script>
			alert("successfully login");
			window.location.href="index1.php";
		</script>
		
	<?php }
	else
	{
		
	?>
		<script>
			alert("invalid username or password");
			window.location.href="index.php";
		</script>
	<?php }?>
