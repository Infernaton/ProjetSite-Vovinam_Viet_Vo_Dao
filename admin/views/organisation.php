<?php
    $allMaster = $bdd->getAllMastersNameNotDead();

    if ($_POST){
        //var_dump($_POST);
        $currentMaster = $bdd->getDataMasterByName($_POST['name']);

        switch ($_POST['submit']){
            case 'add':
                //Ajout d'une personne avec son rôle, si son id = 0, alors cela veux dire que cette personne n'est pas enregistrer parmi les maitres
                $higherID = $bdd->getHigherIdFromOrganism();

                if (isset($higherID['id']) && $higherID['role']==$_POST['role']){
                    break;
                }
                $req = $db->prepare('INSERT INTO organisation (
                    id, role, id_master, affectation, info
                    ) VALUES (:id, :role, :id_master, :affectation, :info)');

                $req->bindValue(':id', ((int)$higherID['id']+1));
                $req->bindValue(':role' , $_POST["role"]);

                $req->bindValue(':affectation' , $_POST["affectation"]);

                isset($_POST["isMaster"])? $req->bindValue(':id_master' , 0) : $req->bindValue(':id_master' , $currentMaster['id']);
                isset($_POST["isMaster"])? $req->bindValue(':info', $_POST["name"]) : $req->bindValue(':info', null);

                $req->execute();
                break;
            case 'modify':
                isset($_POST["isMaster"])? $id = 0 : $id = $currentMaster['id'];
                isset($_POST["isMaster"])? $info = $_POST['name'] : $info = null;
                $request = 'UPDATE organisation SET '.'id_master="'.$id.'", info="'.$info.'" WHERE id='.(int)$_POST['index'].'';
                $req = $db->prepare($request);
                $req->execute();

                //Si les données sont pour un comité, alors on les modifie en même temps
                $cutRole = explode(" ", $_POST['role']);
                $region = $cutRole[count($cutRole)-1];

                //@TO DO improve the region name to give
                $comite = $bdd->getDataComiteByName($region);

                //$comite = false, si ce n'était pas un comite
                if ($comite){
                    switch ($cutRole[0]){
                        case 'Président': $person = 'enseignant';
                            break;
                        case 'Responsable': $person = 'contact';
                            break;
                        default: $person = 'notDefine';
                    }
                    //Pour mettre le nouveau nom de la personne, sans enlevé l'adresse mail qui suit
                    if (isset($comite[$person])){
                        $data = str_replace(explode(' : ',$comite[$person])[0],$_POST['name'],$comite[$person]);
                        $request = 'UPDATE marqueur SET '.$person.'="'.$data.'" WHERE id='.(int)$comite['id'].'';
                        $req = $db->prepare($request)->execute();
                    }
                }
                break;
        }
    }
    $function = $bdd->getAllOrganism();

    $affectations = array();
    foreach($function as $f){
        //Event sort by year
        $affectation = $f['affectation'];
        //If a year is already in the table, we put the event in it
        if (array_key_exists($affectation, $affectations)){
            array_push($affectations[$affectation], $f);
        }
        //If not, we create that year
        else {
            $affectations[$affectation] = [$f];
        }
    }
    $aff = $bdd->getAllAffectation();

    function printRole($function) {
        $picture = 'assets/img/no-picture.png';

        if ($function['id_master']!= 0){
            global $bdd;
            $master = $bdd->getDataMaster($function['id_master']);
            $name = $master['name'];
            $picture = $master['pictureProfile'];
        }else {
            $name = $function['info'];
        }
        ?>
        <div class="person">
            <div class="header text-center">
                <h4><?php echo $function['role'];?></h4>
            </div>
            <div class="body text-center">
                <img class="" src="<?php echo getSaveDirr('forPreview').$picture?>" alt="image" height="200">
                <div class="float-right">
                    <div class="text-center">
                        <h5><?php echo $name;?></h5>
                        <button class type="button" data-toggle="modal" data-target="#modify-<?php echo $function['id']?>">Modifier</button>
                    </div>
                </div>
            </div>
            <div class="footer">
                
            </div>
        </div>
        <div class="modal fade" id="modify-<?php echo $function['id']?>">
            <div class="modal-dialog modal-xl">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Changer de Représentant</h4>
                        </div>

                        <div class="modal-body">
                            <input type="text" name="index" id="index" class="hide" value="<?php echo $function['id']?>">
                            <h5 >Nom de la fonction</h5>
                            <input class="inputData form-control" type="text" name="role" id="role" placeholder="Ex: Trésorier" value="<?php echo $function['role'];?>" readonly required>
                            <div class="row">
                                <div class="col">
                                    <h5 class="data">Personne occupant ce rôle</h5>
                                    <input class="inputData form-control" type="text" list="master-name" name="name" id="name" placeholder="..." value="<?php echo $name;?>" required>
                                </div>
                            </div>
                            <br>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="isNotMaster" name="isMaster" style="z-index: 10;">
                                <p class="custom-control-label">La personne n'est pas un maître</p>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div class="d-flex justify-content-between mb-3">
                                <div id="btn-reset" class="p-2">
                                    <button type="button" class="btn-annul annim undo" data-dismiss="modal">Annuler</button>
                                </div>
                                <div id="btn-Action" class="p-2">
                                    <button type="submit" class="btn-modObject annim confirm" value="modify" name="submit">Valider</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
    }
