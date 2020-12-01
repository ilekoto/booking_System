<?php
$con=mysqli_connect("localhost", "root", "", "bookingdb");
if(isset($_POST['login_submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from login where username='$username' and password='$password'";	
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	header("Location:admin-page.php");
}
else
{
	echo "<script>alert ('Enter Correct deatails')</script>";
    echo "<script>window.open('index.php','_self')</script>";

}
}
if(isset($_POST['patient_submit'])){
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$email =$_POST['email'];
$contact =$_POST['contact'];
$docapp =$_POST['docapp'];
$query="insert into docappontment(fname,lname,email,contact ,docapp) values('$fname','$lname','$email','$contact','$docapp')";
$result = mysqli_query($con,$query);
if($result)
{
	echo "<script>alert ('Appointment Booked')</script>";
    echo "<script>window.open('admin-page.php','_self')</script>";
}

}
function get_patient_details(){
global $con;
$query="select * from docappontment";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{

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
      <td>$contact</td>
      <td>$docapp</td>s
    </tr>

	";
}

}


?>