<?php
    $json_file = "../assets/json/faq.json";
    $faq = json_decode(file_get_contents($json_file), true, JSON_UNESCAPED_UNICODE);
    if ($_POST){
        switch ($_POST['submit']){
            case 'valid':
                $faq[$_POST['index']]['ask'] = $_POST['question'];
                $faq[$_POST['index']]['rep'] = $_POST['answer'];
                break;
            case 'delete':
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
    <div>
        <h3>Ajouter une nouvelle question</h3>
    </div>
    <hr>
    <div>
        <h3>Liste des questions</h3>
        <div class="row">
            <?php
            for ($i=0; $i < count($faq); $i++) { 
            ?>
            <div class="col-12 col-md-6">
                <div class="QnA">
                    <div class="header">
                        <h4><?php echo $faq[$i]['ask'];?></h4>
                    </div>
                    <div class="body">
                        <p><?php echo $faq[$i]['rep'];?></p>
                    </div>
                    <div class="footer text-right">
                        <button type="button" class="modify" data-toggle="modal" data-target="#question-<?php echo $i?>">Modifier</button>
                    </div>
                </div>
            </div>
            <div class="modal" id="question-<?php echo $i?>">
                <div class="modal-dialog">
                    <form action="" method="post" enctype="multipart/form-data">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Modifier la Question/Réponse</h4>
                        </div>

                        <div class="modal-body">
                            <input type="text" name="index" id="index" class="hide" value="<?php echo $i?>">
                            <h5>Question</h5>
                            <textarea class="inputData form-control" name="question" id="question"><?php echo $faq[$i]['ask'];?></textarea>
                            <h5>Réponse</h5>
                            <textarea class="inputData form-control" name="answer" id="answer"><?php echo $faq[$i]['rep'];?></textarea>
                        </div>

                        <div class="modal-footer">
                            <div class="d-flex justify-content-between mb-3">
                                <div id="btn-reset" class="p-2">
                                    <button type="button" class="btn-annul annim undo" id="undo" data-dismiss="modal">Annuler</button>
                                </div>
                                <div id="btn-Action" class="p-2">
                                    <button type="submit" class="btn-modObject annim confirm" value="valid" name="submit" id="confirm">Valider</button>
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
        </div>
    </div>

</div>