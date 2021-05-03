<?php require_once 'php/init.php';?>

<link rel="stylesheet" href="css/maitre1.css">
<style>
.dirr {
    display: flex;
    justify-content: center;
}
.carousel-control-next, .carousel-control-prev {
    position: relative;
    width: auto;
    z-index: 1;
    align-items: center;
    color: black;
    text-align: center;
    transition: opacity .15s ease;
}
.tooltip-inner{
    max-width: 500px; 
}
</style>
<div class="container mt-5">
        <!-- Titre de la page -->
        <div class="text-center">
            <div style="padding-bottom: 50px;">
                <h1 class="content-title-blue">Le Maître fondateur</h1>
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
                            <div class="header"> 
                                <h3 class="name">Maitre Nguyễn Lộc <small class="profession">1912-1960</small></h3>
                            </div>
                            <div class="content">
                                <!-- Contenu de la carte -->
                                <?php
                                    $note = [
                                        "Le 8 avril de l'année Nham Ty, (année du Rat), selon le calendrier lunaire.",
                                        "Actuellement Ha Tay.",
                                        "La famille du maître Nguyễn Lộc est composée de: <ol> <li>Nguyễn Lộc,</li> <li>Nguyễn Thị Kim Thái,</li> <li>Nguyễn Văn Dần,</li> <li>Nguyễn Quang Hải,</li> <li>Nguyễn Thị Bích Hà.</li></ol>",
                                        "Entre 1912 et 1938, le Vietnam est encore sous la domination française. Il existe de très nombreux mouvements et des organisations révolutionnaires et résistances contre le gouvernement colonial français.",
                                        "L'Homme dans le sens universel.",
                                        "Plus tard, ces valeurs sont devenues les Codes d'Honneur des Maîtres d’où les dix principes fondamentaux du Vovinam-Viet Vo Dao établis par le premier Conseil des Maîtres du Vovinam-Viet Vo Dao en 1964, puis transformés en neuf principes fondamentaux internationaux par le 7ème Congrès Mondial du Vovinam-Viet Vo Dao en mai 2012 à Paris.",
                                        "Niveau moyen, équivalent de la ceinture jaune ou noire de notre époque.",
                                        "Réf:",
                                        "A l'époque les arts martiaux sont encore interdits par le gouvernement colonial.",
                                        "Parmi les 1ers pratiquants figurent : Nguyễn Dần (jeune frère du maître fondateur), Nguyễn Đăng Hiển, mademoiselle Nguyễn Thị Minh et Tạ Quang Bửu. Mémoires du patriarche Lê Sáng, édition Copyrico, 2001, page 17 (Hồi ký Chưởng môn Vovinam Lê Sáng, Copyrico, 2001).",
                                        "Monsieur Tạ Quang Bửu (1910-1986), représente la ligue Vietminh au moment de la signature des accords de Genève le 20 juillet 1954, qui séparent le Vietnam en deux parties, avec les ministres des affaires étrangères, à savoir John Foster Dulles (États-Unis), Molotov (Union soviétique), Anthony Eden (Royaume Uni), George Bidaut (France), Chu En-lai (Chine populaire).",
                                        "",
                                        "",
                                    ]
                                ?>
                                <div class="main">
                                    <p>Monsieur Nguyễn Lộc est né <span rel="tooltip" title="<?php echo $note[0]?>">le 24 mai 1912<span class="note">1</span></span> dans le village de Huu Bang, district de Thach That, province de <span rel="tooltip" data-placement="auto" title="<?php echo $note[1]?>"> Son Tay<span class="note">2</span></span>, 
                                    au Nord du Vietnam. Fils de Monsieur Nguyễn Đình Xuyến et de Madame Nguyễn Thị Hoà, il est l'aîné d'une famille de trois frères et <span rel="tooltip" data-placement="auto"title="<?php echo $note[2]?>">deux sœurs<span class="note">3</span></span>. 
                                    Pour des raisons économiques, sa famille a déménagé ensuite à Hanoï, capitale du Vietnam.</p>
                                    <p>Maître Nguyễn Lộc a grandit dans un pays sous domination coloniale française depuis cinquante ans (1862-1912) [cf. annexe 1], où les tensions sociales sont au <span rel="tooltip" title="<?php echo $note[3]?>">plus haut<span class="note">4</span></span>. 
                                    D’un côté, les révolutionnaires incitent la population et en particulier les jeunes à commettre des actions violentes contre le gouvernement colonial français, de l'autre, les colonialistes utilisent toutes les ruses et manœuvres pour réprimer, 
                                    terroriser ou endormir la population par des courants mondains, romantiques et dévergondés afin que les patriotes vietnamiens ne disposent de soutien dans la population pour étendre la révolution contre la puissance dominatrice...</p>
                                </div>
                                <!-- Boutton pour retourner la carte  onclick="rotateCard(this)"-->
                            </div>
                            <div class="footer">
                                <button class="btn btn-simple" data-toggle="modal" data-target="#fondator">En savoir +</button>
                            </div>
                        </div> <!-- Fin du coté frontal -->

                        <!-- Dos de la carte -->
                        <div class="back">
                            <div class="header">
                                <h5>Suite ...</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"> 1.
                                                <p>Face à cette situation, maître Nguyễn Lộc a pris conscience de ces courants opposés qui tiraillent le pays. Il cherche une autre voie dans le but de surpasser ces deux tendances et de développer une nouvelle orientation, pouvant conduire les jeunes vietnamiens dans une voie plus pacifique et plus noble.</p>
                                                <p>D'un côté, maître Nguyễn Lộc condamne avec fermeté la politique colonialiste et de l'autre, il désapprouve les méthodes violentes préconisées par les révolutionnaires de l'époque.</p>
                                                <p>Selon lui, l'Homme doit être au centre de toute réflexion. Il prône la révolution du corps et de l’esprit [cf. annexe 2] pour guider la jeunesse sur trois plans : l’Esprit, le Corps et la Voie. Il considère que le fait d'être humain est une bonne chose, mais devenir <span rel="tooltip" title="<?php echo $note[4]?>">l'Homme Vrai<span class="note">5</span></span> est encore plus noble. </p>
                                            </div>
                                            <div class="carousel-item"> 
                                                <p>Pour lui, l'Homme Vrai doit être ouvert au dialogue, indépendant, pacifique, énergique, courageux, tolérant, généreux, pur, respectueux, déterminé, cultivé, intègre, fort, utile et avoir le <span rel="tooltip" title="<?php echo $note[5]?>">sens de l’honneur<span class="note">6</span></span>. L'Homme Vrai se doit aussi de cultiver un corps robuste, solide, résistant et tenace pour se défendre et pour être utile à la société.</p>
                                                <p>Avec ces valeurs, il veut, d’une part, aider les jeunes à s’échapper de l'intoxication du régime colonial et, d’autre part, réveiller ceux qui se sont engagés dans la voie violente afin d’éviter des tueries et de la haine.</p>
                                                <p>Maître Nguyễn Lộc pense que la société humaine est durable, alors que le régime colonial ou les violences révolutionnaires ne sont que temporaires. Il ne veut pas que les générations futures subissent les conséquences d’une politique d'intoxication ou de violence. Ainsi, son souhait est de laisser au peuple vietnamien et à l'humanité un modèle de vie, une méthode permettant de se perfectionner par l’art de cultiver son corps et son esprit avec un art martial moderne, inspiré de la tradition des arts martiaux vietnamiens plusieurs fois millénaires.</p>
                                            </div>
                                            <div class="carousel-item"> 
                                                <p>Nourri par cette grande aspiration, outre la perfection de la culture et de la vertu, il étudie et s'entraîne à la plupart des arts martiaux vietnamiens. Grâce à sa force physique hors du commun et à son grand talent, il progresse de manière exceptionnelle. Pour enrichir d’avantage ses connaissances, il voyage beaucoup et visiter de nombreuses salles d’entraînement pour s’entretenir avec d’anciens officiers de l'armée impériale et des grands maîtres de renom dans le milieu des arts martiaux vietnamiens.</p>
                                                <p>Il a longuement étudié les caractéristiques respectives de chaque discipline martiale. Il a ainsi remarqué que chaque art martial possède ses avantages et ses inconvénients et qu'en pratiquant une seule discipline, il est difficile d’obtenir rapidement des résultats souhaités. De plus, pour atteindre un <span rel="tooltip" title="<?php echo $note[6]?>">bon niveau<span class="note">7</span></span>, le pratiquant doit s'engager dans la durée, souvent plus de dix ans.</p>
                                            </div>
                                            <div class="carousel-item"> 
                                                <p>Maître Nguyễn Lộc cherche donc à développer une nouvelle méthode d’entraînement qui permettrait d'atteindre un bon niveau dans un délai plus raisonnable. Pour y arriver, il commence par codifier sa méthode d'apprentissage en prenant la lutte et les arts martiaux traditionnels vietnamiens comme fondement, qu’il complète progressivement en s’inspirant des points forts des autres disciplines pour donner naissance, en 1938, à une nouvelle discipline qu’il nomme <span rel="tooltip" title="<?php echo $note[7]?>">Vovinam<span class="note">8</span></span>.
                                                <p>Il décide ensuite d'expérimenter cette méthode en entraînant <span rel="tooltip" title="<?php echo $note[8]?>">en secret<span class="note">9</span></span> certains de ses <span rel="tooltip" title="<?php echo $note[9]?>">proches<span class="note">10</span></span>.Durant cette période expérimentale et d’après le témoignage de Monsieur Nguyễn Đăng Hiển, l'un de ses premiers élèves, maître Nguyễn Lộc accorde beaucoup d'importance aux techniques de base telles que les positions (Tấn), les coups de poing (Đấm), les coups de pied (Đá), les tranchants de la main (Chém), les parades (Gạt), les coudes (Chỏ), les genoux (Gối), etc. Il ajoute également un système pragmatique de techniques de clés et de dégagements (Khoá Gỡ), de techniques de lutte traditionnelle (Vật), de techniques de ciseaux (Đòn Chân) et surtout de techniques d’entraînement avec un partenaire (Song Luyện).</p>
                                            </div>
                                            <div class="carousel-item"> 2.
                                                <p>Après une année expérimentale réussie, qui dépasse largement ses prévisions, maître Nguyễn Lộc prend la décision de présenter le Vovinam au public.</p>
                                                <p>A l'automne 1939, maître Nguyễn Lộc emmène ses premiers élèves [cf. annexe 3] au Grand Théâtre de Hanoï [cf. annexe 4] pour effectuer la première démonstration de l'histoire du Vovinam. Parmi les élèves ayant participé à cette démonstration historique, figurent Mademoiselle Nguyễn Thị Minh [cf. annexe 5], <span rel="tooltip" title="<?php echo $note[10]?>">Monsieur Tạ Quang Bửu<span class="note">11</span></span> et Monsieur Nguyễn Đăng Hiển (D'après les témoignages de Madame Nguyễn Lộc et des maîtres Nguyễn Dần, Lê sáng, Phan Dương Bình et Trần Huy Phong).</p>
                                            </div>
                                            <div class="carousel-item">
                                                <p>Par cette démonstration, il veut également mesurer l'accueil de la population et évaluer à travers ses pratiquants, les valeurs martiales qu'il a étudiées durant des années.</p>
                                                <p>---Photo D'archive---
                                            </div>
                                            <div class="carousel-item">
                                                <p>Après cette démonstration, le Vovinam est chaleureusement accueilli par tous les milieux sportifs et d'arts martiaux à Hanoï, devenant ainsi le flambeau éclatant des arts martiaux nationaux pour la jeunesse. En effet, pendant plus de 75 ans (1862-1940), le gouvernement colonial français a interdit toutes les activités d'arts martiaux au Vietnam. Maître Nguyễn Lộc est le premier à redonner vie aux arts martiaux nationaux, lançant ainsi un appel pour réveiller les consciences vietnamiennes plongées dans un sommeil profond depuis plus d’un demi-siècle.</p>
                                                <p>Il redonne ainsi la confiance et la fierté aux jeunes oscillant encore entre les courants romantiques occidentaux et les idées haineuses.</p>
                                            </div>
                                            <div class="carousel-item">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <button class="btn btn-simple" onclick="rotateCard(this)"><- Retour</button>
                                    <div class="dirr">
                                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                            <span class="carousel-control-prev-icon" style="background-color:black;"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#demo" data-slide="next">
                                            <span class="carousel-control-next-icon"style="background-color:black;"></span>
                                        </a>
                                    </div>
                            </div>
                        </div> <!-- Fin du dos de la carte -->
                    </div> <!-- Fin de la carte -->
                </div>
            </div>
        </div>
        <!-- Titre -->
        <div class="text-center">
            <div style="padding: 50px;">
                <h1 class="content-title-blue">Les grands maîtres</h1>
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

                        <div class="modal fade" id="fondator">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h3 class="modal-title">Maitre Nguyễn Lộc <small class="profession">1912-1960</small></h3>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body pl-5 pr-5">
                                        <h4> I - La jeunesse et la période préliminaire à la création </h4>
                                    <p>Monsieur Nguyễn Lộc est né <span class="hint" rel="tooltip" title="<?php echo $note[0]?>">le 24 mai 1912<span class="note">1</span></span> dans le village de Huu Bang, district de Thach That, province de <span class="hint" rel="tooltip" data-placement="auto" title="<?php echo $note[1]?>"> Son Tay<span class="note">2</span></span>, 
                                    au Nord du Vietnam. Fils de Monsieur Nguyễn Đình Xuyến et de Madame Nguyễn Thị Hoà, il est l'aîné d'une famille de trois frères et <span class="hint" rel="tooltip" data-placement="auto"title="<?php echo $note[2]?>">deux sœurs<span class="note">3</span></span>. 
                                    Pour des raisons économiques, sa famille a déménagé ensuite à Hanoï, capitale du Vietnam.</p>
                                    <p>Maître Nguyễn Lộc a grandit dans un pays sous domination coloniale française depuis cinquante ans (1862-1912) [cf. annexe 1], où les tensions sociales sont au <span class="hint" rel="tooltip" title="<?php echo $note[3]?>">plus haut<span class="note">4</span></span>. 
                                    D’un côté, les révolutionnaires incitent la population et en particulier les jeunes à commettre des actions violentes contre le gouvernement colonial français, de l'autre, les colonialistes utilisent toutes les ruses et manœuvres pour réprimer, 
                                    terroriser ou endormir la population par des courants mondains, romantiques et dévergondés afin que les patriotes vietnamiens ne disposent de soutien dans la population pour étendre la révolution contre la puissance dominatrice...</p>
                                    <p>Face à cette situation, maître Nguyễn Lộc a pris conscience de ces courants opposés qui tiraillent le pays. Il cherche une autre voie dans le but de surpasser ces deux tendances et de développer une nouvelle orientation, pouvant conduire les jeunes vietnamiens dans une voie plus pacifique et plus noble.</p>
                                    <p>D'un côté, maître Nguyễn Lộc condamne avec fermeté la politique colonialiste et de l'autre, il désapprouve les méthodes violentes préconisées par les révolutionnaires de l'époque.</p>
                                    <p>Selon lui, l'Homme doit être au centre de toute réflexion. Il prône la révolution du corps et de l’esprit [cf. annexe 2] pour guider la jeunesse sur trois plans : l’Esprit, le Corps et la Voie. Il considère que le fait d'être humain est une bonne chose, mais devenir <span class="hint" rel="tooltip" title="<?php echo $note[4]?>">l'Homme Vrai<span class="note">5</span></span> est encore plus noble. </p>
                                    <p>Pour lui, l'Homme Vrai doit être ouvert au dialogue, indépendant, pacifique, énergique, courageux, tolérant, généreux, pur, respectueux, déterminé, cultivé, intègre, fort, utile et avoir le <span class="hint" rel="tooltip" title="<?php echo $note[5]?>">sens de l’honneur<span class="note">6</span></span>. L'Homme Vrai se doit aussi de cultiver un corps robuste, solide, résistant et tenace pour se défendre et pour être utile à la société.</p>
                                    <p>Avec ces valeurs, il veut, d’une part, aider les jeunes à s’échapper de l'intoxication du régime colonial et, d’autre part, réveiller ceux qui se sont engagés dans la voie violente afin d’éviter des tueries et de la haine.</p>
                                    <p>Maître Nguyễn Lộc pense que la société humaine est durable, alors que le régime colonial ou les violences révolutionnaires ne sont que temporaires. Il ne veut pas que les générations futures subissent les conséquences d’une politique d'intoxication ou de violence. Ainsi, son souhait est de laisser au peuple vietnamien et à l'humanité un modèle de vie, une méthode permettant de se perfectionner par l’art de cultiver son corps et son esprit avec un art martial moderne, inspiré de la tradition des arts martiaux vietnamiens plusieurs fois millénaires.</p>
                                                  
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script>
       $().ready(function(){
        $('[rel="tooltip"]').tooltip({html: true, placement: "top"});

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