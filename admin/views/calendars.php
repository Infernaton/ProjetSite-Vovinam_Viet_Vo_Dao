<?php
$json_file = "../assets/json/calendar.json";
$calendars = json_decode(file_get_contents($json_file), true, JSON_UNESCAPED_UNICODE);
//Requête du front vers le back
if ($_POST){
    switch ($_POST['submit']){
        case 'delete':
            if ($calendars[$_POST['index']]['ask']==$_POST['question']){
                array_splice($calendars, $_POST['index'], 1);
                for ($i=$_POST['index']; $i<count($calendars);$i++){
                    $calendars[$i]['id'] = (int)($calendars[$i]['id'])-1;
                }
            }
            break;
        case 'valid':
            $calendars[$_POST['index']]['ask'] = $_POST['question'];
            $calendars[$_POST['index']]['rep'] = translateToHTML($_POST['answer']);
            break;
        case 'add':
            $newQuestionID = count($calendars);
            if ($_POST['title'] != $calendars[$newQuestionID-1]['title']) {
                $new = '{"id":'.$newQuestionID.', "title":'.$_POST['title'].', "img_preview":'.$_POST['newImage'].', "pdf": '.$_POST['pdf'].'}';
                array_unshift($calendars, json_decode($new, true, JSON_UNESCAPED_UNICODE));
            }
            break;
    }
    file_put_contents($json_file,json_encode($calendars, JSON_PRETTY_PRINT));
}
?>
<div class="container">
    <div id="btn-object" class="p-2" style="">
        <a href="../admin"><button class="btn-annul annim" type="button" id='undo'>← Retour</button></a>
    </div>
    <h1>Liste des Calendriers Fédéraux</h1>
    <hr>
    <div>
        <div class="text-center">
            <button type="button" data-toggle="modal" data-target="#add">
                <h4>+ Ajouter un nouveau calendrier</h3>
            </button>
        </div>
        <!--Ajouter une nouvelle question-->
        <div class="modal fade" id="add">
            <div class="modal-dialog modal-lg">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Ajouter un nouveau Calendrier</h4>
                        </div>

                        <div class="modal-body">
                            <label class="data" for="debut" style="margin-top:0;"><b>Titre</b></label>
                            <input class="inputData form-control" type="text" placeholder="Ex: Calendrier Fédéral 2020/2021" name="title" id="title" required>
                            <div class="row text-center">
                                <div class="col-12 col-md-6">
                                    <label for="newImage" class="custom-file-upload">
                                        <i class="fas fa-file-import"></i> Image de Prévisualisation
                                    </label>
                                    <input type="file" name="newImage" id="newImage" accept=".png, .jpeg, .jpg" required onchange="previewFile(this);" required>
                                    <div id="previewImgDiv" class="responsive"></div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="pdf" class="custom-file-upload">
                                        <i class="fas fa-file-import"></i> PDF du calendrier
                                    </label>
                                    <input type="file" name="pdf" id="pdf" accept=".pdf" required onchange="previewNameFile(this.value)" required>
                                    <div id="previewNameFile" class="inputData form-control">Fichier PDF</div>
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
            foreach ($calendars as $calendar) {
            ?>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="text-center">
                    <img class="img_fill" src="<?php echo getSaveDirr('forPreview').$calendar['img_preview']?>">
                    <p><?php echo $calendar['title']; ?></p>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<script src="scripts/previewPicture.js"></script>
<script>
    function previewNameFile(name){
        $('#previewNameFile').html(name.replace('C:\\fakepath\\', ''));
    }
</script>