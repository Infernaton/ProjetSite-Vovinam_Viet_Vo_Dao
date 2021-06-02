<?php
$json_file = "../assets/json/calendar.json";
$calendars = json_decode(file_get_contents($json_file), true, JSON_UNESCAPED_UNICODE);

function uploadFile($file){
    if ($file['error']==0){
        //If there no new file, $_FILES['newImage']['error'] = 4;
        $target_dir = getSaveDirr('forDB')."federation/calendars/";
        $target_dir = str_replace("../../","../",$target_dir);
            
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($file["tmp_name"]);
            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $target_file = $target_dir."preview/".basename($file["name"]);
            } else {
                //echo "File is not an image.";
                $target_file = $target_dir.basename($file["name"]);
            }
        }
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return str_replace("../","",$target_file);
        } else {
            echo "Sorry, there was an error uploading your file.";
            return "Error";
        }
    }
}

//Requête du front vers le back
if ($_POST){
    //var_dump($_POST, $_FILES);
    switch ($_POST['submit']){
        case 'delete':
            $id_target_file = $_POST['currentFile'];
            foreach ($calendars as $calendar){
                if ($calendar['id']==$id_target_file){
                    array_splice($calendars, count($calendars)-$id_target_file-1, 1);
                    for ($i=count($calendars)-$id_target_file-1; $i>0;$i--){
                        $calendars[$i]['id'] = (int)($calendars[$i]['id'])-1;
                    }
                    break;
                }
            }
            $target_file = getSaveDirr('forPreview').$calendar['pdf'];
            if (file_exists($target_file)) {
                unlink($target_file);
                echo "<script type='text/javascript'> location.reload()</script>";
                $_POST = [];
            }
            break;
        case 'valid':
            $calendars[$_POST['index']]['ask'] = $_POST['question'];
            $calendars[$_POST['index']]['rep'] = translateToHTML($_POST['answer']);
            break;
        case 'add':
            $newQuestionID = count($calendars);
            if ($_POST['title'] != $calendars[0]['title']) {
                $new = '{"id":'.$newQuestionID.', "title":"'.$_POST['title'].'", "img_preview":"assets\/img\/federation\/calendars\/pdf-logo.png", "pdf":"'.uploadFile($_FILES['pdf']).'"}';
                array_unshift($calendars, json_decode($new, true, JSON_UNESCAPED_UNICODE));
                //array_unshift
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
                            <div class="text-center">
                                <label for="pdf" class="custom-file-upload">
                                    <i class="fas fa-file-import"></i> PDF du calendrier
                                </label>
                                <input type="file" name="pdf" id="pdf" accept=".pdf" onchange="previewNameFile(this.value)" required>
                                <div id="previewNameFile" class="inputData form-control">Fichier PDF</div>
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
        <hr>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <input type="text" class="hide" name="currentFile" id="currentFile" value required>

            <?php 
            foreach($calendars as $calendar){
            ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="text-center responsive">
                    <div class="hoverEle no-background size-0">
                        <button onClick="deleteFile('<?php echo $calendar['id'] ?>')" type="button" data-toggle="modal" data-target="#remove-confirm"><i class="fas fa-trash"></i></button>
                    </div>
                    <a href="<?php echo getSaveDirr('forPreview').$calendar['pdf']?>" target="_blank">
                        <img class="img_fill" src="<?php echo getSaveDirr('forPreview').$calendar['img_preview']?>" alt="preview">
                        <p><?php echo $calendar['title'] ?></p>
                    </a>
                </div>
            </div>
            <?php
            }
            ?>
            <div class="modal fade" id="remove-confirm">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Voulez vous vraiment supprimer cette photo ?</h4>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div id="btn-reset" class="p-2">
                                    <button type="button" class="btn-annul annim" id="undo" data-dismiss="modal">Annuler</button>
                                </div>
                                <div id="btn-Action" class="p-2">
                                    <button type="submit" class="btn-modObject annim undo" value="delete" name="submit" id="remove">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<script src="scripts/previewPicture.js"></script>
<script>
    function previewNameFile(name){
        $('#previewNameFile').html(name.replace('C:\\fakepath\\', ''));
    }
    function deleteFile(currentFile){
        document.getElementById('currentFile').value = currentFile;
    }
</script>