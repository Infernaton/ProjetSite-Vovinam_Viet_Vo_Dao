<?php
require_once 'init.php';

var_dump($_POST);
date_default_timezone_set('Europe/Paris');

switch ($_POST['submit']){
    case 'add':
        //Prepare to add the object
        $req = $db->prepare('INSERT INTO news (
            title, content, category, date, author
            ) VALUES (:title, :content, :category, :date, :author)');

        $req->bindValue(':title' , $_POST["title"]);
        $req->bindValue(':content' , $_POST["content"]);
        $req->bindValue(':category', $_POST["category"]);
        $req->bindValue(':date' , date('Y-m-d', time()));
        $req->bindValue(':author' , $_POST["author"]);

        $req->execute();
        echo "\n Envoie réussi";

        break;
}
//echo "<script type='text/javascript'> history.go(-1); </script>";
?>