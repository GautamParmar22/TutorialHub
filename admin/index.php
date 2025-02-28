<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TutorialHub</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body style="background-image:url(../images/home-bg-slideshow2.jpg);">
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Admin Access Panel</div>
				<div class="panel-body">
					<form role="form" method="post" action="logindb.php">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="admin_email" type="email" required autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="admin_pass" type="password" required value="">
							</div>
							
							<input type="submit" name="Login" value="login" class="btn btn-primary"/>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
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
<!--
	<script>
	const setError=(element,errorMessage)=>{
						element.style.color="red";
						element.innerText=errorMessage.toString();
					}

					const clearError=(element,errorMessage)=>{
						element.innerText="";
					} 
					const validateName=(e)=> {
						clearError(document.getElementById("email_error"));
						if(e.value.length<1) {	
							setError(document.getElementById("email_error"),"Valid emailid something@gmail.com");
							return false;
						}
						else
							return true;
					} =
				</script>-->
</body>

</html>

