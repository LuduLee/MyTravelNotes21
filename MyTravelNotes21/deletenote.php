<?php 
require_once("MySiteDB.php"); 
$note_id = $_GET['note']; 
mysqli_select_db($link, $db); 
 
$query = "DELETE FROM notes WHERE id = $note_id"; 
$res = mysqli_query($link, $query); 
 
//Работа с заголовками (см. документацию php) 
//header("Location: index.php"); 
header( "refresh:5;url = index.php" );  
   echo 'Your note was deleted. You\'ll be redirected in about 5 secs.  
   If not, click <a href=" index.php">here</a>.';  
?>