<?php

$conn=new mysqli('localhost','id10446080_abc','Ajay@@@@','id10446080_mybook');

if(isset($_REQUEST['submit']))
	
	{
		$title=$_REQUEST['title'];
		$price=$_REQUEST['price'];
		$author=$_REQUEST['author'];
		$file=$_FILES['file']['name'];
		$pdf=$_FILES['pdf']['name'];
		$path='images/'.$file;
		$path2='pdf/'.$pdf;
		$tmp_file=$_FILES['file']['tmp_name'];
		$tmp_file2=$_FILES['pdf']['tmp_name'];
		move_uploaded_file($tmp_file,$path);
		move_uploaded_file($tmp_file2,$path2);
		
		
		$ins="insert into book(title,price,author,file,pdf)values('$title','$price','$author','$file','$pdf')";
		$exe=$conn->query($ins);
		if($exe)
		{
			echo "<script>alert('Data Inseted Successfully');</script>";
		}
		else
		{
			echo "<script>alert('Data Insetertion Failed');</script>";
		}
		
		
		
		
		
	}
?>


<!doctype html>
<html>
<head><title>Insert Form</title>
<style>
.table1{
	
	font-size:24px;
	
	
}

.bt
  {
	  
	font-size:20px;
	height:40px;
	width=100px;
	background-color:#3377ff;
	color:white;
	border-radius: 5px;
  }

</style>
</head>
<body>
<center><h1>Welcome Home Admin, Please fill up below given data to insert a book</h1></center>
<form action="" method="post" enctype="multipart/form-data">
<table align="center" class="table1" cellpadding="7">

<tr>
<td>Book Title :</td>
<td><input type="text" name="title" required></td>
</tr>

<tr>
<td>Book Price :</td>
<td><input type="text" name="price" required></td>
</tr>


<tr>
<td>Author Name :</td>
<td><input type="text" name="author" required></td>
</tr>

<tr>
<td>Upload Image :</td>
<td><input type="file" name="file" required></td>
</tr>

<tr>
<td>Upload PDF :</td>
<td><input type="file" name="pdf" required></td>
</tr>


<tr>
<td align="center" colspan="2"><input type="submit" name="submit" class="bt" value="Insert" required></td>
</tr>

</table>

</body>
</html>