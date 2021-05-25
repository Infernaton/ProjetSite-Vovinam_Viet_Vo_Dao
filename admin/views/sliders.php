<?php
$dir = getSliderDirr(); //Valeur dans admin/management/init.php
$photos = scandir($dir,1);

if ($_POST){
    switch ($_POST['submit']){
        case 'valid':
            $target_file = $dir . basename($_FILES["newImage"]["name"]);
            $uploadOk = true;

            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["newImage"]["tmp_name"]);
                if($check !== false) {
                    $uploadOk = true;
                } else {
                    $uploadOk = false;
                }
            }
            if (file_exists($target_file)) {
                $uploadOk = false;
            }
            if ($uploadOk == false) {
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["newImage"]["tmp_name"], $target_file)) {
                    var_dump($_POST);
                    //echo "The file ". htmlspecialchars( basename( $_FILES["newImage"]["name"])). " has been uploaded.";
                    echo "<script type='text/javascript'> location.reload(); console.log('aa')</script>";
                    $_POST = [];
                }
            }
            break;
        case 'delete':
            $target_file = $_POST['currentPicture'];
            if (file_exists($target_file)) {
                unlink($target_file);
                echo "<script type='text/javascript'> location.reload(); console.log('aa')</script>";
                $_POST = [];
            }
            break;
            
    }
}
?>

<div class="container">
    <div id="btn-object" class="p-2" style="">
        <a href="../admin"><button class="btn-annul annim" type="button" id='undo'>← Retour</button></a>
    </div>
    <h1>Modifier les sliders</h1>
    <h3>Slider de l'accueil</h3>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <input type="text" class="hide" name="currentPicture" id="currentPicture" value require>
            <?php
            //Because $photos takes the folder as an element and we don't want it in our loop
            for ($i=0; $i<count($photos)-2;$i++){ ?>
                <div class="col-6 col-md-3 col-lg-2 responsive">
                    <div class="hoverEle no-background">
                        <button onClick="deletePicture('<?php echo $dir.$photos[$i] ?>')" type="button" data-toggle="modal" data-target="#remove-confirm"><i class="fas fa-trash"></i></button>
                    </div>
                    <img src="<?php echo $dir.$photos[$i] ?>" width="100%" alt="vietvodao">
                </div>
            <?php
            }
            ?>
            <div class="modal" id="remove-confirm">
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
    <form action="" method="post" enctype="multipart/form-data">
        <h5>Ajouter une image</h5>
        <div id="previewImgDiv" class="responsive">
            <div class="hoverEle">
                <p class="center">Ajouter une image</p>
            </div>
            <input class="inputData input-file" type="file" name="newImage" id="newImage" accept=".png, .jpeg, .jpg" required onchange="previewFile(this);" require>
        </div>
        <div class="d-flex justify-content-between mb-3">
            <div id="btn-reset" class="p-2">
                <a href="../admin"><button type="button" class="btn-annul annim undo" id='undo'>Annuler</button></a>
            </div>
            <div id="btn-Action" class="p-2">
                <button type="submit" class="btn-modObject annim confirm" value="valid" name="submit" id="confirm">Valider</button>
            </div>
        </div>
    </form>
    
</div>
<script src="scripts/previewPicture.js"></script>
<script>
    function deletePicture(currentPicture){
        document.getElementById('currentPicture').value = currentPicture;
    }
</script>