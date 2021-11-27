<?php
if (isset($_POST, $_POST["passwordAccess"], $_POST["permission"], $_POST["nameAccess"])){
    $success = $bdd->insertAccessAdmin([
        "name"=>$_POST["nameAccess"], "password"=>$_POST["passwordAccess"], "perms"=>$_POST["permission"],
    ]);
}
elseif(isset($_POST, $_POST["newPassword"])){
    $success = $bdd->updatePasswordAdmin([
        "id"=>$_POST["idAccess"], "newPassword"=>$_POST["newPassword"],
    ]);
}
elseif(isset($_POST, $_POST["deleteAccessInput"])){
    $success = $bdd->deleteAccessAdminAccount($_POST["idAccess"]);
}

$allUserAdmin = $bdd->getAllUserAdmin();

$pop->addUserAccessPopUp();
$pop->modifyPasswordPopUp();
$pop->deleteAccessPopUp();

function tableAccess($arr){
    ?>
        <table class="table">
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
                        <th>
                            <button data-toggle="modal" data-target="#modifyPwdPopUp" onclick="getAccessIdForModify(<?php echo $row["id"].", '". $row["accountName"]."'" ?>)">Modifier mot de passe</button>
                            <button data-toggle="modal" class="undo"  data-target="#delAccessPopUp" <?php echo ($row["permissionDegre"]>= 10 ? "disabled": ""); ?>
                                onclick="getAccessIdForDelete(<?php echo $row["id"].", '". $row["accountName"]."'"?>)">Supprimer Accès</button>
                        </th>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    <?php
}

?>

<div class="container">
    <div id="btn-object" class="p-2" style="">
        <a href="../admin"><button class="btn-annul annim" type="button" id='undo'>← Retour</button></a>
    </div>
    <h1>Liste des Accès Utilisateurs</h1>
    <div class="text-center">
        <button type="button" data-toggle="modal" data-target="#addAccessUser">
            <h4>+ Ajouter un nouvel accès</h3>
        </button>
    </div>
    <?php tableAccess($allUserAdmin);?>
</div>