
<?php 

include("connection.php");

?>	




<!DOCTYPE html>
<html>
<head>
	<title>Register Elector: Register a new candidate as an voter. </title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	
	<style type="text/css">
		body{
			background: #f7f7f7;
		}
		.bg-grey{
			background: lightgray;
		}
	</style>
	<script src="custom.js"></script>
	

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
		<div class="w-75 mx-auto">

			<div class="card">
  <div class="card-header text-center bg-grey">
    <h4><strong>Registration Information</strong></h4>
  </div>
  <div class="card-body" style="margin-top: 10px; margin-bottom: 20px; margin-left: 50px; margin-right: 100px;">
  	<div class="row">
		<form action="" onsubmit="return validation()" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-4">
    	<label for="inputfName">First Name</label><span class="text-danger font-weight-bold">  *</span>
      <input type="text" name="firstname" id="inputfName" class="form-control border-dark" placeholder="First name">
      <span id="firstname" class="text-danger"></span>
    </div>
    <div class="form-group col-md-4">
    	<label for="inputmName">Middle Name</label><span class="text-danger font-weight-bold">  *</span>
      <input type="text" name="middlename" class="form-control border-dark" id="inputmName" placeholder="Middle name">
    	<span id="mname" class="text-danger"></span>
    </div>
    <div class="form-group col-md-4">
    	<label for="inputlName">Last Name</label><span class="text-danger font-weight-bold">  *</span>
      <input type="text" name="lastname" class="form-control border-dark" id="inputlName" placeholder="Last name">
		<span id="lname" class="text-danger"></span>    
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label><span class="text-danger font-weight-bold">  *</span>
      <input type="email" name="email" class="form-control border-dark" id="inputEmail" placeholder="Email">
		<span id="email" class="text-danger"></span>    
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label><span class="text-danger font-weight-bold">  *</span>
      <input type="password" name="password" class="form-control border-dark" id="inputPassword" placeholder="Password">
    	<span id="pass" class="text-danger"></span>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label><span class="text-danger font-weight-bold">  *</span>
    <input type="text" class="form-control border-dark" id="inputAddress1" placeholder="1234 Main St">
    <span id="address1" class="text-danger"></span>
  </div>
  <div class="form-row">
	  <div class="form-group col-md-8">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control border-dark" id="inputAddress2" placeholder="Apartment, studio, or floor(optional)">
   <span id="address2" class="text-danger"></span>
  </div>
  <div class="form-group col-md-4">
  	<label for="inputNation">Nationality</label><span class="text-danger font-weight-bold">  *</span>
    <input type="text" class="form-control border-dark" id="inputNation" value="Indian" readonly>
  </div>  	
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">State</label><span class="text-danger font-weight-bold">  *</span>
            <select id="state" class="form-control border-dark">
        
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputDistrict">District</label><span class="text-danger font-weight-bold">  *</span>
      <select id="district" class="form-control border-dark">
        
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">City</label><span class="text-danger font-weight-bold">  *</span>
          <input type="text" class="form-control border-dark" id="inputCity" placeholder="City">  
        <span id="city" class="text-danger"></span>
      </select>
    </div>
  </div>

  </div>
  <div class="form-row">
  	<div class="form-group col-md-6">
  		<div class="card border-dark" style="width: 20rem;">
  		<img class="card-img-top" src="images/white.jpg" alt="Card image cap" id="fileToUpload1" height="300px">
  		<div class="card-body">
  			 <h5 class="card-title">Upload Your Aadhar Card</h5>
    	<input type="file" name="fileToUpload1" id="file1" onchange="loadfile1(event)">
  		
  </div>
</div>
		<span id="acard" class="text-danger"></span>
  	</div>
  	<div class="form-group col-md-6">
  		<div class="card border-dark" style="width: 20rem;">
  <img class="card-img-top" src="images/white.jpg" alt="Card image cap" id="fileToUpload2" height="300px">
  <div class="card-body">
  	 <h5 class="card-title">Upload Your Photo</h5>
    <input type="file" name="fileToUpload2" id="file2" onchange="loadfile2(event)">
  
  </div>
</div>
	<span id="photo" class="text-danger"></span>
  	</div>
  </div>
  <div class="form-row">
  	<div class="form-group col-md-6">
  	<label for="example-date-input">Date of Birth</label><span class="text-danger font-weight-bold">  *</span>
  <div class="form-group">
    <input class="form-control" name="dob" type="date" value="YYYY-MM-DD" id="example-date-input">
  </div>
  	
  	
  		<div class="form-group">
    <div class="form-check">
      <input id="checkbox" class="form-check-input" type="checkbox" id="gridCheck">
      
      <label class="form-check-label" for="gridCheck">
        I hereby agree to Terms and Conditions.
      </label>
      <span id="check" class="text-danger"></span>
    </div>
  </div>
  	</div>	
  </div>    
  
  <button type="submit" name="submit" class="btn btn-success text-center" style="width: 100%">Register</button>
</form>

	<h5 style="margin-top: 20px" class="text-center text-success">Already a Registered User? <a href="login.php">Sign In!</a></h5>


	</div>
  </div>
</div>			
		</div>		
	</div>
</div>

<!-- <div class="container" >
	
</div>

 -->


