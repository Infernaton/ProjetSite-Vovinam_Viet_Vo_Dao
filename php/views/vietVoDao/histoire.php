<?php 
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
    <div class="container p-1">
    <div class="" id="main">
        <?php 
        foreach ($histoire as $partHistoire) {       
        ?>
        <section class="section-fade" style="padding-bottom: 20px;">
            <div class="" id="<?php echo $partHistoire['id'] ?>">
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
        <a id="sommaire" href="#" class="dropdown-toggle menu-init" data-toggle="dropdown" style="display: inline;"><i class="fas fa-bars"></i> Sommaire</a>
        <div id="sommaire">
            <div class="dropdown-menu">
            <?php 
                for ($i=0; $i<count($histoire);$i++){
                    echo '<a href="#'.$histoire[$i]['id'].'" class="dropdown-item">'.$histoire[$i]['title'].'</a>';
                }
            ?>
            </div>
        </div>
        
    </div>
<!--
    <div class="container col-12 col-md-3 p-3 fixed-right" id='resume'>
        <div class="text-center"><h3 class="content-title-blue">Sommaire</h3></div>
        <hr>
        <ul>
            <a class="dropdown-item" href="?c=federation&p=0">La Fédération</a>

        <?php 
            for ($i=0; $i<count($histoire);$i++){
                echo '<li style="margin-bottom:'.(100/count($histoire)).'%"><a href="#'.$histoire[$i]['id'].'" class="link">'.$histoire[$i]['title'].'</a></li>';
            }
        ?>
        <ul>
    </div>-->
</div>
<script>
window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;
    if (scroll >= 200){
        document.getElementById("sommaire").classList.add("menu")
    }else {
        document.getElementById("sommaire").classList.remove("menu")
    }
});
</script>