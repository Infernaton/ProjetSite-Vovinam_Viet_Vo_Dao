<?php
    $req = $db->query('SELECT name FROM specialist WHERE deathDate like "---"');
    $allMaster = $req->fetchAll(PDO::FETCH_ASSOC);

    if ($_POST){
        //var_dump($_POST);
        $req = $db->query('SELECT id FROM specialist WHERE name like "%'.$_POST['name'].'%"');
        $currentMaster = $req->fetch(PDO::FETCH_ASSOC);

        switch ($_POST['submit']){
            case 'add':
                $req = $db->query('SELECT * FROM organisation ORDER BY id DESC');
                $higherID = $req->fetch(PDO::FETCH_ASSOC);

                if (isset($higherID['id'])){
                    if ($higherID['role']==$_POST['role']){
                        break;
                    }
                }
                $req = $db->prepare('INSERT INTO organisation (
                    id, role, id_master, affectation, info
                    ) VALUES (:id, :role, :id_master, :affectation, :info)');

                $req->bindValue(':id', ((int)$higherID['id']+1));
                $req->bindValue(':role' , $_POST["role"]);

                $req->bindValue(':affectation' , $_POST["affectation"]);

                isset($_POST["isMaster"])? $req->bindValue(':id_master' , 0) : $req->bindValue(':id_master' , $currentMaster['id']);
                isset($_POST["info"])? $req->bindValue(':info', $_POST["info"]) : $req->bindValue(':info', null);

                $req->execute();
                echo "\n Envoie réussi";
                break;
            case 'modify':
                $request = 'UPDATE organisation SET '.'id_master="'.$currentMaster['id'].'" WHERE id='.(int)$_POST['index'].'';
                //var_dump($currentMaster['id']);
                $req = $db->prepare($request);
                $req->execute();
                break;
        }
    }
    $req = $db->query('SELECT * FROM organisation ORDER BY id');
    $function = $req->fetchAll(PDO::FETCH_ASSOC);

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
    $req = $db->query('SELECT DISTINCT affectation FROM organisation ORDER BY id');
    $aff = $req->fetchAll(PDO::FETCH_ASSOC);

    function printRole($function) {
        //var_dump($function);
        $name = 'Not Define';
        $picture = 'assets/img/no-picture.png';

        if ((int)$function['id']!= 0){
            global $db;
            $req = $db->query('SELECT * FROM specialist WHERE id= "'.$function['id_master'].'"');
            $master = $req->fetch(PDO::FETCH_ASSOC);
            $name = $master['name'];
            $picture = $master['pictureProfile'];
        }
        ?>
        <div class="person">
            <div class="header text-center">
                <h4><?php echo $function['role'];?></h4>
            </div>
            <div class="body text-center">
                <img class="" src="<?php echo getSaveDirr('forPreview').$picture?>" alt="image" height="200">
            </div>
            <div class="footer">
                <div class="d-flex justify-content-between">
                    <button class="undo" type="button" data-toggle="modal" data-target="#remove-<?php echo $function['id']?>" disabled>Supprimer</button>
                    <h5><?php echo $name;?></h5>
                    <button class="" type="button" data-toggle="modal" data-target="#modify-<?php echo $function['id']?>">Modifier</button>
                </div>
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
                            <h5 >Nom du rôle</h5>
                            <input class="inputData form-control" type="text" name="role" id="role" placeholder="Ex: Trésorier" value="<?php echo $function['role'];?>" readonly required>
                            <div class="row">
                                <div class="col">
                                    <h5 class="data">Personne occupant ce rôle</h5>
                                    <input class="inputData form-control" type="text" list="master-name" name="name" id="name" placeholder="..." value="<?php echo $master['name'];?>" required>
                                </div>
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
        <h3>Changer l'Organisation</h3>
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
                            <h5 >Nom du rôle</h5>
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
                echo '<div class="row m-3">';
                foreach ($list as $function){
                    echo '<div class="col-4">';
                    printRole($function);
                    echo '</div>';
                }
                echo '</div>';
            }
        ?>
    </div>
</div>