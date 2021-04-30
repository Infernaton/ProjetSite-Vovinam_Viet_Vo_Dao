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

<div class="container">
  <br>
  <div class="text-center"><h1 class="content-title-yellow">Ici sera présent un résumé du Vovinam Viet Vo Dao</h1></div>
  
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint quia suscipit laudantium dolorem eos, soluta numquam eligendi quo libero illum aspernatur quisquam ea dignissimos error iure. Unde iure adipisci</p>
  <p>ipsum dolor sit amet consectetur adipisicing elit. Nesciunt facere, velit voluptates iste commodi ipsa! Corrupti ullam voluptatem, sit laboriosam dolorem, saepe ex velit illum ducimus esse suscipit architecto mollitia?</p>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non nam repudiandae natus placeat omnis eos inventore sequi quis in fugiat explicabo molestiae itaque odit corrupti minima doloremque iure, incidunt aut!</p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, natus fugiat? Ducimus aut itaque similique sint fugiat necessitatibus nulla laborum nostrum iure error asperiores quam, illo quod consectetur aliquid rerum.</p>
</div>