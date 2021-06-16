<?php
$req = $db->query('SELECT * FROM organisation ORDER BY id');
$function = $req->fetchAll(PDO::FETCH_ASSOC);

$mail = [
        'Conseildesmaitres@vietvodao.com',
        'dtn@vietvodao.com',
        'Secretariat@vietvodao.com',
        'secretairegeneral@vietvodao.com',
        'presidentfr@vietvodao.com',
        'tresorierfr@vietvodao.com',
        'pdt.idf@vietvodao.com',
        'rt.idf@vietvodao.com',
        'pdt.nouvelleaquitaine@vietvodao.com',
        'rt.nouvelleaquitaine@vietvodao.com',
        'pdt.rhonealpes@vietvodao.com',
        'rt.rhonealpes@vietvodao.com',
        'pdt.bassenormandie@vietvodao.com',
        'rt.bassenormandie@vietvodao.com',
        'pdt.champagne@vietvodao.com',
        'rt.champagne@vietvodao.com',
        'pdt.bretagne@vietvodao.com',
        'rt.bretagne@vietvodao.com',
];

$affectations = array();
foreach($function as $f){
        //Event sort by year
        $affectation = $f['affectation'];
        //If a year is already in the table, we put the event in it
        if (array_key_exists($affectation, $affectations)){
            array_push($affectations[$affectation], $f);
        }
        //If not, we create that year
        else {
            $affectations[$affectation] = [$f];
        }
}
function printRole($function,$mail) {
        $picture = 'assets/img/no-picture.png';

        if ($function['id_master']!= 0){
            global $db;
            $req = $db->query('SELECT * FROM specialist WHERE id= "'.$function['id_master'].'"');
            $master = $req->fetch(PDO::FETCH_ASSOC);
            $name = $master['name'];
            $picture = $master['pictureProfile'];
        }else {
            $name = $function['info'];
        }
        ?>
        <div class="person">
            <div class="role">
                <h4><?php echo $function['role'];?></h4>
            </div>
            <div class="body d-flex">
                <img class="d-inline" src="<?php echo $picture?>" alt="image" height="75">
                <div class="d-inline">
                        <h5><?php echo $name;?></h5>
                        <p class=""><?php echo $mail?></p>
                </div>
            </div>
        </div>
        <?php
}
?>
<link rel="stylesheet" href="css/federation.css">
<div class="container info">
        <div class="text-center">
                <h1 class="content-title-yellow"> Contacts </h1>
        </div>
        <?php
        $count = 0;
        foreach ($affectations as $affectation => $list) {
            ?>
            <div class="border mt-4 p-4">
                <h3><?php echo $affectation?>:</h3>
                <div class="row">
                        <?php
                        foreach ($list as $function) {
                        ?>
                        <div class="col-12 col-md-6">
                                <?php printRole($function,$mail[$count]);?>
                        </div>
                        <?php
                        $count += 1;
                        }
                        ?>
                </div>
            </div>
            <?php
        }
        ?>

</div>