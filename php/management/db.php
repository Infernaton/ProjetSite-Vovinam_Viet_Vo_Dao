<?php

try {
    $db = new PDO('mysql:host=vxjgaxtviet.mysql.db;dbname=vxjgaxtviet;port=21;charset=utf8',"vxjgaxtviet", "vOv1nAmVo");
    //$db = new PDO('mysql:host=localhost;dbname=vietvodao;port=3306;charset=utf8',"root", "");
}
catch (Exception $e){
    die('Erreur MySQL, veuillez patienter ou contactez un administrateur. <br /><br />' . $e->getMessage());
}

?>