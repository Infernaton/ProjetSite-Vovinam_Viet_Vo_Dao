<?php require_once 'php/init.php';?>

<head>
<link rel="stylesheet" href="css/maitres.css">
</head>

<div class="container">
        <!-- Titre de la page -->
        <div class="text-center">
            <div style="padding: 50px;">
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
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores fugit animi ipsum. Inventore sint aliquid libero iste dolorum quasi soluta, aliquam, voluptas necessitatibus ex et eveniet. Voluptates doloribus quaerat laudantium.</p>
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
                                <h5>Titre</h5>
                            </div>
                            <!-- Contenu du dos -->
                            <div class="content">
                                <div class="main">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique distinctio illum dolore, veritatis labore fugiat accusamus, nulla ea cum ipsa saepe possimus eius sequi a at porro deleniti enim aliquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta odit, repudiandae accusantium enim nemo veritatis, deleniti cum unde adipisci quaerat molestias modi. Perferendis quaerat sint minus harum rem ad reprehenderit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat at sapiente neque assumenda sunt doloremque fuga magni aspernatur eveniet iusto aut omnis illum ratione a illo quis, id et rerum!</p>
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
                                    <h3 class="name" style="display:inline-block"><?php echo $greatMasters[$i]['name']?></h3>
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