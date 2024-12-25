<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TutorialHub</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>
<script src="ckeditor/ckeditor.js"></script>

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
		
		
				
		<!-------------------------- Update Language ------------------->
				
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> Tutorials</h1>
			</div>
		</div><!--/.row-->
		
		
				
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
									<select name="sbname" class="form-control">
									<?php
										$sbid=$_GET["sbid"];
										include "con1.php";
										$qry="select * from sidebar where  sbid='$sbid'";
										$res=mysqli_query($conn,$qry);
										while($row=mysqli_fetch_assoc($res))
										{
										?>
									<option value="<?php echo $row["sbname"];?>" required><?php echo $row["sbname"];?></option>
									<?php }?>
									</select>
								</div>
								<?php
									$sbid=$_GET["sbid"];
									include "con1.php";
									$qry="select * from sidebar where sbid='$sbid'";
									$res=mysqli_query($conn,$qry);
									while($row=mysqli_fetch_assoc($res))
									{
									?>
								<div class="form-group">
									<label>Enter Defination</label>
									<textarea class="ckeditor" name="sbtutorial"><?php echo $row["sbtutorial"];?></textarea>
								</div>
								<div class="form-group">
									
									<input type="submit" name="update" value="Update Sidebar" class="btn btn-primary">
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<?php } ?>
	<?php
		$sbid=$_GET["sbid"];
		@$sbname=$_POST["sbname"];
		@$sbtutorial=$_POST["sbtutorial"];
		
		if(isset($_POST["update"]))
		{
			$qry="update sidebar set sbname='$sbname',sbtutorial='$sbtutorial' where sbid='$sbid'";
			$res=mysqli_query($conn,$qry);
			
			if($res)
			{
			?>
				<script>
				alert("Update Successfull");
				window.location.href="sbar.php";
				</script>
			<?php } }?>