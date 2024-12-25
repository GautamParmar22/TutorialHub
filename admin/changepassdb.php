<?php
		include "con1.php";
		$aid=$_GET["aid"];
		$op=$_POST['op'];
		$np=$_POST['np'];
		$cp=$_POST['cp'];	
		$conn = mysqli_connect("localhost", "root", "root", "tutorial4all");
		$qry="select * from admin_login where aid='$aid'";
		$res=mysqli_query($conn,$qry);
		while($row=mysqli_fetch_assoc($res))
		{
			if($row['pass']=="$op")
			{
				if($np==$cp)
				{
					mysqli_query($conn,"update admin_login set admin_ pass='$np' and admin_pass='$op' where aid='$aid'");	
					header("location:login.php");
					
				}
			else
			{
				?>
				<script>
					alert("incorrect Password");
					window.location.href="profile.php";
				</script>
		<?php } 
			 
			}

		}
	?>
