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
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><span>Insert Tutorial</span></div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post"  enctype="multipart/form-data">
								 
								<div class="form-group">
									<label>Select Language</label>
									
									<select name="sname" class="form-control">
									<?php
										$sid=$_GET["sid"];
										include "con1.php";
										$qry="select * from subtutorial";
										$res=mysqli_query($conn,$qry);
										while($row=mysqli_fetch_assoc($res))
										{
										?>
									<option value="<?php echo $row["sname"];?>" required><?php echo $row["sname"];?></option>
									<?php }?>
									</select>
									<?php
										$sid=$_GET["sid"];
										include "con1.php";
										$qry="select * from subtutorial where sid='$sid'";
										$res=mysqli_query($conn,$qry);
										while($row=mysqli_fetch_assoc($res))
										{
										?>
									<div class="form-group">
									
									<label>Enter Language</label>
									<input type="text" name="stutorial" value="<?php echo $row["stutorial"];?>" class="form-control" required  />
								</div>
								</div>
								<div class="panel-heading"><span>Upload File</span></div>
								<div class="form-group">
									
									<label>Select File</label>
									<th>
                    		<div id="imgContainer">
							<h3><?php echo $row["fname"]; ?></h3>
      						<div id="imgChange"><span>Change Photo</span>
									<input type="file" name="fname" value="<?php echo $row["fname"];?>" class="form-control" required rows="3"/>
								</div>
								<div class="form-group">
									
									<label>Enter File Type</label>
									<input type="text" name="ftype" value="<?php echo $row["ftype"];?>" id="image_upload_file" class="form-control" required rows="3"/>
									</div></div></th>
								</div>
								
								<div class="form-group">
									
									<input type="submit" name="update" value="Update Tutorial & update Material" class="btn btn-primary"  placeholder="Insert Language">
								</div>
																
								
																
								
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
	<?php } ?>
	<?php
		$sid=$_GET["sid"];
		@$sname=$_POST["sname"];
		@$stutorial=$_POST["stutorial"];
		if(@$_FILES["fname"]["name"]!=""){
			$fname = $_FILES["fname"]["name"];
			move_uploaded_file($_FILES["fname"]["tmp_name"],"upload/".$fname);
		}else{
			$fname = "";
		}
		@$ftype=$_POST["ftype"];
		
		if(isset($_POST["update"]))
		{
			$qry="update subtutorial set sname='$sname',stutorial='$stutorial',fname='$fname',ftype='$ftype' where sid='$sid'";
			$res=mysqli_query($conn,$qry);
			
			if($res)
			{
			?>
				<script>
				alert("Update Successfull");
				window.location.href="tutorial.php";
				</script>
			<?php } }?>