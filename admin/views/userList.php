<?php

if (isset($_POST, $_POST["passwordAccess"], $_POST["permission"], $_POST["nameAccess"])){
    $success = $bdd->insertAccessAdmin([
        "name"=>$_POST["nameAccess"], "password"=>$_POST["passwordAccess"], "perms"=>$_POST["permission"],
    ]);
}

$allUserAdmin = $bdd->getAllUserAdmin();

$pop->addUserAccessPopUp();

function tableAccess($arr){
    ?>
        <table>
            <thead>
                <tr>
                    <th>Nom du Compte</th>
                    <th>Permission</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($arr as $row){
                    ?>
                    <tr>
                        <th><?php echo $row["accountName"]?></th>
                        <th><?php echo $row["permissionDegre"]?></th>
                        <th><button data-toggle="modal" data-target="#modifyAccess">Modifier</button></th>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    <?php
}

?>

<div class="container">
    <h1>Liste des Accès Utilisateurs</h1>
    <div class="text-center">
        <button type="button" data-toggle="modal" data-target="#addAccessUser">
            <h4>+ Ajouter un nouvel accès</h3>
        </button>
    </div>
    <?php tableAccess($allUserAdmin);?>
</div>