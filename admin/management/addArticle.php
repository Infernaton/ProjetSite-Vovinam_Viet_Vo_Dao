<?php
require_once 'init.php';

//var_dump($_POST);
date_default_timezone_set('Europe/Paris');

switch ($_POST['submit']){
    case 'add':
        $req = $db->query('SELECT COUNT(*) FROM news');
        $count = $req->fetch(PDO::FETCH_ASSOC);
        //Prepare to add the object
        $req = $db->prepare('INSERT INTO news (
            id, title, content, category, date, author
            ) VALUES (:id, :title, :content, :category, :date, :author)');

        $req->bindValue(':id', (int)$count['COUNT(*)']+1);
        $req->bindValue(':title' , $_POST["title"]);
        $req->bindValue(':content' , translateToHTML($_POST["content"]));
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
        $request = 'DELETE FROM `news` WHERE `id` ='.(int)$_POST['index'];
        $req = $db->prepare($request);
        $req->execute();
        $req = $db->query('SELECT id FROM news WHERE id >'.(int)$_POST['index']);
        $news = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($news as $new){
            $request = 'UPDATE news SET'.' id="'.((int)$new['id']-1).'" WHERE id='.(int)$new['id'].'';
            $req = $db->prepare($request);
            $req->execute();
        }
        break;
}
echo "<script type='text/javascript'> location.href = '../?p=news' </script>";
?>
<div id="btn-object" class="p-2" style="">
    <a href="../?p=news"><button class="btn-annul annim" type="button" id='undo'>← Retour</button></a>
</div>