<?php 

$histoire = file_get_contents("assets/json/history.json");
$histoire = json_decode($histoire, true, JSON_UNESCAPED_UNICODE);

function printPara($paragraph){
    $path = 'assets/json/history';
    if ($paragraph[0] == '/'){
        echo '<img src="'.$path.$paragraph.'"alt="" class="top-centered mt-5">';
    }
    else{
        echo '<p class="mt-5">'.$paragraph.'</p>';
    }
}
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
                    <div class="row p-2">
                        <div class="md-hide col-lg-1"></div>
                        <div class="col-12 col-md-6 col-lg-5">
                            <?php 
                            foreach ($partHistoire['content1'] as $paragraph){
                                printPara($paragraph);
                            }
                            ?>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5">
                            <?php 
                            foreach ($partHistoire['content2'] as $paragraph){
                                printPara($paragraph);
                            }
                            ?>
                        </div>
                        <div class="md-hide col-lg-1"></div>
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
            <ul>
            <?php 
                for ($i=0; $i<count($histoire);$i++){
                    echo '<li>'.'<a href="#'.$histoire[$i]['id'].'" class="dropdown-item">'.$histoire[$i]['title'].'</a>'.'</li>';
                }
            ?>
            </ul>
            </div>
        </div>
        
    </div>
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