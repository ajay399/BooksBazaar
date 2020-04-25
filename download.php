<?php


$conn=new mysqli('localhost','id10446080_abc','Ajay@@@@','id10446080_mybook');

if(isset($_REQUEST['download']));
{

$dow=$_REQUEST['download'];
$sel="select * from book where bid='$dow'";
$exe=$conn->query($sel);

$fetch=$exe->fetch_object();
$dfile3=$fetch->pdf;

header('Content-type:application/pdf');
header('Content-Disposition:attachment;filename="Bookbazaar.pdf"');
readfile('C:\xampp\htdocs\xampp\Book Management System\pdf/'.$dfile3);

}

?>