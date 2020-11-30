<?
include_once("controller/book.php");  
$GLOBALS['link'] = mysqli_connect("localhost", "telbook", "1", "tel_book");

$book = new book();  
$book->main();  

?>