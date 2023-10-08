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
require_once("MySiteDB.php");

$login = $_POST['login'];
$password = $_POST['password'];
//echo $login, $password, "<br>";  

if (($login) && ($password)) {
  $query = "SELECT * FROM authors WHERE login = '$login' AND password = '$password'";
  $send_query = mysqli_query($link, $query);
  $user_array = mysqli_fetch_array($send_query);
  $login = $user_array['login'];
  $rights = $user_array['rights'];

  $count = mysqli_num_rows($send_query);
  if ($count > 0) {
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['rights'] = $rights;

    header("refresh:3;url = index.php");
    echo 'Вход на сайт автоматически осуществится через 3 секунды или нажмите <a href="default.php">сюда</a>.';
  } else {
    echo "Извините, Вы не зарегистрированы.";
  }
}
