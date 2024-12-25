<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TutorialHub</title>

<link href="css/css/bootstrap.min.css" rel="stylesheet">
<link href="css/css/datepicker3.css" rel="stylesheet">
<link href="css/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="css/css/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>


<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>Find Tutorial / Download Material / View Examples</h3>
				<h1>TutorialHub</h1>
				<hr>
				<a href="#work" class="smoothScroll btn btn-danger">What we do</a>
				<a href="contactus.php" class="smoothScroll btn btn-default">Talk to us</a>
			</div>
		</div>
	</div>	
	
	<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body tabs">
					
					<h2>New Added Tutorial</h2><hr />
						<ul class="nav nav-pills">
							<!-- <li class="active"><a href="#pilltab1" data-toggle="tab">News</a></li> -->
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="pilltab1">
								<?php
								include "con1.php";
								$conn = mysqli_connect("localhost", "root", "root", "tutorial4all");
								$qry=mysqli_query($conn,"select sname from subtutorial");
								while($row=mysqli_fetch_assoc($qry))
								{
								?>
								<a href="#pricing"><img src="1-33-512.png" height="30px>
								<p style=" font-size:15px; margin-left:-50px"><?php echo $row["sname"];?> Tutorial Has Been Added</p></a><?php } ?>
							</div>
							
								
						</div>
					</div>
				</div><!--/.panel-->
			</div><!-- /.col-->
			
		</div><!-- /.row -->
		
	</div><!--/.main-->	
</section>
	<script src="css/css/jquery-1.11.1.min.js"></script>
	<script src="css/css/bootstrap.min.js"></script>
	<script src="css/css/chart.min.js"></script>
	<script src="css/css/chart-data.js"></script>
	<script src="css/css/easypiechart.js"></script>
	<script src="css/css/easypiechart-data.js"></script>
	<script src="css/css/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	