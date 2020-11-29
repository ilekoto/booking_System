 <?php #include('func.php');
 require_once "func.php";
 		if (empty($_SESSION['username'])) {
 			# code...
 			#header('location: index.php');
 		}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 </head>
 <style type="text/css">
 	#ab1:hover{cursor:pointer;} 
 </style>
 <body style="background:url(images/pic7.jpg)no-repeat; background-size:cover; ">
 <div class="container" style="width:400px;margin-top:100px ">
 	<div class="card">
 		<img src="images/pic6.png" class="card-img-top">
 		<div class="card-body">

   <form class="form-group" action="func.php" method="post">
   	<label> Username :</label><br>
   	<input type="text" name="username" class="form-control" placeholder="Enter username"><br>
   	<label> Password :</label><br>
   	<input type="text" name="password" class="form-control" placeholder="Enter password"><br>
   	<input type="submit" name="login_submit" id="ab1" class="btn btn-primary">

   </form>
 </div>
 </div>
 </div>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 </body>
 </html>
