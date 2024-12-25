<?php
include("header1.php");
include("database.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>test</title>

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

<div class="row" >
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><span>User Login Panel</span></div>
					<div class="panel-body">
						<div class="col-md-6" style="margin-left:300px;">
							<form role="form" method="post" action="logindb.php">
							
								<div class="form-group">
									<label>Enter Login ID</label>
									<input type=" text" name="login"  id="loginid2"class="form-control" required placeholder="Enter Login ID">
								</div>
								<div class="form-group">
									<label>Enter Password</label>
									<input type="password" name="pass"  id="pass2"class="form-control" required placeholder="Enter Password">
								</div>
    
     
         <div class="form-group">
									
									<input type="submit" name="Login" id="submit" value="Login" class="btn btn-primary"  placeholder="Insert Language">
                                   <a href="signup.php"> <input type="submit" name="Signup" id="submit" value="signup" class="btn btn-primary"  placeholder="Insert Language"></a>
                                    
								</div>
                                
                                 
                              </form>

		</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

</body>
</html>

								
																
								
																
							
			
	
		

		
					
			

	

</html>
