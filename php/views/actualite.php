<?php
$req = $db->query('SELECT * FROM news ORDER BY id DESC');
$news = $req->fetchAll(PDO::FETCH_ASSOC);

function printLastNews($news){
    ?>
    <div id="lastInfo">
        <h3>Dernière Actualité</h3>
        <div class="content-main border">
            <div class="row" style="max-height: auto; overflow: hidden;">
                <div class="only-before-sm-hide col" style="posistion:relative;">
                    <div class="box-shadow-hide"></div>
                    <div style="position: absolute;">
                        <h5><?php echo $news['title']?></h5>
                        <p><?php echo $news['content']?></p>
                    </div>
                </div>
                <div class="col-12 col-sm-5 col-md-4 col-lg-2">
                    <?php
                        picture($news['category']);
                    ?>
                    <div class="date text-center">
                        <i><?php echo $news['date']?> - <?php echo $news['author']?></i>
                    </div>
                </div>
            </div>
            <hr>
            <div>
                <button class="btn btn-simple" data-toggle="modal" data-target="#n-<?php echo $news['id']?>">+ Plus</button>
            </div>
        </div>
        <?php printModal($news)?>
    </div>
    <?php
}
function printNews($news){
    ?>
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="content-main border" data-toggle="modal" data-target="#n-<?php echo $news['id']?>">
            <?php 
                picture($news['category']);
            ?>
            <hr>
            <div class="text-center">
                <h5><?php echo $news['title']?></h5>
                <div class="date">
                    <i><?php echo $news['date']?> - <?php echo $news['author']?></i>
                </div>
            </div>
        </div>
        <?php printModal($news)?>
    </div>
    <?php
}
function printModal($news){
    ?>
    <div class="modal" id="n-<?php echo $news['id']?>">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title"><?php echo $news['title']?></h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <?php echo $news['content']?>
                </div>
                <div class="modal-footer">
                    <i><?php echo $news['date']?> - <?php echo $news['author']?></i>
                </div>
            </div>
        </div>
    </div>
    <?php
}
function picture($name){
    echo '<div class="image">';
    $file = 'assets/img/news/'.strtolower($name).'.png';
    if (file_exists($file)){
        echo '<img class="img_fill" src="'.$file.'" alt="">';
    }else {
        echo '<img class="img_fill" src="assets/img/no-picture.png" alt="">',
            '<div class="category">'.$name.'</div>';
    }
    echo '</div>';
}
?>
<style>
.btn-simple {
    opacity: .8;
    color: #666666;
    background-color: transparent;
}
</style>
<div class="container">
    <div class="text-center mb-5">
        <h1 class="content-title-blue">Actualités</h1>
    </div>
    <?php printLastNews($news[0]); ?>
    <div class="mt-5" id="thread">
        
        <h3>Précédentes Actualités</h3>
        <hr>
        <div class="row">
            <?php
                for($i=1;$i<count($news);$i++){
                    printNews($news[$i]);
                }
            ?>
        </div>
    </div>
</div>