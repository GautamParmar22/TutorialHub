<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TutorialHub.com</title>
    <!-- Bootstrap Core CSS -->
    <link href="sidebar/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="sidebar/css/CustomStyle.css" rel="stylesheet">

</head>
<body>
    <div class="container-fluid ">
		<div class="row">		
			<!-- header area start -->
			<div class="headerStyle">
				<!--<img src="" alt="Code Scratcher" class="img-responsive"/>-->
                <h2 style="color:#FFFFFF;"><a href="index.php">TurotialHub</a></h2>
                <<p></p>
			</div>
			<!-- header area end -->
			
			<!-- menubar area start -->
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
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
                  <?php 
					  include "con1.php";
					  $conn = mysqli_connect("localhost", "root", "root", "tutorial4all");
					  $qry="select lname from languages";
					  $res=mysqli_query($conn,$qry);
					  while($row=mysqli_fetch_assoc($res))
					  {
					  ?>
					<li class="dropdown">
					  <a href="work" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $row["lname"];?><span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="#"><?php echo $row["lname"];?></a></li>
					
					  </ul>
                      
					</li>
					  <?php } ?>
				  </ul>	
                			 
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
		  </nav>
			<!-- menubar area end -->
			
			<!-- <div class="jumbotron">
			  <h1>TutorialHub</h1>
			  <p>Find Tutorial / Download Material / View Examples</p>
			  <p><a class="btn btn-primary btn-lg" href="google.com" role="button">Learn more</a></p>
			</div> -->
			
			<div class="col-sm-9 col-sm-push-3 contentAreaStyle">
				CONTENT AREA			</div>
			
	    <!-- sidebar area start -->
        <?php 
	  include "con1.php";
	  $conn = mysqli_connect("localhost", "root", "root", "tutorial4all");
	  $qry="select * from sidebar where sbname='".$_GET["lname"]."'";
	  $res=mysqli_query($conn,$qry);
	  while($row=mysqli_fetch_assoc($res))
	  {
	  ?>
			<!--div class="col-sm-3 col-sm-pull-9 sidebarStyle">
				<div class="text-xs-center text-sm-left ">			
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span> <?php echo $_GET["lname"];?></a></li>
						<li> <a href="stutorial.php?sbname=<?php echo $row["sbname"];?>" class="nav__link c-blue"><?php echo $row["sbtutorial"];?></a></li>
                        
					</ul>
                    <?php } ?>
				</div>
			</div>-->
	    <!-- sidebar area end -->
			
			<div class="clearfix">
            
			</div>
            <div class="col-sm-9 col-sm-push-3 contentAreaStyle" style="margin-top:-400px;">
				<?php
						include "con1.php";
						$conn = mysqli_connect("localhost", "root", "root", "tutorial4all");
						$qry="select * from subtutorial where sname='".$_GET["lname"]."'";
						$res=mysqli_query($conn,$qry);
						while ($row=mysqli_fetch_assoc($res))
						{
						?>
					<section class="panel b-blue" id="1">
					  <article class="panel__wrapper">
						<div class="panel__content">
						<!-- <a href="index.php" style="text-decoration:none;">TurotialHub</a> -->
						  <h1 class="panel__headline"><?php echo $_GET["lname"];?></h1>
						  <div class="panel__block"></div>
						  <p><?php echo $row["stutorial"];?>.</p>
	  <?php } ?></div>
    <!-- jQuery -->
    <script src="sidebar/js/jquery-1.11.2.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="sidebar/js/bootstrap.min.js"></script>
</body>
</html>
