<?php
	include "con1.php";
	$cid=$_GET["cid"];
	$qry="delete from contactus where cid='$cid'";
	$res=mysqli_query($conn,$qry);
	if($res)
	{
		?>
		<script>
			alert("Question Delete Successfully");
			window.location.href="question.php";
		</script>
	<?php } ?>