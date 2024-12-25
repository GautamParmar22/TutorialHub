
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
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> Tutorials</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><span>Add Tutorial</span></div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="" enctype="multipart/form-data">
								<div class="form-group">
									<label>Select Language</label>
									
									<select name="tname" class="form-control">
									<?php
										$tid=$_GET["tid"];
										include "con1.php";
										$qry="select * from tutorials where tid='$tid'";
										$res=mysqli_query($conn,$qry);
										while($row=mysqli_fetch_assoc($res))
										{
										?>
									<option value="<?php echo $row["tname"];?>" required><?php echo $row["tname"];?></option>
									<?php }?>
									</select>
								</div>
								<?php
									$tid=$_GET["tid"];
									include "con1.php";
									$qry="select * from tutorials where tid='$tid'";
									$res=mysqli_query($conn,$qry);
									while($row=mysqli_fetch_assoc($res))
									{
									?>
									
									<div class="form-group">
									<label>Enter tutorial</label>
									<textarea class="ckeditor" name="ttutorial"><?php echo $row["ttutorial"];?></textarea>
								</div>
								<div class="form-group">
									<label>Select File</label>
									<th>
                    		<div id="imgContainer">
							<h3><?php echo $row["timage"]; ?></h3>
      						<div id="imgChange"><span>Change Photo</span>
									<input type="file" name="timage" value="<?php echo $row["timage"];?>" class="form-control" required rows="3"/>
								</div>
								</div>
								<div class="form-group">
									
									<input type="submit" name="update" value="update" class="btn btn-primary">
								</div>
																
								
																
								
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
    <?php } ?>
	<?php
		$tid=$_GET["tid"];
		@$tname=$_POST["tname"];
		@$ttutorial=$_POST["ttutorial"];
		if(@$_FILES["timage"]["name"]!=""){
			$timage = $_FILES["timage"]["name"];
			move_uploaded_file($_FILES["timage"]["tmp_name"],"upload/".$timage);
		}else{
			$timage = "";
		}
		
		if(isset($_POST["update"]))
		{
			$qry="update tutorials set tname='$tname',ttutorial='$ttutorial',timage='$timage' where tid='$tid'";
			$res=mysqli_query($conn,$qry);
			
			if($res)
			{
			?>
				<script>
				alert("Update Successfull");
				window.location.href="stutorial.php";
				</script>
			<?php } }?>