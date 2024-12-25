<?php
include("database.php");
$login=$_POST["login"];
$pass=$_POST["pass"];

$qry="select * from mst_user where login='$login' and pass='$pass'";
$res=mysql_query($qry);
$row=mysql_fetch_array($res);
if($row)
{
?>
	<script>
		alert("login successfull");
		window.location.href="sublist.php";
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