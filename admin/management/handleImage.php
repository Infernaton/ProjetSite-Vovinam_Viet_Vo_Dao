<?php

class HandleFile{
    private $path;
    private $notFound;

    public function __construct($folder) {
        $this->path = getSaveDirr('forDB').$folder."/";
        $this->notFound = getSaveDirr('forDB')."no-picture.png";
    }

    public function uploadImageToFolder(){
        $target_file = $this->path . basename($_FILES["newImage"]["name"]);
        if (isset($_FILES) && move_uploaded_file($_FILES["newImage"]["tmp_name"], $target_file)) {
            return str_replace("../","",$target_file);
            //echo "The file ". htmlspecialchars( basename( $_FILES["newImage"]["name"])). " has been uploaded.";
        } else {
            return $this->notFound;
            //echo "Sorry, there was an error uploading your file.";
        }
    }

    public function handleImage(){
        // Check if image file is a actual image or fake image
        // Check file size
        if (isset($_FILES) && $_FILES["newImage"]["size"] < 500000 && getimagesize($_FILES["newImage"]["tmp_name"])) {
            //echo "Sorry, your file is too large.";
            //$uploadOk = 0;
            return $this->uploadImageToFolder();
        }else {
            return $this->notFound;
        }
    }
}