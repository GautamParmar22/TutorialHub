<?php
include("header.php");
include("database.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Forms</title>

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
<head>
<title>New user signup </title>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>

 <table width="100%" border="0">
   <tr>
     <td width="132" rowspan="2" valign="top"><span class="style8"></span></td>
     <td width="468" height="57"><h1 align="center"><span class="style8"><div class="panel-heading"><span></span></div></span></h1></td>
   </tr>
   <tr>
     <td>
     <div class="row" >
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><span>Signup Here</span></div>
					<div class="panel-body">
						<div class="col-md-6">
                        <form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
                       			 <div class="form-group">
									<label>Enter Login ID</label>
									<input type=" text" name="lid"  class="form-control" required placeholder="Insert Login ID" value="<?php echo $uid=rand(99999,10000); ?>" readonly=""/>
								</div>
                                <div class="form-group">
									<label>Enter Pass</label>
									<input type="password" name="pass"  class="form-control" required placeholder="Insert Password"/>
								</div>
                                 <div class="form-group">
									<label>Enter Confirm Password</label>
									<input type="password" name="cpass" id="cpass" class="form-control" required placeholder="Insert confirm password"/>
								</div>
      							<div class="form-group">
									<label>Enter Name</label>
									<input type="text" name="name" id="name" class="form-control" required placeholder="Insert Name"/>
								</div>
         						<div class="form-group">
									<label>Enter Address</label>
									<input type="text" name="address" id="address" class="form-control" required placeholder="Insert Address"/>
								</div>
         						<div class="form-group">
									<label>Enter  city</label>
									<input type="text" name="city" id="city" class="form-control" required placeholder="Insert City"/>
								</div>
         						<div class="form-group">
									<label>Enter Phone</label>
									<input type="text" name="phone" id="phone" class="form-control" required placeholder="Insert Mobile Number"/>
								</div>
         						<div class="form-group">
									<label>Enter Email</label>
									<input type="text" name="email" id="email" class="form-control" required placeholder="Insert Email Address"/>
								</div>
         						 <div class="form-group">	
									<input type="submit" name="Login"  value="signup" class="btn btn-primary"  placeholder="Insert Language">&nbsp;&nbsp;&nbsp; Already Signup?&nbsp;<a  href="index.php"><input type="submit" name=" Login Here"  value=" Login Here" class="btn btn-primary"  placeholder="Insert Language"></a>
                                    </div>
         						
     </form>
  
 <p>&nbsp; </p>
 </div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
</body>
</html>
