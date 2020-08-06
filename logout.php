<?php 

session_start();
session_unset();


echo "<script type='text/javascript'>
	alert('Elector Logged Out Successfully.');
	window.location.href='index.php';
</script>";


 ?>