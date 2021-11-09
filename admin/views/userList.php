<?php
$allUserNotSupAdmin = $bdd->getAllUserNotSupAdmin();

?>

<div class="container">
    <h1>Liste des Accès Utilisateurs</h1>
    <?php var_dump($allUserNotSupAdmin);?>
</div>