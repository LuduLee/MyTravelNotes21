
<?php
// Если была нажата кнопка "Отправить"
if ($_POST['submit']) {
        $title = substr(htmlspecialchars(trim($_POST['title'])), 0, 1000);
        $mess =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1000000);
        // $to - кому отправляем
        $to = 'test@test.ru';
        // $from - от кого
        $from='test@test.ru';
        // функция, которая отправляет наше письмо
        mail($to, $title, $mess, 'From:'.$from);
        echo 'Ваше письмо отправлено';
}
?>
<form action="" method=post>

<p>Введите текст: <p>
              <div align="center">
              Teма Cообщения<br />
              <input type="text" name="title" size="40"><br />
              Сообщение<br />
              <textarea name="mess" rows="10" cols="40"></textarea>
              <br />
              <input type="submit" value="Отправить" name="submit"></div>
              <a href="index.php">На главную страницу сайта</a>
</form>