<div id="demo" class="carousel slide" data-ride="carousel">
  <?php 
  $dir = "assets/img/caroussel";
  $photos = scandir($dir,1);
  ?>
  <!-- Indicateurs du slide -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <?php
    for ($i=1;$i<count($photos)-2;$i++){
      echo '<li data-target="#demo" data-slide-to="'.$i.'"></li>';
    }
    ?>
  </ul>
      
  <!-- Photos slides -->
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="<?php echo $dir.'/'.$photos[0]?>" height="100%" width="100%" alt="vietvodao">
    </div>
    <?php
    for ($i=1; $i<count($photos)-2;$i++){
      echo '<div class="carousel-item">',
        '<img src="'.$dir.'/'.$photos[$i].'" height="100%" width="100%" alt="vietvodao">',
        '</div>';
    }
    ?>
  </div>
      
        <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="container mt-3 mt-md-5">
  <br>
  <div class="text-center  mb-5">
    <h1 class="content-title-yellow">Le Vovinam-Viet Vo Dao</h1>
    <h2> Son principe « HARMONIE ENTRE LA FORCE ET LA SOUPLESSE »</h2>
  </div>
  <h3 class="mt-5">Présentation</h3>
  <p>Le Vovinam-Viet Vo Dao présente tout un système technique et philosophique riche et structuré.</p>
  <p>Que vous soyez un enfant ou un adulte, un débutant ou un expert en arts martiaux, l'enseignement est adapté à votre âge, à vos capacités physiques et à votre niveau technique. La pratique vous conduit à rechercher en permanence, l'équilibre, la perfection du mouvement, et l'efficacité des enchaînements.</p>
</div>