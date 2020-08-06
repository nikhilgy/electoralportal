

<!DOCTYPE html>
<html>
<head>
		<title>NEP: National Electoral Portal</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

	<style type="text/css">
		.bg-grey{
			background: lightgray;
		}
		body{
			background: #f7f7f7;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
 	<div class="container">
	 	<a class="navbar-brand" href="index.php">
		    <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
		    National Electoral Portal
	  	</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
  </div>
 	</div>	
</nav>


<div class="container">
	<div class="row" style="margin-top: 100px;">
		<div class="w-50 mx-auto">
			<div class="card">
 				 <div class="card-header text-center">
    				<h4>Login - To Download Voter ID PDF</h4>	
  				 </div>
  				 <div class="card-body">
    				<form method="POST" onsubmit="return validation()">
    					<div class="form-row">
    						<div class="form-group col-md-4">
    							<label for="inputEmail">Email Address:</label><span class="text-danger font-weight-bold">  *</span>
    						</div>
    						<div class="form-group col-md-8">
    							<input type="email" name="email" class="form-control border-dark" id="inputEmail" placeholder="Email">
    								<span id="email" class="text-danger"></span>    
    						</div>
    					</div>
    					<div class="form-row">
    						<div class="form-group col-md-4">
    							<label for="inputPassword">Password:</label><span class="text-danger font-weight-bold">  *</span>
    						</div>
    						<div class="form-group col-md-8">
    							<input type="password" name="password" class="form-control border-dark" id="inputPassword" placeholder="Password">
    							<span id="pass" class="text-danger"></span>
    						</div>
    					</div>
    					<div class="form-row">
    						<div class="form-group col-md-4">
    							<label for="captcha">Captcha Code:</label><span class="text-danger font-weight-bold">  *</span>
    							

    						</div>
    						<div class="form-group col-md-8">
    							<img src="captcha.php" id="cap" class="cap">
    							<a onclick="window.location.reload()"><img src="images/refresh.png" width="30px" height="30px" style="border-radius: 10%; margin-left: 10px;"></a>
    							<input type="text" name="captcha" autocomplete="off" class="form-control border-dark" id="captcha" placeholder="Enter Captcha" style="margin-top: 10px;">
    							<span id="capt" class="text-danger"></span>
    						</div>
    					</div>
    					<div class="form-row">
    						<div class="form-group col-md-12 text-center">
    							<button type="submit" name="login" class="btn btn-success" style="width: 100%">Login</button>
		
    						</div>
    						
    					</div>

    						<h5 style="margin-top: 20px" class="text-center text-success">Don't Have An Account?<a href="register.php">Register</a></h5>

    				</form>
    				
    				
				 </div>
			</div>
		</div>
	</div>
</div>


<?php	

session_start();
include("connection.php");
	error_reporting(true);

if(isset($_POST["login"])){

$email = $_POST["email"];
$pass = md5($_POST["password"]);

$query = "SELECT * FROM ELECTOR WHERE email='$email' && password='$pass'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


if($total == 1){
	$_SESSION["email"] = $email;
	echo "<script type='text/javascript'>
	alert('Elector Logged In Successfully.');
	window.location.href='home.php';
</script>";

}
else{
	echo "<script type='text/javascript'>
	alert('You Have Entered Wronh Credentials');
	
</script>";
}

}



?>

<div class="row bg-dark foot"  style="margin-top: 20px;">
		<div class="container">
		<div class="row">
			<div class="col-md-8" style="padding-top: 20px;">
			<h5>Contact Us</h5>
		</div>
		<div class="col-md-4" style="padding-top: 20px;">
			<h5>Useful Links</h5>
		</div>	
		</div>
		<div class="row">
			<div class="col-md-8">
				<p>For details of eligibility criteria or any other additional information related to electoral forms, kindly visit <strong><a href="https://eci.gov.in">https://eci.gov.in </a></strong> </p>
			</div>
			<div class="col-md-4">
				<strong><a href="https://eci.gov.in">Election Commission of India</a></strong>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-8">
				<p>For any other technical feedback or issues on the portal kindly send your feedback to <strong><a href="https://eci.gov.in"> ECI Technical Support</a></strong></p>
			</div>
			<div class="col-md-4">
				<strong><a href="#">Chief Electoral Officer</a></strong> 
			</div>
		</div>
		<footer id="contact" class="bg-dark">
	<p>National Elector's Service Portal © Copyright 2020. All Rights Reserved.</p>
</footer>
	</div>	
</div>

	<script type="text/javascript">
  $('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});
</script>   


<script type="text/javascript">

		function validation(){
			var email = document.getElementById('inputEmail').value ;
			var pass = document.getElementById('inputPassword').value;
			var captcha =  document.getElementById('captcha').value;
			
			
		if(email ==''){
			document.getElementById('inputEmail').focus();
			document.getElementById('email').innerHTML = "*Please enter your Email ID*";
			return false;
		}

		if(email.indexOf('@') <=0){
		document.getElementById('inputEmail').focus();
		document.getElementById('email').innerHTML = "*Please enter valid Email ID*";
		return false ;	
	}

	if((email.charAt(email.length-4)!= '.') && (email.charAt(email.length-3)!= '.')){
		document.getElementById('inputEmail').focus();
		document.getElementById('email').innerHTML = "*Please enter valid Email ID*";
		return false ;	
	} 

		if(pass ==''){
			document.getElementById('inputPassword').focus();
			document.getElementById('pass').innerHTML = "*Please enter your Password*";
			return false;	
		}
		if(captcha == ''){
			document.getElementById('captcha').focus();
			document.getElementById('capt').innerHTML = "*Please enter Capctha Code*";
			return false;
		}
		
				
}

	
</script>  
</body>
</html>