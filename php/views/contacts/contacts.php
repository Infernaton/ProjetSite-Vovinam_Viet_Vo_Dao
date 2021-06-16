<?php
$data = file_get_contents("assets/json/contact.json");
$data = json_decode($data, true, JSON_UNESCAPED_UNICODE);
?>
<div class="container">
    <div class="text-center"> <h1 class="content-title-yellow"> Nous Contacter </h1></div>
    <hr>
    <h4>Fédération de VOVINAM-Viet Vo Dao France</h4>
    <br>
    <h4><small> <i class="fas fa-map-marker-alt"></i> <?php echo $data["address"]?> </small></h4>
    <h4><small> <i class="fas fa-envelope"></i> <?php echo $data["mail"]?> </small></h4>
    <h4><small> <i class="fas fa-phone"></i> <?php echo $data["phone"]?> </small></h4>
</div>