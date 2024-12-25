
<?php
	include "con1.php";
	$conn = mysqli_connect("localhost", "root", "root", "tutorial4all");

	$cname=$_POST["cname"];
	$cemail=$_POST["cemail"];
	$cnumber=$_POST["cnumber"];
	$cquestion=$_POST["cquestion"];
	
	 $qry="insert into contactus values('','$cname','$cemail','$cnumber','$cquestion')";
	 $res=mysqli_query($conn,$qry);
	
	if($res)
	{
		?>
		<script>
		 alert("Your Question Deliverd Successfully")
		 window.location.href="index1.php";
		</script>
	<?php } ?>