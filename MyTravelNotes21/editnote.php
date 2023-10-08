<?php 
$note_id = $_GET['note']; 
     require_once ("MySiteDB.php"); 
$query = "SELECT * FROM notes WHERE id = $note_id"; 
$result = mysqli_query ($link, $query); 
$edit_note = mysqli_fetch_array ($result); 
?> 
 
<!DOCTYPE html>
<html> 
<head> 
<meta charset="utf-8"> 
</head> 
<body> 
<form method="post"> 
<p>Заголовок заметки: <input type="text" name="title"  
value = "<?php echo $edit_note['title'];?>" /></p> 
<p>Текст заметки: <textarea  name="article"> 
<?php echo $edit_note['article'];?></textarea></p>  
<input type="submit" name="submit" value="Изменить" /> 
</form> 
 
<a href = "index.php"> На главную </a> 
 
</body> 
</html> 
 
<?php 
$title = $_POST['title']; 
$article = $_POST['article']; 
$update_query = "UPDATE notes SET title = '$title', article = '$article' 
          WHERE id = $note_id"; 
$update_result = mysqli_query ($link, $update_query); 
?>