</div>	
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
	function loadfile1(event){
		var file1=document.getElementById('fileToUpload1');
		

		file1.src=URL.createObjectURL(event.target.files[0]);
		
	};
	function loadfile2(event){

		var file2 = document.getElementById('fileToUpload2');
		file2.src=URL.createObjectURL(event.target.files[0]);

	};
</script>
<script type="text/javascript">
		
function validation()
{
	var fname = document.getElementById('inputfName').value ; 
	var mname = document.getElementById('inputmName').value ;
	var lname = document.getElementById('inputlName').value ; 
	var email = document.getElementById('inputEmail').value ;
	var password = document.getElementById('inputPassword').value ;
	var address1 = document.getElementById('inputAddress1').value ;
	var address2 = document.getElementById('inputAddress2').value ;
	var city = document.getElementById('inputCity').value ;

	var check = document.getElementById('checkbox').checked;


	var file1 = document.getElementById('file1').value ;
	var file2 = document.getElementById('file2').value ;


	
	if(fname == ""){
		document.getElementById('inputfName').focus();
		document.getElementById('firstname').innerHTML = "*Please fill your First Name*";
		return false ;
	}

	if((fname.length <=2) || (fname.length > 20)){
		document.getElementById('inputfName').focus();
		document.getElementById('firstname').innerHTML = "*Name must be  between 2 & 20 characters.*";
		return false ;
	}

	if(!isNaN(fname)){
		document.getElementById('inputfName').focus();
		document.getElementById('firstname').innerHTML = "*Only Alphabets are allowed*";
		return false ;

	}

	if(mname == ""){
		document.getElementById('inputmName').focus();
		document.getElementById('mname').innerHTML = "*Please fill your Middle Name*";
		return false ;
	}

	if((mname.length <=2) || (mname.length > 20)){
		document.getElementById('inputmName').focus();
		document.getElementById('mname').innerHTML = "*Name must be  between 2 & 20 characters.*";
		return false ;
	}

	if(!isNaN(mname)){
		document.getElementById('inputmName').focus();
		document.getElementById('mname').innerHTML = "*Only Alphabets are allowed*";
		return false ;

	}

	if(lname == ""){
		document.getElementById('inputlName').focus();
		document.getElementById('lname').innerHTML = "*Please fill your Last Name*";
		return false ;
	}

	if((lname.length <=2) || (lname.length > 20)){
		document.getElementById('inputlName').focus();
		document.getElementById('lname').innerHTML = "*Name must be  between 2 & 20 characters.*";
		return false ;
	}

	if(!isNaN(lname)){
		document.getElementById('inputlName').focus();
		document.getElementById('lname').innerHTML = "*Only Alphabets are allowed*";
		return false ;

	}

	if(email == ""){
		document.getElementById('inputEmail').focus();
		document.getElementById('email').innerHTML = "*Please fill your Email ID*";
		return false ;
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

	if(password == ""){
		document.getElementById('inputPassword').focus();
		document.getElementById('pass').innerHTML = "*Please enter your password*";
		return false ;
	}


	if((password.length <=5) || (password.length > 20)){
		document.getElementById('inputPassword').focus();
		document.getElementById('pass').innerHTML = "*Password must be  between 5 & 20 characters.*";
		return false ;
	}

	if(address1 == ""){
		document.getElementById('inputAddress1').focus();
		document.getElementById('address1').innerHTML = "*Please fill your address*";
		return false ;
	}

	if(city == ""){
		document.getElementById('inputCity').focus();
		document.getElementById('city').innerHTML = "*Please fill your city*";
		return false ;
	}

	 var allowedExtensions =  
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i; 
              
            if (!allowedExtensions.exec(file1)) { 
                document.getElementById('acard').innerHTML="*Only JPG, JPEG , PNG & GIF format files allowed.*" 
                file1.value = ''; 
                return false; 
            }  


            if (!allowedExtensions.exec(file2)) { 
                document.getElementById('photo').innerHTML="*Only JPG, JPEG , PNG & GIF format files allowed.*" 
                file2.value = ''; 
                return false; 
            }  

	if(!check){
		document.getElementById('checkbox').focus();
		document.getElementById('check').innerHTML="*Please agree for the checkbox.*";
		return false;	

	}
}
	</script>
<?php 
if(isset($_POST['submit']))
{
	$fname = $_POST['firstname'];

$mname = $_POST['middlename'];

$lname = $_POST['lastname'];

$email = $_POST['email'];

$password = md5($_POST['password']);

$dob = $_POST['dob'];


mkdir("uploads/".$email);

$aadhar = $_FILES['fileToUpload1']['name'];
$file1 = $_FILES['fileToUpload1']['tmp_name'];



$photo = $_FILES['fileToUpload2']['name'];
$file2 = $_FILES['fileToUpload2']['tmp_name'];

$folder1 = "uploads/".$email."/".$aadhar ;
$folder2 = "uploads/".$email."/".$photo ;

move_uploaded_file($file1, $folder1);
move_uploaded_file($file2, $folder2);

$query = "INSERT into elector (ID,firstname,middlename,lastname,email,password,dob,aadhar,photo) values ('','$fname','$mname','$lname','$email','$password','$dob','$folder1','$folder2')" ;
$data = mysqli_query($conn,$query);

if($data)
{
	echo "<script type='text/javascript'>
	alert('Elector Registered Successfully. Now Login to Download Voter ID.');
	window.location.href='login.php';
</script>";

}

}

 ?>

</body>
</html>