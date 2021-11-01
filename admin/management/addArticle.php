<?php
require_once 'init.php';

//var_dump($_POST);
date_default_timezone_set('Europe/Paris');

switch ($_POST['submit']){
    case 'add':
        $count = $bdd->countAllNews();
        $bdd->addNews(
            ["id"=>(int)$count['COUNT(*)']+1, 
            "title"=>$_POST["title"], 
            "content"=>translateToHTML($_POST["content"]), 
            'category'=>$_POST["category"],
            'date'=>date('Y-m-d', time()),
            'author'=>$_POST["author"],]
        );
        echo "\n Envoie réussi";
        break;
    case 'modify':
        $bdd->modifyNews(
            ["id"=>(int)$_POST['index'],
            "title"=>$_POST["title"], 
            "content"=>translateToHTML($_POST["content"]), 
            'category'=>$_POST["category"],
            'author'=>$_POST["author"],]
        );
        break;
    case 'remove':
        $bdd->delNews($_POST["index"]);
        break;
}
echo "<script type='text/javascript'> location.href = '../?p=news' </script>";
?>
<div id="btn-object" class="p-2" style="">
    <a href="../?p=news"><button class="btn-annul annim" type="button" id='undo'>← Retour</button></a>
</div>