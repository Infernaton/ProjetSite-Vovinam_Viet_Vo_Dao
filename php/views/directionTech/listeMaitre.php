<?php
//affiche pour event
$greatMastersDB = $bdd->getAllMasterByHierarchy("master");
$prezCouncil = $bdd->getPresCouncil();

function modalMaster($master, $id){
    ?>
    <div class="modal fade" id="<?php echo $id?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Maître <?php echo $master['name']?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="text-center">
                        <img style="border-radius:50%;" src="<?php echo $master['pictureProfile']?>" height="400" alt="<?php echo $master['name']?>">
                    </div>
                    <?php 
                    $functions = explode(",",$master['function']);
                    $search = explode(' ', $functions[0]);
                    if ($search[0] == "Ceinture" || $search[0] == "C."){
                        transformToBelt($search,'40');
                    }
                    ?>
                    <ul>
                        <?php 
                        $a = array_pop($functions);
                        foreach ($functions as $func) {
                            echo '<li>'.$func.'</li>';
                        }
                        ?>
                    </ul>
                    <hr>
                    <h3>Biographie Personnelle</h3>
                    <p><?php echo $master['biographyShort']?></p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<link rel="stylesheet" href="css/directionTech.css">

<div class="container">
    <div class="text-center mt-5">
        <h2 class="content-title-blue">Liste Officielle des Ceintures Noires et des Maîtres</h2>
    </div>
    <br>
            
    <!-- Présentation conseil-->
    <div class="selection">
        <h3><span class="ml-3">Président du Conseil des maîtres</span></h3>
        <div class="text-center" data-toggle="modal" data-target="#prez">
            <img alt="Président du conseil" name="president" height="200" src="<?php echo $prezCouncil['pictureProfile']?>"><br>
            <label for="president">Maître <?php echo $prezCouncil['name']?></label>
            <?php 
            $functions = explode(",",$prezCouncil['function']);
            $search = explode(' ', $functions[0]);
            if ($search[0] == "Ceinture" || $search[0] == "C."){
                transformToBelt($search,'20');
            }
            ?>
        </div>
        <?php modalMaster($prezCouncil, "prez")?>
    </div>
    <!-- Tableaux des maitres/membres etc -->
    <div class="selection">
        <br>
        <h5><span class="ml-3">➢ Les Maîtres</span></h5>
        <div class="row">
            <?php
            foreach ($greatMastersDB as $master) {
            ?>
                <div class="col-12 col-sm-6 col-md-4 text-center mb-3" data-toggle="modal" data-target="#m-<?php echo $master['id']?>">
                    <img src="<?php echo $master['pictureProfile']?>" height="200" alt="<?php echo $master['name']?>">
                    <p style="margin-bottom:0;">Maître <?php echo $master['name']?></p>
                    <?php 
                    $functions = explode(",",$master['function']);
                    $search = explode(' ', $functions[0]);
                    if ($search[0] == "Ceinture" || $search[0] == "C."){
                        transformToBelt($search,'20');
                    }
                    ?>
                </div>
                <?php modalMaster($master, "m-".$master['id'])?>
            <?php
            }
            ?>
        </div>
    </div>
<!--
    <div class="selection">
        <br>
        <h5><span class="ml-3">➢ Les Responsables Techniques régionaux</span></h5>
        <div class="row">
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="rep1" src="image.png" alt="Représentant 1">
                <label for="rep1">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="rep2" src="image.png" alt="Représentant 2">
                <label for="rep2">Me .... ......</label>
            </div>
        </div>
    </div>

    <div class="selection">
        <br>
        <h5><span class="ml-3">➢ Les Enseignants</span></h5>
        <div class="row">
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="ense1" src="image.png" alt="Enseignant 1">
                <label for="ense1">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="ense2" src="image.png" alt="Enseignant 2">
                <label for="ense2">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="ense3" src="image.png" alt="Enseignant 3">
                <label for="ense3">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="ense4" src="image.png" alt="Enseignant 4">
                <label for="ense4">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="ense5" src="image.png" alt="Enseignant 5">
                <label for="ense5">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="ense6" src="image.png" alt="Enseignant 6">
                <label for="ense6">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="ense7" src="image.png" alt="Enseignant 7">
                <label for="ense7">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="ense8" src="image.png" alt="Enseignant 8">
                <label for="ense8">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="ense9" src="image.png" alt="Enseignant 9">
                <label for="ense9">Me .... ......</label>
            </div>
        </div>
    </div>

    <div class="selection">
        <br>
        <h5><span class="ml-3">➢ Les Ceintures Noires</span></h5>
        <div class="row">
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="belt1" src="image.png" alt="cn 1">
                <label for="belt1">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="belt2" src="image.png" alt="cn 2">
                <label for="belt2">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="belt3" src="image.png" alt="cn 3">
                <label for="belt13">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="belt4" src="image.png" alt="cn 4">
                <label for="belt4">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="belt5" src="image.png" alt="cn 5">
                <label for="belt5">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="belt6" src="image.png" alt="cn 6">
                <label for="belt6">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="belt7" src="image.png" alt="cn 7">
                <label for="belt7">Me .... ......</label>
            </div>
            <div class="col-sm-4" data-toggle="modal" data-target="#myModal">
                <img name="belt8" src="image.png" alt="cn 8">
                <label for="belt8">Me .... ......</label>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Maitre ....</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    Modal body...
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
-->
</div>