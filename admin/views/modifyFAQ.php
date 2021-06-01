<?php
    function str_replace_first($from, $to, $content){
        $from = '/'.preg_quote($from, '/').'/';
        return preg_replace($from, $to, $content, 1);
    }
    //Transformer des strings ressemblant à des liens en liens hypertextes
    function plainToHyperlinks($string){
        $url = '~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i';
        return preg_replace($url, '<a href="$0" target="_blank">$0</a>', $string);
    }
    //Transformer les symboles de styles vers des balises HTML
    function translateToHTML($string){
        //Edit the response to make it easy to design in edit mode
        $string = str_replace("\r\n","<br>", $string);
        $string = str_replace("[", "<mark class='bg-danger'>", $string);
        $string = str_replace("]", "</mark>", $string);

        //Count the number of symbole there is in the text
        $uses = [substr_count($string, "**")/2, substr_count($string, "*")/2, substr_count($string, "_")/2, substr_count($string, "--")/2, substr_count($string, "http")];

        for ($a=0; $a < $uses[0]; $a++) {
            $string = str_replace_first("**", "<b>", $string);
            $string = str_replace_first("**", "</b>", $string);
        }
        for ($a=0; $a < $uses[1]; $a++) {
            $string = str_replace_first("*", "<i>", $string);
            $string = str_replace_first("*", "</i>", $string);
        }
        for ($a=0; $a < $uses[2]; $a++) {
            $string = str_replace_first("_", "<ins>", $string);
            $string = str_replace_first("_", "</ins>", $string);
        }
        for ($a=0; $a < $uses[3]; $a++) {
            $string = str_replace_first("--", "<del>", $string);
            $string = str_replace_first("--", "</del>", $string);
        }
        for ($a=0; $a < $uses[4]; $a++) {
            $string = plainToHyperlinks($string);
        }
        return $string;
    }

    //Afficher une carte de question, comprennant les différents boutons et son contenu
    function printCardFAQ($cardContent){
        ?>
        <div class="QnA">
                <div class="header">
                    <h4><?php echo $cardContent['ask'];?></h4>
                </div>
                <div class="body">
                    <p><?php echo $cardContent['rep']."</mark></del></ins></i></b>";?></p>
                </div>
                <div class="footer">
                    <div class="d-flex justify-content-between">
                        <button class="undo" type="button" data-toggle="modal" data-target="#remove-<?php echo $cardContent['id']?>">Supprimer</button>
                        <button class="" type="button" data-toggle="modal" data-target="#question-<?php echo $cardContent['id']?>">Modifier</button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="question-<?php echo $cardContent['id']?>">
                <div class="modal-dialog modal-lg">
                    <form action="" method="post" enctype="multipart/form-data">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Modifier la Question/Réponse</h4>
                        </div>

                        <div class="modal-body">
                            <input type="text" name="index" id="index" class="hide" value="<?php echo $cardContent['id']?>">
                            <h5>Question</h5>
                            <textarea class="inputData form-control" name="question" id="question"><?php echo $cardContent['ask'];?></textarea>
                            <h5>Réponse</h5>
                            <textarea class="inputData form-control" name="answer" rows="10" id="answer"><?php 
                                    $para = $cardContent['rep'];
                                    //Edit the response to make it easy to design in edit mode
                                    $para = str_replace("<br>", "\r\n", $para);
                                    $para = str_replace("<mark class='bg-danger'>", "[", $para);
                                    $para = str_replace("</mark>", "]", $para); 
                                    //To delete the <a> tag to the link
                                    $para = str_replace([substr($para, strpos($para,"<a"), strpos($para, "\">")-strpos($para,"<a")),"</a>", "\">"], "", $para);

                                    $para = str_replace(["<b>","</b>", "<i>", "</i>", "<ins>", "</ins>", "<del>", "</del>"], ["**","**", "*", "*", "_", "_", "--", "--"], $para);
                                    
                                    echo $para;
                                ?></textarea>
                        </div>

                        <div class="modal-footer">
                            <div class="d-flex justify-content-between mb-3">
                                <div id="btn-reset" class="p-2">
                                    <button type="button" class="btn-annul annim undo" data-dismiss="modal">Annuler</button>
                                </div>
                                <div id="btn-Action" class="p-2">
                                    <button type="submit" class="btn-modObject annim confirm" value="valid" name="submit">Valider</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
            <div class="modal fade" id="remove-<?php echo $cardContent['id']?>">
                <div class="modal-dialog modal-lg">
                    <form action="" method="post" enctype="multipart/form-data">

                    <input type="text" name="index" id="index" class="hide" value="<?php echo $cardContent['id']?>">
                    <input type="text" name="question" id="index" class="hide" value="<?php echo $cardContent['ask']?>">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Supprimer la Question</h4>
                        </div>

                        <div class="modal-footer">
                            <div class="d-flex justify-content-between mb-3">
                                <div id="btn-reset" class="p-2">
                                    <button type="button" class="btn-annul annim undo" data-dismiss="modal">Annuler</button>
                                </div>
                                <div id="btn-Action" class="p-2">
                                    <button type="submit" class="btn-modObject annim confirm" value="delete" name="submit">Valider la suppression</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        <?php
    }

    $json_file = "../assets/json/faq.json";
    $faq = json_decode(file_get_contents($json_file), true, JSON_UNESCAPED_UNICODE);
    //Requête du front vers le back
    if ($_POST){
        switch ($_POST['submit']){
            case 'delete':
                if ($faq[$_POST['index']]['ask']==$_POST['question']){
                    array_splice($faq, $_POST['index'], 1);
                    for ($i=$_POST['index']; $i<count($faq);$i++){
                        $faq[$i]['id'] = (int)($faq[$i]['id'])-1;
                    }
                }
                break;
            case 'valid':
                $faq[$_POST['index']]['ask'] = $_POST['question'];
                $faq[$_POST['index']]['rep'] = translateToHTML($_POST['answer']);
                break;
            case 'add':
                $newQuestionID = count($faq);
                if ($_POST['question'] != $faq[$newQuestionID-1]['ask']) {
                    $new = '{"id":'.$newQuestionID.',"ask":"'.$_POST['question'].'","rep":"'.translateToHTML($_POST['answer']).'"}';
                    array_push($faq, json_decode($new, true, JSON_UNESCAPED_UNICODE));
                }
                break;
        }
        file_put_contents($json_file,json_encode($faq, JSON_PRETTY_PRINT));
    }
