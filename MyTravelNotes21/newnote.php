<!DOCTYPE html> 
<html> 
  <head> 
    <meta charset="utf-8"> 
    <title>Новая заметка</title> 
  </head> 
  <body> 
    <p>Добавить новую заметку: </p> 
    <form method="post">  
      <input type="text" name="title" size="20" maxlength="20"/> 
      <textarea name="article" cols="55" rows="10"></textarea> 
      <input type="hidden" name = "created"  
      value ="<?php echo date("Y-m-d");?>"/> 
      <input type="submit" name="submit" value="Отправить" 
/> 
    </form> 
    <a href="index.php">Возврат на главную страницу сайта</a> 
  </body>
</html> 
<?php 
//Подключение к серверу
require_once ("MySiteDB.php"); 
 
//Получение данных из формы 
$title = $_POST['title']; 
$created = $_POST['created']; 
$article = $_POST['article']; 
 
if (($title)&&($created)&&($article)) 
  { 
  //Формирование запроса  
  $query = "INSERT INTO notes (id, title, created, article)  
VALUES (NULL, '$title', '$created', '$article')"; 
  //Реализация запроса  
  $result = mysqli_query ($link, $query); 
  } 
?>