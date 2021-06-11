<?php 
function partials_header($categorie,$page){
    global $pages;
    $nav = [
        ["Accueil"],
        ["La Fédération",["La Fédération","Les Régions et Clubs","Contacts","Liens","Mentions Légales et Logo"]],
        ["Direction Technique",["Calendrier","Le Conseil des Maîtres","Liste officielle des maîtres et ceintures noires","Passage de grades"]],
        ["Le Vovinam-Viet Vo Dao",["La discipline et ses valeurs","L'Histoire","Les Grands Maîtres",
            ['La Fédération mondiale <i class="fas fa-external-link-alt"></i>',"https://vovinamworldfederation.eu/fr/"]
        ]],
        ["Affiliation/licenciés",["Documentation","Modalités d'Affiliation","FAQ Affiliation","Licenciés","Passeport"]],
        ["Actualités"],
        ["Contact",["Contact","FAQ","Personnalité de la Fédération"]]
    ];
?>   
<!-- Configurations de la page -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/font_title.css">
    <link rel="stylesheet" href="css/mobileNav.css">
    <title>Vovinam-Viet Vodao</title>
</head>
<style>
.navbar-toggler-icon{
    color: white;
}
@media screen and (max-width: 991px) {
    .bg{
        background-color: #343a40 !important;
    }
}
.bg {
    background-color: #f8f9fa;
}
</style>
<body>
    <header>
        <div class="container-fluid header">
            <div class="row">
                <div class="col-2"><a href="?c=home"><img src="assets/img/logo.png" width="51%" height="100%"></a></div>
                <div class="col-9"><img src="assets/img/header.png" width="100%"></div>
            </div>
        </div>
    </header>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg sticky-top bg navbar-lightgray" id="navbar">
        <button class="navbar-toggler nav-top" type="button">
            <span id="ham" class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu version Mobile -->
        <div class="nav-drill">
            <ul class="nav-items">
                <li class="nav-item" style="border:none;"><h3 class="mobile-title">Sommaire<i class="fas fa-times navbar-toggler-icon"></i></h3></li>
                <?php 
                $counter = 0;
                foreach($pages as $key=>$p){
                    if(count($nav[$counter]) == 1 ){
                        $expand_li = '';
                        $expand_a = '" href="?c='.$key.'"';
                    }else {
                        $expand_li = 'nav-expand ';
                        $expand_a = ' nav-expand-link" href="#"';
                    }
                    
                    echo '<li class="nav-item '.$expand_li.$key.'">',
                        '<a class="nav-link'.$expand_a.'>'.$nav[$counter][0].'</a>';
                    if(count($nav[$counter]) == 2){
                        echo '<ul class="nav-items nav-expand-content">';
                        for($i=0;$i<count($nav[$counter][1]);$i++){
                            $c = $nav[$counter][1][$i];
                            if(getType($c) == "string") {
                                $link= '?c='.$key.'&p='.$i;
                            }else {
                                $link= $c[1].'" target="_blank';
                                $c = $c[0];
                            }
                            echo'<li class="nav-item">',
					                '<a class="nav-link" href="'.$link.'">'.$c.'</a>',
				                '</li>';
                        }
                        echo '</ul>';
                    }
                    echo '</li>';
                    $counter ++;
                }
                ?>
            </ul>
        </div>
        <!--Menu Version PC et Tablette-->
        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
                <?php 
                $counter = 0;
                foreach($pages as $key=>$p){
                    if(count($nav[$counter]) == 1 ){
                        $expand_li = '';
                        $expand_a = '" href="?c='.$key.'"';
                    }else {
                        $expand_li = 'dropdown ';
                        $expand_a = ' dropdown-toggle" href="#" data-toggle="dropdown"';
                    }
                    
                    echo '<li class="nav-item '.$expand_li.$key.'">',
                        '<a class="nav-link'.$expand_a.'>'.$nav[$counter][0].'</a>';

                    if(count($nav[$counter]) == 2){
                        echo '<div class="dropdown-menu">';
                        for($i=0;$i<count($nav[$counter][1]);$i++){
                            $c = $nav[$counter][1][$i];
                            if(getType($c) == "string") {
                                $link= '?c='.$key.'&p='.$i;
                            }else {
                                $link= $c[1].'" target="_blank';
                                $c = $c[0];
                            }
                            echo '<a class="dropdown-item" href="'.$link.'">'.$c.'</a>';
                        }
                        echo '</div>';
                    }
                    echo '</li>';
                    $counter ++;
                }
                ?>
            </ul>
        </div>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script>
$(document).ready(function(){
    if($(window).width() <991){
        $('#navbar').removeClass('navbar-lightgray').addClass('navbar-dark')
    }
    else{
        $('#navbar').removeClass('navbar-dark').addClass('navbar-lightgray')
    }
    $(window).bind("resize",function(){
        if($(this).width() < 991){
            $('#navbar').removeClass('navbar-lightgray').addClass('navbar-dark')
        }
        else{
            $('#navbar').removeClass('navbar-dark').addClass('navbar-lightgray')
        }
    })
})
</script>

<script>
const navExpand = [].slice.call(document.querySelectorAll('.nav-expand'))

const backLink = `<li class="nav-item nav-back-link">
	<a class="nav-link" href="javascript:;">
		Back
	</a>
</li>`

navExpand.forEach(item => {
    let expands = [].slice.call(item.querySelectorAll('.nav-expand-content'))
    expands.forEach(expand => expand.insertAdjacentHTML('afterbegin', backLink))

	item.querySelector('.nav-link').addEventListener('click', () => item.classList.add('active'))

    let backArrows = [].slice.call(item.querySelectorAll('.nav-back-link'))
    backArrows.forEach(backArrow => backArrow.addEventListener('click', () => item.classList.remove('active')))
})

//Buttons which toggle the menu

const ham = [].slice.call(document.getElementsByClassName('navbar-toggler-icon'))
ham.forEach(button => button.addEventListener('click', () => document.body.classList.toggle('nav-is-toggled')))
</script>

<script> 
//To print in red the current Page
currentCategory = [].slice.call(document.getElementsByClassName('<?php echo $categorie?>'));
currentCategory.forEach(cat => {
    cat.getElementsByClassName("nav-link")[0].classList.add('red');
    specCategory = cat.getElementsByClassName("dropdown-item")[<?php echo (int)$page?>] || cat.getElementsByClassName("nav-link")[<?php echo ((int)$page+2)?>];
    if (typeof(specCategory) != 'undefined' && specCategory != null){
        specCategory.classList.add("red");
    }
})
</script>
    <?php
}
?>