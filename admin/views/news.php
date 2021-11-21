<?php
$news = $bdd->getAllNews();

function translateDate($date){
    $date = explode("-", $date);
    return $date[2]."/".$date[1]."/".$date[0];
}
function printCardNews($cardContent){
    ?>
    <div class="news">
        <div class="header d-flex justify-content-between">
            <h4><?php echo $cardContent['title'];?></h4>
            <p><?php echo $cardContent['category'];?></p>
        </div>
        <div class="body text-right">
            <p><?php echo $cardContent['author']." - ".translateDate($cardContent['date'])?></p>
        </div>
        <div class="footer">
            <div class="d-flex justify-content-between">
                <button class="undo" type="button" data-toggle="modal" data-target="#remove-<?php echo $cardContent['id']?>">Supprimer</button>
                <button class="" type="button" data-toggle="modal" data-target="#modify-<?php echo $cardContent['id']?>">Modifier</button>
            </div>
        </div>
        <div class="modal fade" id="modify-<?php echo $cardContent['id']?>">
            <div class="modal-dialog modal-xl">
                <form action="management/addArticle.php" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Modifier l'Article</h4>
                        </div>

                        <div class="modal-body">
                            <input type="text" name="index" id="index" class="hide" value="<?php echo $cardContent['id']?>">

                            <h5>Titre de l'article</h5>
                            <textarea class="inputData form-control" name="title"><?php echo $cardContent['title'];?></textarea>
                            <h5 class="data">Contenu</h5>
                            <textarea class="inputData form-control" name="content" rows="10"><?php echo translateToInput($cardContent['content']);?></textarea>
                            <div class="row">
                                <div class="col">
                                    <h5 for="category" class="data">Catégorie de l'article</h5>
                                    <input class="inputData form-control" type="text" name="category" value="<?php echo $cardContent['category']?>" placeholder="Ex: Evènement..." required>
                                </div>
                                <div class="col">
                                    <h5 for="author" class="data">Auteur de l'Article</h5>
                                    <input class="inputData form-control" type="text" name="author" value="<?php echo $cardContent['author']?>" placeholder="Signature" required>
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
        <div class="modal fade" id="remove-<?php echo $cardContent['id']?>">
            <div class="modal-dialog modal-lg">
                <form action="management/addArticle.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="index" id="index" class="hide" value="<?php echo $cardContent['id']?>">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Supprimer l'Article</h4>
                        </div>

                        <div class="modal-footer">
                            <div class="d-flex justify-content-between mb-3">
                                <div id="btn-reset" class="p-2">
                                    <button type="button" class="btn-annul annim undo" data-dismiss="modal">Annuler</button>
                                </div>
                                <div id="btn-Action" class="p-2">
                                    <button type="submit" class="btn-modObject annim confirm" value="remove" name="submit">Valider la suppression</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <?php
}
?>

<div class="container">
    <div id="btn-object" class="p-2" style="">
        <a href="../admin"><button class="btn-annul annim" type="button" id='undo'>← Retour</button></a>
    </div>
    <h1>Actualités</h1>
    <hr>
    <div>
        <h3>Liste des articles <i class="fas fa-question-circle" data-toggle="modal" data-target="#useSymbols" style="cursor: pointer;"></i></h3>
        <div class="text-center">
            <button type="button" data-toggle="modal" data-target="#add-article">
                <h4>+ Ajouter une nouvel article</h3>
            </button>
        </div>
        <div class="modal fade" id="add-article">
            <div class="modal-dialog modal-xl">
                <form action="management/addArticle.php" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Ajouter nouvelle Question/Réponse</h4>
                        </div>

                        <div class="modal-body">
                            <h5 >Titre de l'article</h5>
                            <textarea class="inputData form-control" name="title" id="question"></textarea>
                            <h5 class="data">Contenu</h5>
                            <textarea class="inputData form-control" name="content" rows="10" id="answer"></textarea>
                            <div class="row">
                                <div class="col">
                                    <label for="category" class="data">Catégorie de l'article</label>
                                    <input class="inputData form-control" type="text" name="category" id="category" placeholder="Ex: Evènement..." required>
                                </div>
                                <div class="col">
                                    <label for="author" class="data">Auteur de l'Article</label>
                                    <input class="inputData form-control" type="text" name="author" id="author" placeholder="Signature" required>
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
        <div class="row">
            <?php 
            foreach($news as $new) { 
                echo '<div class="col-6">';
                echo    printCardNews($new);
                echo '</div>';
            } 
            ?>
        </div>
    </div>
</div>