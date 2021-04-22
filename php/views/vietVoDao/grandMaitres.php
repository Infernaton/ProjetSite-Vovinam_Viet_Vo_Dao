<?php require_once 'php/init.php';?>

<link rel="stylesheet" href="css/maitres.css">

<div class="container mt-5">
        <!-- Titre de la page -->
        <div class="text-center">
            <div style="padding-bottom: 50px;">
                <h1 class="content-title">Le Maître fondateur</h1>
            </div>
        </div>
        <!-- Photo du ME Fondateur -->
        <div class="row">
            <div class="col-sm-4">
                <img style="width: 85%; margin-top:5px" src="assets/img/Maitres/ME_Fondateur.png" alt="">
            </div>
            <!-- Carte avec un effet de rotation -->
            <div class="col-sm-8">
                <div class="card-container manual-flip">
                    <div class="card">
                        <!-- Coté frontal de la carte -->
                        <div class="front">
                            <div class="content">
                                <!-- Contenu de la carte -->
                                <div class="main">
                                    <h3 class="name" style="display:inline-block">Maitre Nguyễn Lộc</h3>
                                    <p class="profession" style="padding-bottom: 10px;display:inline-block;">1912-1960</p>
                                    <p>Le Maître Nguyen Lôc est né en 1912 (soit le 8 avril du calendrier lunaire) dans le village de Hau Bang, district de Thach That, province de Sòn Tày au nord du Vietnam. Cette région étant bordée de montagnes, le Maître Fondateur pouvait observer les fêtes montagnardes. Dans ces fêtes, se déroulaient des jeux de lutte où les participants devaient mettre leur adversaire « le dos à terre ».</p>
                                </div>
                                <!-- Boutton pour retourner la carte -->
                                <div class="footer" style="float: right;">
                                    <button class="btn btn-simple" onclick="rotateCard(this)">
                                        En savoir +
                                    </button>
                                </div>
                            </div>
                        </div> <!-- Fin du coté frontal -->
                        <!-- Dos de la carte -->
                        <div class="back">
                            <!-- Titre -->
                            <div class="header">
                                <h5>Suite ...</h5>
                            </div>
                            <!-- Contenu du dos -->
                            <div class="content">
                                <div class="main">
                                    <p>Dès son plus jeune âge, il est formé à la pratique martiale ainsi que philosophique. Sur les conseils de son maître, il parcourut le Vietnam pour compléter son enseignement auprès des Maîtres les plus compétents. Au cours de son long voyage, il recueille de précieux documents anciens, dispersés et méconnus. Le grand Maître Nguyen Lôc n’avait de cesse de chercher, d’apprendre et d’étudier …</p>
                                </div>
                            </div>
                            <!-- Boutton pour retourner la carte -->
                            <div class="footer">
                                <button class="btn btn-simple" rel="tooltip" title="Retourner la carte" onclick="rotateCard(this)">
                                    <- Retour
                                </button>
                            </div>
                        </div> <!-- Fin du dos de la carte -->
                    </div> <!-- Fin de la carte -->
                </div>
            </div>
        </div>
        <!-- Titre -->
        <div class="text-center">
            <div style="padding: 50px;">
                <h1 class="content-title">Les grands maîtres</h1>
            </div>
        </div> 
        <?php 
        $greatMastersBeforeFetch = $db->query('SELECT * FROM specialist');
        $greatMasters = $greatMastersBeforeFetch->fetchAll(PDO::FETCH_ASSOC);

        //var_dump($greatMasters);
        ?>
        <!-- Carte des grands ME -->
        <div class="row">
            <?php
            for ($i=0;$i<count($greatMasters);$i++){
            ?>
            <div class="col-sm-6">
                <!-- Une carte -->
                <div class="card-container manual-flip" >
                    <div class="card">
                        <!-- Coté frontal -->
                        <div class="front">
                            <div class="content">
                                <!-- Photo -->
                                <div class="user">
                                    <img class="img-circle" src=" assets/img/Maitres/ME_Fondateur.png"/>
                                </div>
                                <!-- Contenu -->
                                <div class="main">
                                    <h3 class="name" style="display:inline-block">Maître <?php echo $greatMasters[$i]['name']?></h3>
                                    <p class="profession" style="padding-bottom: 10px;display:inline-block;"><?php echo $greatMasters[$i]['birthday'].' - '.$greatMasters[$i]['deathDate']?></p>
                                    <?php 
                                    $functions = explode(',', $greatMasters[$i]["function"]);
                                    for ($a=0; $a<count($functions); $a++){
                                        echo '<p>'.$functions[$a].'</p>';
                                    }
                                    ?>
                                </div>
                                <!-- Boutton de rotation -->
                                <div class="footer" style="float: right;">
                                    <button class="btn btn-simple" onclick="rotateCard(this)">
                                        En savoir +
                                    </button>
                                </div>
                            </div>
                        </div> <!-- Fin du coté frontal -->
                        <!-- Coté dos de la carte -->
                        <div class="back">
                            <!-- Titre -->
                            <div class="header">
                                <h5><b>Biographie de <?php echo $greatMasters[$i]['name']?></b></h5>
                            </div>
                            <!-- Contenu -->
                            <div class="content">
                                <div class="main">
                                    <p><?php echo $greatMasters[$i]['biography']?></p>
                                </div>
                            </div>
                            <!-- Boutton de rotation -->
                            <div class="footer">
                                <button class="btn btn-simple" rel="tooltip" title="Retourner la carte" onclick="rotateCard(this)">
                                    <- Retour
                                </button>
                            </div>
                        </div> <!-- Fin du dos de la carte -->
                    </div> <!-- Fin d'une carte -->
                </div>
            </div>
            <?php 
            } ?>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script>
       $().ready(function(){
        $('[rel="tooltip"]').tooltip();

    });

    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }
</script>