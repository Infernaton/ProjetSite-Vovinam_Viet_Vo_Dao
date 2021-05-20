<?php 
require_once 'php/init.php';

function str_replace_first($from, $to, $content){
    $from = '/'.preg_quote($from, '/').'/';
    return preg_replace($from, $to, $content, 1);
}

$greatMastersBeforeFetch = $db->query('SELECT * FROM specialist WHERE hierarchy LIKE "great-master" ORDER BY id');
$greatMastersDB = $greatMastersBeforeFetch->fetchAll(PDO::FETCH_ASSOC);
//var_dump($greatMasters);

$path = 'assets/img/Maitres';
$greatMasters = file_get_contents("assets/json/greatMasters.json");
$greatMasters = json_decode($greatMasters, true, JSON_UNESCAPED_UNICODE);

$fondatorData = $greatMasters[0];
?>

<link rel="stylesheet" href="css/maitre.css">
<style>
.tooltip-inner{
    max-width: 500px; 
}
.fondator{
    height:470px;
}
</style>
<div class="container">
        <!-- Titre de la page -->
        <div class="text-center">
            <div class="mb-5">
                <h1 class="content-title-blue">Le Maître fondateur</h1>
            </div>
        </div>
        <!-- Photo du ME Fondateur -->
        <div class="row">
            <div class="col-12 col-md-4 justify-content-center">
                <img class="p-2" style="width: 100%;" src="assets/img/maitres/ME_Fondateur.png" alt="">
            </div>
            <!-- Carte avec un effet de rotation -->
            <div class="col-12 col-md-8">
                <div class="card-container manual-flip">
                    <div class="card">
                        <!-- Coté frontal de la carte -->
                        <div class="front fondator">
                            
                            <div class="content">
                                <!-- Contenu de la carte -->
                                <div class="header"> 
                                    <h3 class="name"><?php echo $fondatorData['name'] ?><small class="profession"> <?php echo $fondatorData['date']?></small></h3>
                                </div>
                                <div class="main">
                                    <?php 
                                    /*<span class="hint" rel="tooltip" title="<?php echo $note[0]?>">$le_message<span class="note">$nb</span></span>*/
                                    $hint = 0;
                                    for ($i=0;$i<2;$i++){
                                        $sentence = $fondatorData['content'][0]['paragraphes'][$i];
                                        for ($a=0;$a<strlen($sentence);$a++){
                                            if ($sentence[$a] == '['){
                                                $sentence = str_replace_first("[","<span class=\"hint\" rel=\"tooltip\" title=\"".$fondatorData['note'][$hint]."\">",$sentence);
                                                $sentence = str_replace_first("]","</span>","$sentence");
                                                $hint++;
                                            }
                                        }
                                        echo '<p>'.$sentence.'</p>';
                                    }
                                    ?>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-simple" data-toggle="modal" data-target="#fondator">En savoir +</button>
                                </div>
                            </div>
                            
                        </div> <!-- Fin du coté frontal -->
                    </div> <!-- Fin de la carte -->
                </div>
            </div>
        </div>
        <div class="modal fade" id="fondator">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h3 class="modal-title"><?php echo $fondatorData['name']?><small class="profession"> <?php echo $fondatorData['date']?></small></h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <?php 
                        $hint =0;
                        for ($i=0;$i<count($fondatorData['content']);$i++){
                            $part = $fondatorData['content'][$i];
                        ?>
                        <div id=<?php echo $i?>>
                            <div class="subtitle pl-3">
                                <h4><?php echo $part['title']?></h4>
                            </div>
                            <div class="content pl-4 pr-4">
                            <?php 
                            foreach ($part['paragraphes'] as $sentence){
                                if ($sentence[0] == '/'){
                                    $sentence = explode("&",$sentence);
                                    echo '<img src="#">';
                                    $sentence = $sentence[1];
                                    echo '<p> <b>'.$sentence.'</b> </p>';
                                    continue;
                                }
                                for ($a=0;$a<strlen($sentence);$a++){
                                    if ($sentence[$a] == '['){
                                        $sentence = str_replace_first("[","<span class=\"hint\" rel=\"tooltip\" title=\"".$fondatorData['note'][$hint]."\">",$sentence);
                                        $sentence = str_replace_first("]","</span>","$sentence");
                                        $hint++;
                                    }
                                }
                                echo '<p>'.$sentence.'</p>';
                            }
                            ?>  
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <script>
                        fondatorModal = document.getElementById('fondator');
                        catchPhrase = fondatorModal.getElementsByClassName('catch-phrase');
                        catchPhrase[0].parentElement.classList.add("praise");
                        for (i=0;i<catchPhrase.length;i++){
                            catchPhrase[i].innerHTML = "<p>Grand frère Nguyễn Lộc !</p>";
                        }
                    </script>

                    <div class="modal-footer">
                        <p class="praise"><small>Extrait du livre « Histoire du Vovinam-Viet Vo Dao » rédigé et publié par le Grand-maitre TRAN Nguyen Dao.</small></p>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Titre -->
        <div class="text-center">
            <div style="padding: 50px;">
                <h1 class="content-title-blue">Les grands maîtres</h1>
            </div>
        </div> 
        <!-- Carte des grands ME -->
        <div class="row">
            <?php
            for ($i=0;$i<count($greatMastersDB);$i++){
            ?>
            <div class="col-12 col-md-6">
                <!-- Une carte -->
                <div class="card-container manual-flip" >
                    <div class="card">
                        <div class="front">
                            <div class="content">
                                <!-- Photo -->
                                <div class="user">
                                    <img class="img-circle" src="<?php echo $greatMastersDB[$i]['pictureProfile']?>"/>
                                </div>
                                <!-- Contenu -->
                                <div class="header">
                                    <h3 class="name">Maître <?php echo $greatMastersDB[$i]['name']?> <small class="profession"><?php echo $greatMastersDB[$i]['birthday'].' - '.$greatMastersDB[$i]['deathDate']?></small></h3>
                                </div>
                                <div class="main">
                                    <style>
                                    /* width */
                                    .main::-webkit-scrollbar {
                                        width: 8px;
                                    }
                                    /* Handle */
                                    .main::-webkit-scrollbar-thumb {
                                        background: #BBBBBB;
                                        border-radius: 20px; 
                                    }
                                    /* Handle on hover */
                                    .main::-webkit-scrollbar-thumb:hover {
                                        background: #888888; 
                                    }
                                    </style>
                                    <?php 
                                    $functions = explode(',', $greatMastersDB[$i]["function"]);
                                    for ($a=0; $a<count($functions); $a++){
                                        echo '<p>'.$functions[$a].'</p>';
                                    }
                                    ?>
                                </div>
                                <!-- Boutton de rotation -->
                                <div class="footer" style="">
                                    <button class="btn btn-simple" data-toggle="modal" data-target="#m-<?php echo $greatMastersDB[$i]['id']?>">En savoir +</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <!-- Fin d'une carte -->
            </div>
            <?php 
            } ?>
        </div>
        <?php 
        for($i=0;$i<count($greatMastersDB);$i++) {
        ?>
        <div class="modal fade" id="m-<?php echo $greatMastersDB[$i]['id']?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                        <div class="modal-header">
                            <h3 class="modal-title">Maître <?php echo $greatMastersDB[$i]['name']?><small class="profession"> <?php echo $greatMastersDB[$i]['birthday'].' - '.$greatMastersDB[$i]['deathDate']?></small></h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                        <?php 
                        $hint =0;                        
                        for ($a=0;$a<count($greatMasters[$i+1]['content']);$a++){
                            $part = $greatMasters[$i+1]['content'][$a];
                        ?>
                        <div id=<?php echo $a?>>
                            <div class="subtitle pl-3">
                                <h4><?php echo $part['title']?></h4>
                            </div>
                            <div class="content pl-4 pr-4">
                            <?php 
                            foreach ($part['paragraphes'] as $sentence){
                                if ($sentence[0] == '/'){
                                    $sentence = explode("&",$sentence);
                                    echo '<img src="#">';
                                    $sentence = $sentence[1];
                                    echo '<p> <b>'.$sentence.'</b> </p>';
                                    continue;
                                }
                                for ($o=0;$o<strlen($sentence);$o++){
                                    if ($sentence[$o] == '['){
                                        $sentence = str_replace_first("[","<span class=\"hint\" rel=\"tooltip\" title=\"".$greatMasters[$i+1]['note'][$hint]."\">",$sentence);
                                        $sentence = str_replace_first("]","</span>","$sentence");
                                        $hint++;
                                    }
                                }
                                echo '<p>'.$sentence.'</p>';
                            }
                            ?>  
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        </div>

                        <div class="modal-footer">
                            <p class="praise"><small>Extrait du livre « Histoire du Vovinam-Viet Vo Dao » rédigé et publié par le Grand-maitre TRAN Nguyen Dao.</small></p>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
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