<!doctype html>
<html lang="en">
  <head>
  
  <style>
  .bt
  {
	  
	font-size:20px;
	height:40px;
	width=100px;
	background-color:#3377ff;
	color:white;
	border-radius: 5px;
  }
  
  .footer
  {
	  font-size : 20px;
	  background-color:#f5f5f0;
	  height:30%;
	  
  }
  
  
  </style>
  
  
  
  <script>
  
  function raw()
{
  document.getElementById('reg').style.display="none";
  document.getElementById('log').style.display="none";
  
}

function show()

{
	
	document.getElementById('reg').style.display="block";
	document.getElementById('log').style.display="none";
	
}

function show2()

{
	document.getElementById('reg').style.display="none";
	document.getElementById('log').style.display="block";
	
}
</script>

  
  
  </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Book Bazaar | Books For You</title>
  </head>
  <body onload="javascript:raw()">
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Book Bazaar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
</nav>
  
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bb.png" class="d-block w-100" alt="..." height="400px" width="400px">
    </div>
    
  </div>
  
  
  <br>
  <br>
  <center>New User ? <button type="button" class="btn btn-primary" onclick="show()">Register Now</button> 
  Already have an account ? <button type="button" onclick="show2()" class="btn btn-primary">Login</button></center>
  <br><br>
  <form method="post" id="reg">
  <table align="center" cellpadding="7">
  <tr><td>Full Name</td><td><input type="text" name="fullname" required></td></tr>
  <tr><td>E-mail</td><td><input type="email" name="email" required></td></tr>
  <tr><td>Mobile</td><td><input type="text" name="mobile" maxlength="10" required></td></tr>
  <tr><td>Password</td><td><input type="password" name="password" required></td></tr>
  <tr><td align="center" colspan="2">
  <input type="submit" value="Register" name="reg" class="bt">
</td></tr>  
</table>
</form>

<form method="post" id="log">
  <table align="center" cellpadding="7">
  <br>
  <tr><td>E-mail</td><td><input type="text" name="email" required></td></tr>
  <tr><td>Password</td><td><input type="password" name="password" required></td></tr>
  <tr><td align="center" colspan="2"><input type="submit" value="Login" name="logbtn" class="bt">
</td></tr>  
</table>
</form>

<div class="footer">
<center>Book Bazaar @2019 | All Rights Reserved</div></center>

  </body>
</html>




<?php

$conn=new mysqli('localhost','id10446080_abc','Ajay@@@@','id10446080_mybook');

if(isset($_REQUEST['reg']))
{
	
	
	$fullname=$_REQUEST['fullname'];
	$email=$_REQUEST['email'];
	$mobile=$_REQUEST['mobile'];
	$password=$_REQUEST['password'];
	
	
$ins="insert into reg(fullname,email,mobile,password) values('$fullname','$email','$mobile','$password')";
	$exe=$conn->query($ins);
	if($exe)
		{
			?>
		<script>
		alert("hii");
		window.location="index.php";
		</script>
		<?php
		}
		else
		{
			echo "<script>alert(Invalid Username Or Password');</script>";
		}
			
			
	
	



}

if(isset($_REQUEST['logbtn']))
{
	
	
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	
	$sel="select * from reg where email='$email' and password='$password'";
	$sel2="select * from admin where anm='$email' and pass='$password'";
	$exe=$conn->query($sel);
	$exe2=$conn->query($sel2);
	$fetch=$exe->fetch_object();
	if($exe)
	{
		$chk=$exe->num_rows;
		if($chk==1)
		{
		
		?>
		<script>
		alert("hii");
		window.location="books.php";
		</script>
		<?php
		}
	}
	else
	{
		
	
	echo "<script>alert('Invalid Details');</script>";
	}
	if($exe2)
	{
		 $chk2=$exe2->num_rows;
		if($chk2==1)
		{
		
		?>
		<script>
		alert("hii");
		window.location="adminhouse.php";
		</script>
		<?php
		}
	}
	else
	{
		
	
	echo "<script>alert('Invalid Details');</script>";
	}
	
}

?>

