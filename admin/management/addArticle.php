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
    case 'modify':
        $request = 'UPDATE news SET'.' title="'. $_POST["title"].'", content="'.translateToHTML($_POST["content"]).'", category="'.$_POST["category"].'", author="'.$_POST["author"].'" WHERE id='.(int)$_POST['index'].'';
        $req = $db->prepare($request);
        $req->execute();
        break;
    case 'remove':
        break;
}
//echo "<script type='text/javascript'> history.go(-1); </script>";
?>
<div id="btn-object" class="p-2" style="">
    <a href="../?p=news"><button class="btn-annul annim" type="button" id='undo'>← Retour</button></a>
</div>