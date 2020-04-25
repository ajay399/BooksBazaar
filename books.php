<?php

$conn=new mysqli('localhost','id10446080_abc','Ajay@@@@','id10446080_mybook');

?>

<!doctype html>
<html lang="en">
  <head>
  
  <style>
.btn{
	
	background-color:lightgreen;
	color:white;
	font-size:24px;
}

.size
{
	
	width=300px;
	background-color:slateblue;
}
.tb399{
	
	float:left;
	margin-top:2%;
	margin-left:8%;
}

.footer
  {
	  font-size : 20px;
	  background-color:#f5f5f0;
	  height:30%;
	  
  }

</style>
<title>Book Bazaar | Books For You</title>
</head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Book Bazaar | Book For All</title>
  </head>
  <body>


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
<br>


<form method="post" enctype="multipart/form-data">


<?php

$sel="select * from book";
$exe=$conn->query($sel);

while($fetch=$exe->fetch_object())
{
	?>
	
<table class="tb399">
<tr><td><img src="images/<?php echo $fetch->file?>" height="200px" width="200px"></td></tr>
<tr><td>Book Name :<?php echo $fetch->title?></td></tr>
<tr><td>Auhtor Name :<?php echo $fetch->author?></td></tr>
<tr><td><del>Price : Rs.<?php echo $fetch->price?>/-</del></td></tr>
<tr><td>Download It For Free</td></tr>
<td><a href="download.php?download=<?php echo $fetch->bid?>"><img src="download.jpg" height="60px"
width="100px"></a></td>

</table>


<?php

}

?>
</form>

</body>
</html>





