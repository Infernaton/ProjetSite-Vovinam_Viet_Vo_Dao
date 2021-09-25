<?php
function printRole($function) {
        ?>
        <div class="person">
            <div class="role">
                <h4><?php echo $function['role'];?></h4>
            </div>
            <div class="body d-flex">
                <img class="d-inline" src="<?php echo ($function["picture"] ? $function['picture']: 'assets/img/no-picture.png')?>" alt="image" height="75">
                <div class="d-inline">
                        <h5><?php echo $function["name"];?></h5>
                        <p class=""><?php echo $function["mail"]?></p>
                </div>
            </div>
        </div>
        <?php
}
$function = $bdd->getOrganigramme();

$affectations = array();
foreach($function as $f){
        var_dump($f);
        $affectation = $f['affectation'];

        if (array_key_exists($affectation, $affectations)){ array_push($affectations[$affectation], $f); }
        else { $affectations[$affectation] = [$f];}
}
?>
<link rel="stylesheet" href="css/federation.css">
<div class="container info">
        <div class="text-center"><h1 class="content-title-yellow"> Contacts </h1></div>
        <?php
        foreach ($affectations as $affectation => $list) {
                if($affectation == 'Comités Régionaux'){
                        $affectation .= ' (<a href="?c=federation&p=1#comite">Voir la liste des Comités</a>)';
                }
            ?>
            <div class="border mt-4 p-4">
                <h3><?php echo $affectation?>:</h3>
                <div class="row">
                        <?php
                        foreach ($list as $function) {
                                echo '<div class="col-12 col-md-6">'. printRole($function) .'</div>';
                        }
                        ?>
                </div>
            </div>
            <?php
        }
        ?>

</div>