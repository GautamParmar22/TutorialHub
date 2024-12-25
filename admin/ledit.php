<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Forms</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<?php include "sidebar.php";?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		<?php
			$lid=$_GET["lid"];
			include "con1.php";
			$conn = mysqli_connect("localhost", "root", "root", "tutorial4all");
			$qry="select * from languages where lid='$lid'";
			$res=mysqli_query($conn,$qry);
			while($row=mysqli_fetch_assoc($res))
			{
			?>
		
				
		<!-------------------------- Update Language ------------------->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><span>Update Languages</span></div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post">
							
								<div class="form-group">
									<label>Enter Language</label>
									<input type=" text" name="lname" value="<?php echo $row["lname"];?>"class="form-control" required ">
								</div>
								<div class="form-group">
									<label>Enter Defination</label>
									<input type=" text" name="ldefination" value="<?php echo $row["ldefination"];?>"class="form-control" required ">
								</div>
								<div class="form-group">
									
									<input type="submit" name="update" value="Update Language" class="btn btn-primary">
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<?php } ?>
	<?php
		$lid=$_GET["lid"];
		@$lname=$_POST["lname"];
		@$ldefination=$_POST["ldefination"];
		
		if(isset($_POST["update"]))
		{

			$qry="update languages set lname='$lname',ldefination='$ldefination' where lid='$lid'";
			$res=mysqli_query($conn,$qry);
			
			if($res)
			{
			?>
				<script>
				alert("Update Successfull");
				window.location.href="language.php";
				</script>
			<?php } }?>