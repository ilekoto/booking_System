<?php include('func.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
</head>
<body>
<div class="jumbotron" style="background: url('images/pic5.png')no-repeat;background-size: cover;  height: 300px"></div>
<div class="containe-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<a href="" class="list-group-item active" style="background-color:#3498DB; color: #ffffff; border-color: #3498DB">Patients</a>
				<a href="patient_details.php" class="list-group-item">Patient Details</a>
				<a href="" class="list-group-item">Payment/Checkout</a>
			</div>
			<hr>
			<div class="list-group">
				<a href="" class="list-group-item active" style="background-color:#3498DB; color: #ffffff; border-color: #3498DB">Staff</a>
				<a href="" class="list-group-item">Staff Details</a>
				<a href="" class="list-group-item">Add New Staff</a>
				<a href="" class="list-group-item">Remove Staff Member</a>
		    </div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color:#3498DB; color: #ffffff">
					Book an Appointment
				</div>
				<div class="card-body">
					<form class="form-group" action="func.php" method="post">
						<label>First Name :</label>
						<input type="text" name="fname" class="form-control"><br>
						<label>Last Name :</label>
						<input type="text" name="lname" class="form-control"><br>
						<label>Email address :</label>
						<input type="text" name="email" class="form-control"><br>
						<label>Contact :</label>
						<input type="text" name="contact" class="form-control"><br>
						<label>Doctor Appointment:</label>
						<select class="form-control" name="docapp" >
							<option value="Dr Lekoto form 6am to 6pm">Dr Lekoto form 6am to 6pm</option>
							<option value="Dr Tloome form 6am to 6pm">Dr Tloome form 6am to 6pm</option>
						</select><br>
						<input type="submit" class="btn btn-primary"name="patient_submit" value="Enter Appointment" >
					</form>
				</div>
			</div>
			
		</div>
		<div class="col-md-1"></div>
	</div>

</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>