<?php
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
                            <textarea class="inputData form-control" name="answer" rows="10" id="answer"><?php echo translateToInput($cardContent['rep']);?></textarea>
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

<div class="container">
    <div id="btn-object" class="p-2" style="">
        <a href="../admin"><button class="btn-annul annim" type="button" id='undo'>← Retour</button></a>
    </div>
    <h1>Page FAQ</h1>
    <hr>
    <div>
        <h3>Liste des questions <i class="fas fa-question-circle" data-toggle="modal" data-target="#useSymbols" style="cursor: pointer;"></i></h3>
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