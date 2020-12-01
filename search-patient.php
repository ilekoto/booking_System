<!DOCTYPE html>
<html>
<head>
	<title>Patient Details</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
</head>
<body>
<?php
include("func.php");
if (isset($_POST['patient_search_submit'])) {
	$contact=$_POST['search'];
	$query="select * from docappontment where contact = '$contact'";
	$result=mysqli_query($con,$query);
	echo "<div class='container-fluid'
	<div class'card'>
	<img src='images/pic5.png' class'card-img-top'>
    <div class='card-body' style='background-color:#3498DB; color: #ffffff'>
    <table class='table table-hover'>
    <thead>
    <tr>
      <th >First Name</th>
      <th >Last Name</th>
      <th >Email</th>
      <th >Contact Details</th>
      <th >Doctor Appointment</th>
    </tr>
  </thead>
  <tbody> 
  ";
	while ($row=mysqli_fetch_array($result)) {
	$fname =$row['fname'];
	$lname =$row['lname'];
	$email =$row['email'];
	$contact =$row['contact'];
	$docapp =$row['docapp'];
	echo "
		<tr>
		<td>$fname</td>
		<td>$lname</td>
		<td>$email</td>
		<td>$contac</td>
		<td>$docapp</td>
		</tr>
	";


	}
	echo "</tbody></table></div></div></div>";
}


?>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
