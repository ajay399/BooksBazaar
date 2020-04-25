<?php
$conn=new mysqli('localhost','id10446080_abc','Ajay@@@@','id10446080_mybook');

$sel="select * from book";
$exe=$conn->query($sel);




?>



<!doctype html>
<head>
<title>View Books</title>
<style>
.table1{
	
	font-size:24px;
	
	
}
</style>

</head>
<body>
<table align="center" border="2" class="table2" cellpadding="7">
<tr>
<th>Book ID</th>
<th>Book Title</th>
<th>Book Price</th>
<th>Book Author</th>
<th>Book Image</th>
<th>Pdf</th>
<th>Delete</th>
<th>Update</th>
</tr>
<?php
while($fetch=$exe->fetch_object())
{
	?>
<tr>
<td><?php echo $fetch->bid?></td>
<td><?php echo $fetch->title?></td>
<td>Rs.<?php echo $fetch->price?>/-</td>
<td><?php echo $fetch->author?></td>
<td><img src="images/<?php echo $fetch->file?>" height="50px" width="100px"</td>
<td><?php echo $fetch->pdf?></td>
<td><a href="delete.php?delete=<?php echo $fetch->bid?>"><img src="delete.png" height="35px"
width="30px"></a></td>

<td><a href="edit.php?edit=<?php echo $fetch->bid?>"><img src="edit.png" height="35px"
width="30px"></a></td>
</tr>
<?php

}

?>

</table>
</body>
</html>