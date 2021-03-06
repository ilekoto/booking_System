<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Patient Details</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
</head>
<body>
	<div class="jumbotron" style="background: url('images/pic5.png')no-repeat;background-size: cover;  height: 300px"></div>
	<div class="containe">
		<div class="card">
				<div class="card-body" style="background-color:#3498DB; color: #ffffff">
					<div class="row">
					<div class="col-md-1">
					<a href="admin-page.php" class="btn btn-light"> Return</a>
				    </div>
					<div class="col-md-3"><h3>Patient Details</h3></div>
				    <div class="col-md-8">
				    	<form class="form-group" action="func.php" method="post">
				    		<div class="row">
				    			<div class="col-md-10">
				    		<input type="text" name="search" class="form-control" placeholder="Enter contact number"></div>
				    		<div class="col-md-2">
				    		<input type="submit" name="patient_search_submit" class="btn btn-light" value="Search"></div></div>
				    	</form>
				    </div> 
				</div></div>
<div class="card-body" style="background-color:#3498DB; color: #ffffff">
<table class="table table-hover">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Contact Details</th>
      <th>Doctor Appointment</th>
    </tr>
  </thead>
  <tbody>
   	  <?php get_patient_details(); ?>	
  </tbody>
</table>
</div>





	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>