?>
<datalist id="master-name">
    <?php
    foreach ($allMaster as $a){
        $name = $a['name'];
        echo '<option value="'.$name.'">';
    }
    ?>
</datalist>

<datalist id="affectation">
    <?php
    foreach ($aff as $a){
        $name = $a['affectation'];
        echo '<option value="'.$name.'">';
    }
    ?>
</datalist>

<div class="container">
    <div id="btn-object" class="p-2" style="">
        <a href="../admin"><button class="btn-annul annim" type="button" id='undo'>← Retour</button></a>
    </div>
    <h1>Organigramme Officielle</h1>
    <hr>
    <div>
        <div class="text-center">
            <button type="button" data-toggle="modal" data-target="#add-article">
                <h4>+ Ajouter un nouveau rôle au sein de la Fédération</h3>
            </button>
        </div>
        <div class="modal fade" id="add-article">
            <div class="modal-dialog modal-xl">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Ajouter un rôle</h4>
                        </div>

                        <div class="modal-body">
                            <h5 >Nom de la fonction</h5>
                            <input class="inputData form-control" type="text" name="role" id="role" placeholder="Ex: Trésorier" required>
                            <div class="row">
                                <div class="col">
                                    <h5 class="data">Personne occupant ce rôle</h5>
                                    <input class="inputData form-control" list="master-name" type="text" name="name" id="name" placeholder="..." required>
                                </div>
                                <div class="col">
                                    <h5 class="data">Affectation</h5>
                                    <input class="inputData form-control" list="affectation" type="text" name="affectation" id="affectation" placeholder="Ex: Bureau, Comités Régionaux ..." required>
                                </div>
                            </div>
                            <br>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="isMaster" name="isMaster">
                                <label class="custom-control-label" for="isMaster">La personne n'est pas un maître</label>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div class="d-flex justify-content-between mb-3">
                                <div id="btn-reset" class="p-2">
                                    <button type="button" class="btn-annul annim undo" data-dismiss="modal">Annuler</button>
                                </div>
                                <div id="btn-Action" class="p-2">
                                    <button type="submit" class="btn-modObject annim confirm" value="add" name="submit">Valider</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php 
            foreach($affectations as $affectation=>$list){
                echo '<h3>'.$affectation.'</h3>';
                echo '<hr>';
                echo '<div class="row m-3 ml-5 mr-5">';
                foreach ($list as $function){
                    echo '<div class="col-12 col-md-6 mb-5 pl-5 pr-5">';
                    printRole($function);
                    echo '</div>';
                }
                echo '</div>';
            }
        ?>
    </div>
</div>