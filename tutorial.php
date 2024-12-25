<section id="work" >
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					
					<h1 class="heading bold">Tutorial</h1>
					<hr>
				</div>
			</div>
			<?php 
				include "con1.php";
				$conn = mysqli_connect("localhost", "root", "root", "tutorial4all");
				$qry="select * from languages";
				$res=mysqli_query($conn,$qry);
				while($row=mysqli_fetch_assoc($res))
				{
					
				?>
				<a href="stutorial.php?sbname=<?php echo $row["lname"];?>">
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s" >
				<i class="icon-cloud medium-icon"></i>
				
					<h3><?php echo $row["lname"];?></h3>
					<hr>
					<p><?php echo $row["ldefinition"];?></p>
					</div>
				</a>
	<?php } ?>
	</div>
	</div>
</section>
