<?php include "header.php";?>

<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					
					<h1 class="heading bold">CONTACT US<br />Get In Touch & Ask Question</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 contact-info">
				<h2 class="heading bold">CONTACT US</h2>
				<p style="color:white"><b>TutorialHub.com</b><br/>Gautam Parmar<br/>Roshan Gheenaiya</p>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
					<p><a href="https://mail.google.com/mail/u/0/inbox?compose=CllgCJvlqQtlBBTpVKHlbxhRJqWMfSksdzhgZxMQDZmdhZGmxbnlKFmDRtdLQrfBZPrZZzZKhLV">gp.parmar1999@gmail.com</a><br/><a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJqSvdJXdDzbXpjZSBchBtZcTcpqQBfkqlJNxLQJfJkqhggvfTTXCnmgxvmzmlfptMwvCqB">roshan.gheenaiya4039@gmail.com</a></p>
				</div>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> PHONES</h3>
					<p style="color:white;" >7405814116<br/>7069528634</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<script>
					const setError=(element,errorMessage)=>{
						element.style.color="red";
						element.innerText=errorMessage.toString();
					}

					const clearError=(element,errorMessage)=>{
						element.innerText="";
					} 
					const validateName=(e)=> {
						clearError(document.getElementById("cname_error"));
						if(e.value.length<1) {	
							setError(document.getElementById("cname_error"),"**Name is Required");
							return false;
						}
						else
							return true;
					} 
					const validateMobile=(e)=>{
						clearError(document.getElementById("cnum_error"));
						if(e.value.length!=10 || isNaN(e.value)) {	
							setError(document.getElementById("cnum_error"),"**Invalid Number");
							return false;
						}
						else
							return true;
					} 
					
					const validateEmail=(e)=>{
						clearError(document.getElementById("email_error"));
						 var re = /\S+@\S+\.\S+/;
						if( !re.test(e.value)) {	
							setError(document.getElementById("email_error"),"**Invalid Email (Eg. abc@gmail.com)");
							return false;
						}
						else
							return true;
					} 
					
					const validateQuestion=(e)=>{
						clearError(document.getElementById("q_error"));
						if(e.value.length < 10 || e.value.length>300){	
							setError(document.getElementById("q_error"),"**Question must be between 30-300 chars long");
							return false;
						}
						else
							return true;
					} 
					
					const validate=()=>{
							const form=document.getElementById("form").elements;
							if(validateName(form["cname"])){
								if(validateMobile(form["cnumber"])){
									if(validateEmail(form["cemail"])){
										if(validateQuestion(form["cquestion"])){
									 		return true;
										}
									}
									
								}
							}
								
							
							return false;
					}
				</script>
				<form action="contactusdb.php" method="post" id="form" onsubmit="return validate();" >
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" placeholder="Name" name="cname" >
						<span id="cname_error"></span>
					</div>
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" placeholder="Contact number" name="cnumber" >
						<span id="cnum_error"></span>

					</div>
					<div class="col-md-6 col-sm-6">
						<input type="email" class="form-control" placeholder="Email" name="cemail" >
<span id="email_error"></span>
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="Question" rows="7" name="cquestion" ></textarea>
						<span id="q_error"></span>
					</div>
					<div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
						<input type="submit" name="send message" class="form-control" value="SEND MESSAGE">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Copyright © 2021 TutorialHub, All Rights Reserved </p>
				<hr>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="0.9s"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
