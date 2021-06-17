<?php
$req = $db->query('SELECT * FROM news ORDER BY date DESC');
$news = $req->fetchAll(PDO::FETCH_ASSOC);

function printLastNews($news){
    ?>
    <div id="lastInfo">
        <h3>Dernière Actualité</h3>
        <div class="content-main border">
            <div class="row">
                <div class="col">
                    <h5><?php echo $news['title']?></h5>
                    <p><?php echo $news['content']?></p>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 image">
                    <img class="img_fill" src="assets/img/no-picture.png" alt="">
                    <div class="category"><?php echo $news['category']?></div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
function printNews($news){
    ?>
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="content-main border">
            <div class="col-12 image">
                <img class="img_fill" src="assets/img/no-picture.png" alt="">
                <div class="category"><?php echo $news['category']?></div>
            </div>
            <div class="text-center">
                <h5><?php echo $news['title']?></h5>
            </div>
        </div>
    </div>
    <?php
}
?>
<style>
#category .list-group-item-action{
    transition: auto;
}
</style>
<div class="container">
    <div class="text-center mb-5">
        <h1 class="content-title-blue">Actualités</h1>
    </div>
    <?php printLastNews($news[0]); ?>
    <div class="" id="thread">
        <h3>Précédentes Actualités</h3>
        <div class="row">
            <?php
                for($i=1;$i<count($news);$i++){
                    printNews($news[$i]);
                }
            ?>
        </div>
    </div>
    
    <!--
        <div class="col-2" id="category">
            <ul class="list-group">
                <li class="list-group-item list-group-item-dark">Catégorie</li>
                <a href="#" class="list-group-item list-group-item-action">First item</a>
                <a href="#" class="list-group-item list-group-item-action">First item</a>
                <a href="#" class="list-group-item list-group-item-action">First item</a>
                <a href="#" class="list-group-item list-group-item-action">First item</a>
                <a href="#" class="list-group-item list-group-item-action">First item</a>
            </ul>
        </div>-->
</div>