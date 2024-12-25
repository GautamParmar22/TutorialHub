<?php include "header.php";?>

<section id="pricing">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<h1><?php echo $_GET["lname"];?></h1>
					<hr>
				</div>
			</div>
					
					<?php
					
						include "con1.php";
						$lname=$_GET["lname"];
						$qry="select * from subtutorial where sname='".$_GET["lname"]."'";
						$conn = mysqli_connect("localhost", "root", "root", "tutorial4all");
						$res=mysqli_query($conn,$qry);
						
						while ($row=mysqli_fetch_assoc($res))
						{
						?>
						
			<div class="col-md-4 col-sm-6">
				<div class="plan plan-one wow bounceIn" data-wow-delay="0.3s">
					<div class="plan_title">
						<h3><li><span class="ribbon"><?php echo $row["stutorial"];?><br></b></span></li></h3>
									
					</div>
					
				</div>
			</div>
			<?php } ?>
		</div>
	</div>		
</section>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>