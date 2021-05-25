<?php
require_once "init.php";

var_dump($_POST);

switch ($_POST['submit']){
    case 'valid':
        $target_dir = '../'.getSliderDirr();
        var_dump($target_dir);
        $target_file = $target_dir ."/". basename($_FILES["newImage"]["name"]);
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
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == false) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["newImage"]["tmp_name"], $target_file)) {
                //echo "The file ". htmlspecialchars( basename( $_FILES["newImage"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        break;
}
echo "<script type='text/javascript'> history.go(-1); </script>";
die;
?>