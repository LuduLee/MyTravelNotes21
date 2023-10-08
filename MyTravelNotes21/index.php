<?php require_once("MySiteDB.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Главная страница сайта</title>
</head>
<body>
<div class="forms">
    <form>
      <input type="button" onclick="document.location='сreateuser.php' " value=" Вход ">
      <input type="button" onclick="document.location='newnote.php' " value="  Новая заметка ">
      <input type="button" onclick="document.location='email.php' " value=" Отправить сообщение ">
      <input type="button" onclick="document.location='photo.php'" value=" Добавить фото ">
      <input type="button" onclick="document.location='inform.php'" value=" Статистика ">
      <input type="button" onclick="document.location='admin.php'" value=" Администраторы ">
      <input type="button" value=" Выход ">
    </form>
    </div>
<p>Рад приветствовать вас на страницах моего сайта, посвященного путешествиям. </p>
<?php
$query = "SELECT * FROM notes";
$select_note = mysqli_query($link, $query);
while ($note = mysqli_fetch_array($select_note))
{
    echo $note['id'], "<br>";
    ?>
    <a href="comments.php?note=<?php echo $note['id']; ?>">
    <?php echo $note ['title'], "<br>";?></a>
    
    <?php
     echo $note ['created'], "<br>";
    echo $note ['article'], "<br>";
    
}
        
?>

<body>
</html>