<?php

$conn=new mysqli('localhost','id10446080_abc','Ajay@@@@','id10446080_mybook');
$bookid=$_REQUEST['edit'];
echo $bookid;


if(isset($_REQUEST['edit']))
{
	
	
	
	$sel="select * from book where bid='$bookid'";
	$exe=$conn->query($sel);
	$fetch=$exe->fetch_object();
	
	
}	


if(isset($_REQUEST['submit']))
   {

        $title=$_REQUEST['title'];
		$price=$_REQUEST['price'];
		$author=$_REQUEST['author'];
		$file=$_FILES['file']['name'];
		$path='images/'.$file;
		$tmp_file=$_FILES['file']['tmp_name'];
		move_uploaded_file($tmp_file,$path);
		
$upd="update book set title='$title',price='$price',author='$author',file='$file' where bookid='$bookid'";
		$exe2=$conn->query($upd);
		if($exe2)
	       {
		
			echo "<script>alert('Data Deleted Successfully');</script>";
			header('location:view.php');
			}
	
			else
			{
		
		
			echo "<script>alert(Data Deletion Failed);</script>";
			header('location:insert.php');
	}
	
}		

?>

<html>
<head>
</head>
<form method="post" action="" enctype="multipart/form-data">
<table align="center">
<tr>
<td>Book Title :</td>
<td><input type="text" name="title" value="<?php echo $fetch->title?>" required></td>
</tr>

<tr>
<td>Book Price :</td>
<td><input type="text" name="price" value="<?php echo $fetch->price?>" required></td>
</tr>


<tr>
<td>Author Name :</td>
<td><input type="text" name="author" value="<?php echo $fetch->author?>" required></td>
</tr>

<tr>
<td>Image</td>
<td><img src="images/<?php echo $fetch->file?>" height="50" width="80"></td>
</tr>

<tr>
<td>Upload Image :</td>
<td><input type="file" name="file" value="<?php echo $fetch->file?>" required></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="Save Changes"</td>
</tr>

</table>
</form>
<body>
</body>
</html>