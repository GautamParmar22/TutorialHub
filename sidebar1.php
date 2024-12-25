
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>sidebar</title>
   


<meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/sstyle.css">
    
  </head>

  <body>
    <nav class="nav">
  <div class="burger">
    <div class="burger__patty"></div>
  </div>

  <ul class="nav__list">
  <?php 
	  include "con1.php";
	  $conn = mysqli_connect("localhost", "root", "root", "tutorial4all");
	  $qry="select * from sidebar where sbname='".$_GET["lname"]."'";
	  $res=mysqli_query($conn,$qry);
	  while($row=mysqli_fetch_assoc($res))
	  {
	  ?>
    <li class="nav__item">
      <a href="stutorial.php?sbname=<?php echo $row["sbname"];?>" class="nav__link c-blue"><?php echo $row["sbtutorial"];?>&nbsp;</a>
    </li>
    <?php } ?>
  </ul>
</nav>

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
						<a href="index.php" style="text-decoration:none;">TurotiaHub</a>
						  <h1 class="panel__headline"><?php echo $_GET["lname"];?></h1>
						  <div class="panel__block"></div>
						  <p><?php echo $row["stutorial"];?>.</p>
	  <?php } ?>
    </div>
  </article>
</section>


    <script src='js/sidebar.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
