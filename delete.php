<?php

$conn=new mysqli('localhost','id10446080_abc','Ajay@@@@','id10446080_mybook');

if(isset($_REQUEST['delete']))
{
	$bookid=$_REQUEST['delete'];
	$del="delete from book where bid='$bookid'";
	$exe=$conn->query($del);
	if($exe)
	{
		
	echo "<script>alert('Data Deleted Successfully');</script>";
	header('location:view.php');
	}
	
	else
	{
		
		
	echo "<script>alert(Data Deletion Failed);</script>";
	header('location:view.php');
	}
	
	
	
	
	
}




?>