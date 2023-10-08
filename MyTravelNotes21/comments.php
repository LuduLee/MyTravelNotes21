<?php require_once("MySiteDB.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
</head>
<body>
    <h1>Комментарии</h1>
<?php

    //Переменной $note_id необходимо присвоить id заметки, 
    //переданной с помощью метода $_GET со страницы default.php
    $note_id = $_GET['note'];
    //Формируем SQL-запрос на выборку с учетом переданного id заметки
    // $query = "SELECT created, title, article FROM notes WHERE id = $note_id";
    $select = "SELECT * FROM comments WHERE art_id = $note_id";
    $select_note = mysqli_query($link, $select);
    //Использование цикла while
    while ($note = mysqli_fetch_array($select_note))
    {
        echo $note['id'], "<br>";
?>
        <a href="comments.php?note=<?php echo $note['id']; ?>"></a>
        <?php 
        echo "Дата создания: ";
        echo $note ['created'], "<br>";?>
        <?php 
        echo "№ автора: ";
        echo $note ['author_id'], "<br>";
        echo "Комментарий: ";
        echo $note ['comment'], "<br>";
        echo "№ статьи: ";
        echo $note ['art_id'], "<br><hr>";
    }
?>  
</body>
<a href="editnote.php?note=<?php echo $note_id; ?>">Изменить заметку 
</a> 
<a href="deletenote.php?note=<?php echo $note_id; ?>">Удалить заметку 
</html>