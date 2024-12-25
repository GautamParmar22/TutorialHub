<section id="pricing">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center" >
				<div class="section-title">
					<!--strong>04</strong-->
					<h1 class="heading bold">Download Tutorial</h1>
					<hr>
				</div>
			</div>
			<br/>
		
					<?php 
						include "con1.php";
						$conn = mysqli_connect("localhost", "root", "root", "tutorial4all");
						$qry="select * from subtutorial";
						$res=mysqli_query($conn,$qry);
						while($row=mysqli_fetch_assoc($res))
						  {	  
				         ?>

	

			

	
		 <div class="col-md-4 col-sm-6" style="position: relative">
				<div class="plan plan-one wow bounceIn" data-wow-delay="0.3s" style="height:450px">
					<div class="plan_title">
						<h3><?php echo $row["sname"];?></h3>
					</div>
					<ul>
						<li>
						
						<?php echo $row["stutorial"];?>
						</li><br />
						
						
					</ul>
					<a href="filedownload.php?filename=<?php echo $row["fname"] ;?>" ><button class="btn btn-warning" style="position: absolute;width:100%;left:0%;bottom:5%">Download Material</button></a>
				</div>
			</div> 
 			<?php } ?>



</div>
		
	</div>		
</section>
