<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TutorialHub</title>
    <!-- Bootstrap Core CSS -->
    <link href="sidebar/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="sidebar/css/CustomStyle.css" rel="stylesheet">

</head>
<body>
    <div class="container-fluid " >
		<div class="row">		
			<!-- header area start -->
			 <div class="headerStyle">
				<!-- <img src="" alt="Code Scratcher" class="img-responsive"/> -->
                <h2 style="color:#FFFFFF;">TutorialHub</h2>
				</div> 
			<!-- header area end -->
			
			<!-- menubar area start -->
			<nav class="navbar navbar-default">
			  <div class="container-fluid" >
				<!-- navbar for mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>				  </button>
				</div>

				<!-- navbar for desktop display -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li class="active"><a href="index1.php">Home</a></li>
				<!-- 	<li><a href="contactus.php">About Us</a></li> -->
			<!-- 		<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories<span class="caret"></span></a> -->
				<!-- 	  <ul class="dropdown-menu" role="menu">
						<li><a href="#">ASP.NET</a></li>
						<li><a href="#">WPF</a></li>
						<li><a href="#">WINDOWS FORMS</a></li>
						<li class="divider"></li>
						<li><a href="#">JAVASCRIPT</a></li>
						<li><a href="#">JQUERY</a></li>
						<li><a href="#">ANGULARJS</a></li>
						<li class="divider"></li>
						<li><a href="#">SQL</a></li>
						<li><a href="#">FLASH</a></li>
						<li><a href="#">BOOTSTRAP</a></li>
					  </ul> -->
					</li> 
					<li><a href="index1.php#work">All Tutorials</a></li>
					<li><a href="index1.php#pricing">Download Tutorials</a></li>
					<li><a href="index1.php#contact">Contact Us</a></li>
				  </ul>				 
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
		  </nav>
			<!-- menubar area end -->
			
			<!-- <div class="jumbotron"> -->
			  <!-- <h1>TutorialHub</h1> -->
			  <!-- <p>Find Tutorial / Download Material / View Examples</p> -->
			  <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
			<!-- </div> -->
			<p></p>
			<div class="col-sm-12 contentAreaStyle" >
            	
				<?php
						include "con1.php";
						$conn = mysqli_connect("localhost", "root", "root", "tutorial4all");
						@$tname=$_GET["tname"];
						$qry="select * from tutorials where tname='".$_GET["sbname"]."'";
						$res=mysqli_query($conn,$qry);
						print_r($res);die();
						while ($row=mysqli_fetch_assoc($res))
						{
						?>
                       <h2> <?php echo $_GET["sbname"];?></h2>
                       <hr style="border:2px solid #0066FF;">
					   <p><?php echo $row["ttutorial"];?>.</p>
                       <hr style="border:2px solid #0066FF;">
    					<h1 style="margin-left:-800px; color:#993333;"></h1>
						  <p><?php 
						  		if($row["timage"]=="")
								{
									echo "No Image Found";
								}
								else
								?>
										<img src="admin/upload/<?php echo $row["timage"];?>" height="300" width="500"/><br>
                                        <img src="images/index.png" width="30" height="30">PDF
							  <?php } ?>
    		</div>
			
	    <!-- sidebar area start -->
        <?php 
	  include "con1.php";
	  $conn = mysqli_connect("localhost", "root", "root", "tutorial4all");
	  $qry="select * from sidebar";
	  $res=mysqli_query($conn,$qry);
	  print_r($res);die();
	  while($row=mysqli_fetch_assoc($res))
	  {
	  ?>
			<!--div class="col-sm-3 col-sm-pull-9 sidebarStyle">
				<div class="text-xs-center text-sm-left ">			
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span> <?php //echo $_GET["sbname"];?></a></li>
						<li> <a href="#" class="nav__link c-blue"><?php// echo $row["sbtutorial"];?></a></li>
                        
					</ul>
                    <?php } ?>
				</div>
			</div--> 
	    <!-- sidebar area end -->
			
			
            <div class="col-sm-9 col-sm-push-3 contentAreaStyle">
				</div>
    <!-- jQuery -->
    <script src="sidebar/js/jquery-1.11.2.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="sidebar/js/bootstrap.min.js"></script>
</body>
</html>

