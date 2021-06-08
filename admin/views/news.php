<?php
function translateToInput($string){
    //Edit the response to make it easy to design in edit mode
    $string = str_replace("<br>", "\r\n", $string);
    $string = str_replace("<mark class='bg-danger'>", "[", $string);
    $string = str_replace("</mark>", "]", $string); 
    //To delete the <a> tag to the link
    $string = str_replace([substr($string, strpos($string,"<a"), strpos($string, "\">")-strpos($string,"<a")),"</a>", "\">"], "", $string);

    return str_replace(["<b>","</b>", "<i>", "</i>", "<ins>", "</ins>", "<del>", "</del>"], ["**","**", "*", "*", "_", "_", "--", "--"], $string);
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
        <!--Tuto Stylisation de texte-->
        <div class="modal fade" id="useSymbols">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Comment Styliser le texte des réponses ?</h3>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>Souligner, mettre en gras/italique ... C'est possible de le faire ici pour le rendre plus vivant !</li>
                        </ul>
                        <p>Mais Comment ? C'est ce que nous allons voir maintenant.</p>
                        <h4><ins>Styliser le texte</ins></h4>
                        <p>
                            Tout d'abord, il n'est possible de styliser uniquement la réponse, cela ne marche pas avec la question. <br>
                            Il est ensuite possible de styliser le texte de 5 manières différentes:<br>
                            <b>Gras</b>, <ins>Soulignement</ins>, <i>Italique</i>, <del>Barré</del>, et <mark class='bg-danger'>Mise en Valeur</mark>. <br> <br>
                        </p>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4">
                                <p>
                                    **Texte** → <b>Texte</b> <br>
                                    <br>
                                    _Texte_ → <ins>Texte</ins>
                                </p>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <p>
                                    *Texte* → <i>Texte</i> <br>
                                    <br>
                                    --Texte-- → <del>Texte</del>
                                </p>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <p>
                                    [Texte] => <mark class='bg-danger'>Texte</mark>
                                </p>
                            </div>
                        </div>
                        <p>
                            On peux également fusionner des styles entre eux, par exemple faire un texte en italique et en gras: <br>
                            ***Texte*** → <b><i>Texte</i></b> <br>
                            Ou encore souligné et mettre en gras : <br>
                            _**Texte**_ → <b><ins>Texte</ins></b> <br>
                            Ou même appliquer du style à l'intérieur d'un autre style: <br>
                            *Texte d'exemple, [texte] d'exemple* → <i>Texte d'exemple, <mark class='bg-danger'>texte</mark> d'exemple</i><br>
                            <br>
                            Il n'y a pas vraiment de limite au nombre de style que vous pouvez mettre dans une réponse, alors testez par vous même ! <br>
                            <br>
                            Pour finir, en mode Edition, le style choisit ne s'affichera pas, il ne sera montré qu'après avoir validé les nouveaux changements.
                        </p>
                        <h4><ins>Liens Hypertextes</ins></h4>
                        <p>
                            Pour créer des liens cliquables dans un réponse, rien de plus simple, vous avez juste à mettre votre liens dans votre réponse. Et comme pour la stylisation, il sera transformé en liens cliquable apres validation des changements. <br>
                            https://www.exemple_de_liens.fr => <a href="">https://www.exemple_de_liens.fr</a> <br> (<i>Lien d'exemple, ne fonctionne pas</i>)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="button" data-toggle="modal" data-target="#add-article">
                <h4>+ Ajouter une nouvel article</h3>
            </button>
        </div>
        <div class="modal fade" id="add-article">
            <div class="modal-dialog modal-lg">
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
    </div>
</div>