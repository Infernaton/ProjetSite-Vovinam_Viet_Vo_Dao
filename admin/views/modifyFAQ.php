<?php
    function str_replace_first($from, $to, $content){
        $from = '/'.preg_quote($from, '/').'/';
        return preg_replace($from, $to, $content, 1);
    }
    function plainToHyperlinks($string){
        $url = '~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i';
        return preg_replace($url, '<a href="$0" target="_blank">$0</a>', $string);
    }

    //#26121e #21172a
    $json_file = "../assets/json/faq.json";
    $faq = json_decode(file_get_contents($json_file), true, JSON_UNESCAPED_UNICODE);
    if ($_POST){
        //Edit the response to make it easy to design in edit mode
        $_POST['answer'] = str_replace("\r\n","<br>", $_POST['answer']);
        $_POST['answer'] = str_replace("[", "<mark class='bg-danger'>", $_POST['answer']);
        $_POST['answer'] = str_replace("]", "</mark>", $_POST['answer']);

        //Count the number of symbole there is in the text
        $uses = [substr_count($_POST['answer'], "**")/2, substr_count($_POST['answer'], "*")/2, substr_count($_POST['answer'], "_")/2, substr_count($_POST['answer'], "--")/2, substr_count($_POST['answer'], "http")];

        for ($a=0; $a < $uses[0]; $a++) {
            $_POST['answer'] = str_replace_first("**", "<b>", $_POST['answer']);
            $_POST['answer'] = str_replace_first("**", "</b>", $_POST['answer']);
        }
        for ($a=0; $a < $uses[1]; $a++) {
            $_POST['answer'] = str_replace_first("*", "<i>", $_POST['answer']);
            $_POST['answer'] = str_replace_first("*", "</i>", $_POST['answer']);
        }
        for ($a=0; $a < $uses[2]; $a++) {
            $_POST['answer'] = str_replace_first("_", "<ins>", $_POST['answer']);
            $_POST['answer'] = str_replace_first("_", "</ins>", $_POST['answer']);
        }
        for ($a=0; $a < $uses[3]; $a++) {
            $_POST['answer'] = str_replace_first("--", "<del>", $_POST['answer']);
            $_POST['answer'] = str_replace_first("--", "</del>", $_POST['answer']);
        }
        for ($a=0; $a < $uses[4]; $a++) {
            $_POST['answer'] = plainToHyperlinks($_POST['answer']);
        }
        switch ($_POST['submit']){
            case 'delete':
                break;
            case 'valid':
                $faq[$_POST['index']]['ask'] = $_POST['question'];
                $faq[$_POST['index']]['rep'] = $_POST['answer'];
                break;
            case 'add':
                $new = '{"ask":"'.$_POST['question'].'","rep":"'.$_POST['answer'].'"}';
                array_push($faq, json_decode($new, true, JSON_UNESCAPED_UNICODE));
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
        <h3>Liste des questions</h3>
        <div class="text-center">
            <button type="button" data-toggle="modal" data-target="#add-question">
                <h4>+ Ajouter une nouvelle question</h3>
            </button>
        </div>
        <div class="modal" id="add-question">
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
                                    <button type="button" class="btn-annul annim undo" id="undo" data-dismiss="modal">Annuler</button>
                                </div>
                                <div id="btn-Action" class="p-2">
                                    <button type="submit" class="btn-modObject annim confirm" value="add" name="submit" id="confirm">Valider</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        <div class="row">
            <div class="col-12 col-md-6">
            <?php
            for ($i=0; $i < count($faq); $i++) { 
                if ($i%2==0){
            ?>
            
            <div class="QnA">
                <div class="header">
                    <h4><?php echo $faq[$i]['ask'];?></h4>
                </div>
                <div class="body">
                    <p><?php echo $faq[$i]['rep']."</mark></del></ins></i></b>";?></p>
                </div>
                <div class="footer text-right">
                    <button type="button" data-toggle="modal" data-target="#question-<?php echo $i?>">Modifier</button>
                </div>
            </div>
            <div class="modal" id="question-<?php echo $i?>">
                <div class="modal-dialog modal-lg">
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
                            <textarea class="inputData form-control" name="answer" rows="10" id="answer"><?php 
                                    $para = $faq[$i]['rep'];
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
            } ?>
            </div>
            <div class="col-12 col-md-6">
            <?php
            for ($i=0; $i < count($faq); $i++) { 
                if ($i%2==1){
            ?>
            
            <div class="QnA">
                <div class="header">
                    <h4><?php echo $faq[$i]['ask'];?></h4>
                </div>
                <div class="body">
                    <p><?php echo $faq[$i]['rep']."</mark></del></ins></i></b>";?></p>
                </div>
                <div class="footer text-right">
                    <button type="button" data-toggle="modal" data-target="#question-<?php echo $i?>">Modifier</button>
                </div>
            </div>
            <div class="modal" id="question-<?php echo $i?>">
                <div class="modal-dialog modal-lg">
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
                            <textarea class="inputData form-control" name="answer" rows="10" id="answer"><?php 
                                    $para = $faq[$i]['rep'];
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
            }
            ?>
            </div>
        </div>
    </div>
</div>