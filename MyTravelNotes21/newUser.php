<menu>
  <button onclick="document.location='сreateuser.php'">Вход </button>
  <button onclick="document.location='index.php'">Главная </button>
  <button onclick="document.location='newnote.php'">Новая заметка</button>
  <button onclick="document.location='email.php'">Отправить сообщение</button>
  <button onclick="document.location='photo.php'">Добавить фото </button>
  <button onclick="document.location='inform.php'">Статистика</button>
  <button onclick="document.location='admin.php'"> Администратору </button>
  <button>Выход </button>
</menu>
<?php
require_once('MySiteDB.php');

$login = $_POST['login'];
$password = $_POST['password'];
$rights = $_POST['rights'];

if (($login) && ($password) && ($rights)) {
  $query = "INSERT INTO authors VALUES (NULL, '$login','$password', '$rights')";
  mysqli_query($link, $query);

  header("refresh:1;url=admin.php");
}
?>