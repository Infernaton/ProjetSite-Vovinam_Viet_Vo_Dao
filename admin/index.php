<?php 
require_once 'management/init.php';
session_start();

if($_POST){
    if ($_POST['mdp'] == getAccessAdmin()){
        $_SESSION['success'] = true;
    }
    else {
        unset($_SESSION['success']);
        $_SESSION['try_'.count($_SESSION).''] = 2-count($_SESSION);
        $failed = 'Mauvais mot de passe, '.$_SESSION['try_'.(count($_SESSION)-1).''].' essaie restant.';
        if (count($_SESSION)> 3){
            echo "<script type='text/javascript'> location.href = '../' </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/add.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
</head>
<body>
    <!--Tuto Stylisation de texte-->
<div class="modal fade" id="useSymbols">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Comment Styliser le texte des réponses ?</h3>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Souligner, mettre en gras/italique ... C'est possible de le faire ici pour le rendre plus vivant !</li>
                </ul>
                <p>Mais Comment ? C'est ce que nous allons voir maintenant.</p>
                <h4><ins>Styliser le texte</ins></h4>
                <p>
                    Tout d'abord, il n'est pas possible de styliser la question/titre, cela ne fonctionne qu'avec le contenu. <br>
                    Il est ensuite possible de styliser le texte de 5 manières différentes:<br>
                    <b>Gras</b>, <ins>Soulignement</ins>, <i>Italique</i>, <del>Barré</del>, et <mark class='bg-danger'>Mise en Valeur</mark>. <br> <br>
                </p>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <p>
                            **Texte** → <b>Texte</b> <br>
                            <br>
                            _Texte_ → <ins>Texte</ins>
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <p>
                            *Texte* → <i>Texte</i> <br>
                            <br>
                            --Texte-- → <del>Texte</del>
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <p>
                            [Texte] => <mark class='bg-danger'>Texte</mark>
                        </p>
                    </div>
                </div>
                <p>
                    On peux également fusionner des styles entre eux, par exemple faire un texte en italique et en gras: <br>
                    ***Texte*** → <b><i>Texte</i></b> <br>
                    Ou encore souligné et mettre en gras : <br>
                    _**Texte**_ → <b><ins>Texte</ins></b> <br>
                    Ou même appliquer du style à l'intérieur d'un autre style: <br>
                    *Texte d'exemple, [texte] d'exemple* → <i>Texte d'exemple, <mark class='bg-danger'>texte</mark> d'exemple</i><br>
                    <br>
                    Il n'y a pas vraiment de limite au nombre de style que vous pouvez mettre dans votre document, alors testez par vous même ! <br>
                    <br>
                    Pour finir, en mode Edition, le style choisit ne s'affichera pas, il ne sera montré qu'après avoir validé les nouveaux changements.
                </p>
                <h4><ins>Liens Hypertextes</ins></h4>
                <p>
                    Pour créer des liens cliquables dans votre texte, rien de plus simple, vous avez juste à mettre votre liens où vous le voulez. Et comme pour la stylisation, il sera transformé en liens cliquable apres validation des changements. <br>
                    https://www.exemple_de_liens.fr => <a href="">https://www.exemple_de_liens.fr</a> <br> (<i>Lien d'exemple. Ne fonctionne pas</i>)
                </p>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_SESSION['success'])){
    $pages = ['panel','addClub','addMaster','event','sliders','modifyFAQ','calendars','news'];
    $page = 'panel';
    if (isset($_GET['p'])) {
        if (in_array($_GET['p'],$pages)){
            $page = $_GET['p'];
        }
    }
    require_once 'views/'.$page.'.php';
}else {
    ?>
    <div class="container">
        <div class="text-center">
            <h1 class="content-title-red">PANEL ADMINISTRATEUR</h1>
        </div>
        <hr>
        <h3 class="mt-5 mb-5"> Veuillez entrer le mot de passe pour continuer sur cette page </h3>
        <form action="" method="post" enctype="multipart/form-data">
            <label class="data" for="mdp">Mot de Passe</label>
            <input type="password" name="mdp" id="mdp" autocomplete="off" class="inputData form-control">
            <?php 
            if (isset($failed)){
                echo '<p>'.$failed.'</p>';
            }
            ?>
            <div class="text-right">
                <div id="btn-reset" class="p-2">
                    <button type="submit" value="submit" class="btn-annul annim confirm" data-dismiss="modal">Valider</button>
                </div>
            </div>
        </form>
    </div>
    <?php
}
?>
</body>
</html>