?>
<style>
    .QnA {
        border: 1px solid grey;
        border-radius:15px;
        padding:0 2%;
        margin:2% 0;
    }
    .QnA .header {
        color:black;
        padding-top: 10px;
    }
    .QnA .body {
        padding:0 2%;
        margin-top:1px;
        color: #5d5d5d;
        border-bottom: 1px solid #d2d2d2;
    }
    .QnA .footer {
        color:black;
        margin: 2%;
    }
    textarea {
        resize: none;
    }
</style>

<div class="container">
    <div id="btn-object" class="p-2" style="">
        <a href="../admin"><button class="btn-annul annim" type="button" id='undo'>← Retour</button></a>
    </div>
    <h1>Page FAQ</h1>
    <hr>
    <div>
        <h3>Liste des questions <i class="fas fa-question-circle" data-toggle="modal" data-target="#useSymbols" style="cursor: pointer;"></i></h3>
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
            <button type="button" data-toggle="modal" data-target="#add-question">
                <h4>+ Ajouter une nouvelle question</h3>
            </button>
        </div>
        <!--Ajouter une nouvelle question-->
        <div class="modal fade" id="add-question">
            <div class="modal-dialog modal-lg">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Ajouter nouvelle Question/Réponse</h4>
                        </div>

                        <div class="modal-body">
                            <h5>Question</h5>
                            <textarea class="inputData form-control" name="question" id="question"></textarea>
                            <h5>Réponse</h5>
                            <textarea class="inputData form-control" name="answer" rows="10" id="answer"></textarea>
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

        <!--Liste des questions-->
        <div class="row">
            <div class="col-12 col-md-6">
            <?php
            for ($i=0; $i < count($faq); $i+=2) { 
                echo printCardFAQ($faq[$i]);
            } 
            ?>
            </div>
            <div class="col-12 col-md-6">
            <?php
            for ($i=1; $i < count($faq); $i+=2) { 
                echo printCardFAQ($faq[$i]);
            }
            ?>
            </div>
        </div>
    </div>
</div>