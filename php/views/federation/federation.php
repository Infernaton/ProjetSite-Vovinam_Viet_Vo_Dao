<link rel="stylesheet" href="css/federation.css">

<div class="container">
    <!-- Image du groupe fondateur -->
    <div class="text-center pb-3">
        <h1 class="content-title-blue">La Fédération</h1>
        <p class="pt-2"><a href="#calendrier"><i>Voir les Calendriers</i></a></p>
    </div>
        <img class="mx-auto d-block" src="assets/img/federation/groupe_fondateur.jpg">
        <p>
            Fondé en août 1985, la fédération de Vovinam-Viêt Võ Ðao France est une association à but non lucratif régie 
            par la loi du 1er juillet 1901. Depuis sa création, la Fédération gère et coordonne les nombreuses activités 
            au sein des nombreuses Régions qui sont actuellement sous sa tutelle. Son action est guidée par le souci constant 
            de garder au Vovinam Viet Vo Dao la place qui lui est due dans le paysage des arts martiaux. Au fil des ans, 
            et plus particulièrement dans la tourmente de ces dernières années, elle s’est imposée en tant que structure 
            légitime du Vovinam Viet Vo Dao. Défendre les valeurs de notre Art et le promouvoir dans le respect des conventions 
            et règles en vigueur, telle est sa mission. La Fédération VOVINAM VIET VO DAO FRANCE est membre de la Fédération 
            Mondiale. Elle met son expérience et son dynamisme au service du VOVINAM VIET VO DAO International dont elle est 
            l’un des membres les plus influents. L’impact du VOVINAM VIET VO DAO FRANCE est remarquable puisqu’il est devenu 
            un modèle pour les structures des autres pays qui lui ont confié l’organisation des plus grands événements 
            internationaux (Coupe d’Europe, Congrès Mondial, Coupe du Monde…).
        </p>
        <br>
        
        <div id="demo" class="carousel slide border text-center p-2" data-ride="carousel" data-interval="0" id="plaquette">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img_fill" src="assets/img/federation/plaquette1.png" alt="PlaquetteVVDpart1">
                </div>
                <div class="carousel-item">
                    <img class="img_fill" src="assets/img/federation/plaquette2.png" alt="PlaquetteVVDpart2">
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div class="text-right" id="calendrier">
            <p><i>Format PDF: <a href="assets/download_file/Plaquette FVVNVVDFrance.pdf" target="_blank">Plaquette FVVNVVDFrance.pdf</a></i></p>
        </div>

        <h4 class="text-center">Calendriers Fédéraux</h4> <br>
        <div id="calendriers_fédéraux" class="row">
            <?php 
            $json_file = "assets/json/calendar.json";
            $calendars = json_decode(file_get_contents($json_file), true, JSON_UNESCAPED_UNICODE);
            foreach($calendars as $calendar){
            ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="text-center">
                    <a href="<?php echo $calendar['pdf']?>" target="_blank">
                        <img class="img_fill" src="<?php echo $calendar['img_preview'] ?>" alt="preview">
                        <p><?php echo $calendar['title'] ?></p>
                    </a>
                </div>
            </div>
            <?php 
            }
            ?>
        </div>
</div>