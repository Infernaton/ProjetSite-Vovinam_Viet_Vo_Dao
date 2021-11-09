<?php 
require_once 'management/init.php';

if (isset($_POST, $_POST['mdp'], $_POST["username"])){
    $currentAccount = $bdd->getUserAccessDataByName($_POST["username"]);
    if(isset($currentAccount["password"]) && password_verify($_POST['mdp'], $currentAccount["password"])){
        $_SESSION["currentUser"] = $currentAccount["accountName"];
        $_SESSION["currentPerms"] = $currentAccount["permissionDegre"];
    }else {
        $failed = 'Mauvaise(s) Information(s) fournie(s)';
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
    <?php
    $pop = new PopUp();

    $pop->tutoStylisationTexte();
    if (isset($_SESSION['currentUser'], $_SESSION["currentPerms"])){
        $pages = ['panel','addClub','addMaster','event','sliders','modifyFAQ','calendars','news','organisation', 'userList'];
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
                <h1 class="content-title-red">PANEL ADMIN</h1>
            </div>
            <hr>
            <h3 class="mt-5 mb-5"> Veuillez entrer vos informations pour continuer sur cette page </h3>
            <form action="" method="post" enctype="multipart/form-data">
                <label class="data" for="username">Identifiant</label>
                <input required type="text" name="username" id="username" autocomplete="off" class="inputData form-control">

                <label class="data" for="mdp">Mot de Passe</label>
                <input required type="password" name="mdp" id="mdp" autocomplete="off" class="inputData form-control">
                <?php 
                if (isset($failed)){
                    echo '<p>'.$failed.'</p>';
                }
                ?>
                <div class="text-right">
                    <div id="btn-reset" class="p-2">
                        <button type="submit" value="submit" class="confirm" data-dismiss="modal">Valider</button>
                    </div>
                </div>
            </form>
        </div>
    <?php }?>
</body>
</html>