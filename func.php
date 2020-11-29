<?php
$con=mysqli_connect("localhost", "root", "", "BookingDB");
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
    header("Location:idex.php");
}
}

?>