<?php 

session_start();
include('connection.php');

$new_email =$_SESSION["email"] ;


$query = "SELECT * FROM ELECTOR WHERE email ='$new_email'";

$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);



?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Download Voter ID PDF
	</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<style type="text/css">
		body{
			background: #f7f7f7;
		}
		.bg-grey{
			background: lightgray;
		}	
	</style>
	
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="margin-bottom: 50px;">
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
       <li class="nav-item">
        <div class="dropdown">
  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 300px;">
    Welcome <?php echo $result['firstname']." ".$result['middlename']." ".$result['lastname'] ;?>
  </button>
  <div class="dropdown-menu" style="width: 300px;" aria-labelledby="dropdownMenuButton">
  	<a class="dropdown-item" href="#">Profile</a>
    <a class="dropdown-item" href="#">Change Password</a>
    <a class="dropdown-item" href="logout.php">Logout</a>
  </div>
</div>
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
    <h4><strong>Profile Information</strong></h4>
  </div>
  <div class="card-body" style="margin-top: 10px; margin-bottom: 20px; margin-left: 50px; margin-right: 100px;">
  	<div class="row">
		<form action="pdf.php" onsubmit="return validation()" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-4">
    	<label for="inputfName">First Name</label>
      <input type="text" name="firstname" id="inputfName" class="form-control border-dark" value="<?php echo $result['firstname'];?>" readonly>
    </div>
    <div class="form-group col-md-4">
    	<label for="inputmName">Middle Name</label>
      <input type="text" name="middlename" class="form-control border-dark" id="inputmName" value="<?php echo $result['middlename'];?>" readonly>
    	
    </div>
    <div class="form-group col-md-4">
    	<label for="inputlName">Last Name</label>
      <input type="text" name="lastname" class="form-control border-dark" id="inputlName" value="<?php echo $result['lastname'];?>" readonly>

    </div>
    <div class="form-group col-md-6" style="margin-bottom: 50px;">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control border-dark" id="inputEmail" value="<?php echo $result['email'];?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control border-dark" id="inputPassword"value="<?php echo $result['password'];?>" readonly>
    	
    </div>
  </div>
  
    
     <div class="form-row">
  	<div class="form-group col-md-6">
  		<div class="card border-dark" style="width: 20rem;">
  		<img class="card-img-top" src="<?php echo $result['aadhar'];?>" alt="Card image cap" id="fileToUpload1" height="300px">
  		<div class="card-body">
  			 <h5 class="card-title">Aadhar Card</h5>
    	
  </div>
</div>
	
  	</div>
  	<div class="form-group col-md-6">
  		<div class="card border-dark" style="width: 20rem;">
  <img class="card-img-top" src="<?php echo $result['photo'];?>" alt="Card image cap" id="fileToUpload2" height="300px">
  <div class="card-body">
  	 <h5 class="card-title">Your Picture</h5>
  </div>
</div>
 	</div>
  </div>
  <div class="form-row">
  	<div class="form-group col-md-6">
  	<label for="example-date-input">Date of Birth</label>
  <div class="form-group">
    <input class="form-control" name="dob" type="date" value="<?php echo $result['dob'];?>" readonly id="example-date-input">
  </div>
  	</div>	
  </div>    
  
  <button type="submit" name="submit" class="btn btn-success text-center" style="width: 100%">Download Voter ID</button>
</form>
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>













