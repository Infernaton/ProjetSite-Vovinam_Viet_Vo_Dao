<?php
    $req = $db->query('SELECT * FROM specialist');
    $allMaster = $req->fetchAll(PDO::FETCH_ASSOC);

    if ($_POST){
        switch ($_POST['submit']){
            case 'add':
                $req = $db->query('SELECT id FROM specialist WHERE name like '.$_POST['name'].'');
                $currentMaster = $req->fetch(PDO::FETCH_ASSOC);

                $req = $db->query('SELECT * FROM organisation ORDER BY id DESC');
                $higherID = $req->fetch(PDO::FETCH_ASSOC);

                if (isset($higherID['id'])){
                    if ($higherID['role']==$_POST['role']){
                        break;
                    }
                }

                $req = $db->prepare('INSERT INTO organisation (
                    id, role, id_master, info
                    ) VALUES (:id, :role, :id_master, :info)');

                $req->bindValue(':id', (int)$higherID['id']+1);
                $req->bindValue(':role' , $_POST["role"]);
                $req->bindValue(':id_master' , $currentMaster['id']);
                if (isset($_POST["info"])){
                    $req->bindValue(':info', $_POST["info"]);
                }

                $req->execute();
                echo "\n Envoie réussi";
                break;
        }
    }
?>
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
                                    <input class="inputData form-control" type="text" name="category" id="category" placeholder="..." required>
                                </div>
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
    </div>
</div>