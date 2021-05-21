<?php 
/**
 * https://freefrontend.com/css-mobile-menus/
 * Pour le Mobile Menu
 */
$path = 'assets/img/le-vvd';
$histoire = file_get_contents("assets/json/history.json");
$histoire = json_decode($histoire, true, JSON_UNESCAPED_UNICODE);
?>
<link rel="stylesheet" href="css/discipline.css">

<style>
body{
    overflow-x:hidden;
}
.fixed-right{
    position:fixed;
    top:150px;
    bottom:22%;
    right:0;
    overflow-y: scroll;
}
</style>
    <div class="container-fluid p-1">
    <div class="" id="main">
        <?php 
        foreach ($histoire as $partHistoire) {       
        ?>
        <section class="section-fade" style="padding-bottom: 20px;">
            <div class="container" id="<?php echo $partHistoire['id'] ?>">
                <div class="text-center">
                    <div style="padding: 20px;">
                        <h2 class="content-title-yellow"><?php echo $partHistoire['title']?></h1>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <?php 
                            //<img src="assets/img/le-vvd/groupe_fondateur.jpg" alt="" class="top-centered mt-5">
                                foreach ($partHistoire['content1'] as $paragraph){
                                    if ($paragraph[0] == '/'){
                                        echo '<img src="'.$path.$paragraph.'"alt="" class="top-centered mt-5">';
                                    }
                                    else{
                                        echo '<p class="mt-5">'.$paragraph.'</pa>';
                                    }
                                }
                            ?>
                        </div>
                        <div class="col-12 col-md-6">
                            <?php 
                            foreach ($partHistoire['content2'] as $paragraph){
                                if ($paragraph[0] == '/'){
                                    echo '<img src="'.$path.$paragraph.'"alt="" class="top-centered mt-5">';
                                }
                                else{
                                    echo '<p class="mt-5">'.$paragraph.'</p>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
        } 
        ?>
    </div>
<!--
    <div class="container col-12 col-md-3 p-3 fixed-right" id='resume'>
        <div class="text-center"><h3 class="content-title-blue">Sommaire</h3></div>
        <hr>
        <ul>
        <?php 
            for ($i=0; $i<count($histoire);$i++){
                echo '<li style="margin-bottom:'.(100/count($histoire)).'%"><a href="#'.$histoire[$i]['id'].'" class="link">'.$histoire[$i]['title'].'</a></li>';
            }
        ?>
        <ul>
    </div>-->
</div>
<!--
<script src="scripts/la-discipline.js"></script>
-->