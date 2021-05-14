<?php 
function partials_header($categorie,$page){
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
                <div class="col-9"><a href=""><img src="assets/img/header.png" width="95%"></a></div>
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
                <li class="nav-item"><h3 class="content-title-yellow">Sommaire<span id="ham"></span></h3><span id="ham" class="navbar-toggler-icon"></span></li>
                <li class="nav-item" id="home">
                    <a class="nav-link" href="?c=home">Accueil</a>
                </li>
                <li class="nav-item nav-expand">
			        <a class="nav-link nav-expand-link" href="#">La Fédération</a>
			        <ul class="nav-items nav-expand-content">
				        <li class="nav-item">
					        <a class="nav-link" href="?c=federation&p=0">La Fédération</a>
				        </li>
				        <li class="nav-item">
					        <a class="nav-link" href="?c=federation&p=1">Les Régions et Clubs</a>
				        </li>
				        <li class="nav-item">
					        <a class="nav-link" href="?c=federation&p=2">Contacts</a>
				        </li>
				        <li class="nav-item">
					        <a class="nav-link" href="?c=federation&p=3">Lien</a>
				        </li>
				        <li class="nav-item">
					        <a class="nav-link" href="?c=federation&p=4">Logo-Légal</a>
				        </li>
			        </ul>
		        </li>
                <li class="nav-item nav-expand">
			        <a class="nav-link nav-expand-link" href="#">Direction Technique</a>
                    <ul class="nav-items nav-expand-content">
                        <li class="nav-item">
					        <a class="nav-link" href="?c=directionTech&p=0">Le Conseil des ME</a>
				        </li>
                        <li class="nav-item">
					        <a class="nav-link" href="?c=directionTech&p=1">Liste officielle des maîtres et ceintures noires</a>
				        </li>
                        <li class="nav-item">
					        <a class="nav-link" href="?c=directionTech&p=2">Calendrier technique</a>
				        </li>
                        <li class="nav-item">
					        <a class="nav-link" href="?c=directionTech&p=3">Stages GRT</a>
				        </li>
                        <li class="nav-item">
					        <a class="nav-link" href="?c=directionTech&p=4">Compétitions</a>
				        </li>
                        <li class="nav-item">
					        <a class="nav-link" href="?c=directionTech&p=5">Passage de grades</a>
				        </li>
                        <li class="nav-item">
					        <a class="nav-link" href="?c=directionTech&p=6">Formations</a>
				        </li>
                    </ul>
		        </li>
                <li class="nav-item nav-expand">
			        <a class="nav-link nav-expand-link" href="#">Le Vovinam-Viet Vo Dao</a>
                    <ul class="nav-items nav-expand-content">
                        <li class="nav-item">
					        <a class="nav-link" href="?c=vietVoDao&p=0">La discipline et ses valeurs</a>
				        </li>
                        <li class="nav-item">
					        <a class="nav-link" href="?c=vietVoDao&p=1">L'Histoire</a>
				        </li>
                        <li class="nav-item">
					        <a class="nav-link" href="?c=vietVoDao&p=2">Les Grands Maîtres</a>
				        </li>
                        <li class="nav-item">
					        <a class="nav-link" href="?c=vietVoDao&p=3">La Fédération mondiale</a>
				        </li>
                    </ul>
		        </li>
                <li class="nav-item nav-expand">
	    	    	<a class="nav-link nav-expand-link" href="#">Affiliation/licenciés</a>
                    <ul class="nav-items nav-expand-content">
                        <li class="nav-item">
					        <a class="nav-link" href="?c=affiliation&p=0">Documentation</a>
				        </li>
                        <li class="nav-item">
					        <a class="nav-link" href="?c=affiliation&p=1">Modalités d'Affiliation</a>
				        </li>
                        <li class="nav-item">
					        <a class="nav-link" href="?c=affiliation&p=2">FAQ Affiliation</a>
				        </li>
                        <li class="nav-item">
					        <a class="nav-link" href="?c=affiliation&p=3">Licenciés</a>
				        </li>
                        <li class="nav-item">
					        <a class="nav-link" href="?c=affiliation&p=4">Passeport</a>
				        </li>
                    </ul>
	    	    </li>
                <li class="nav-item">
		        	<a class="nav-link" href="?c=actualite">Actualités</a>
		        </li>
                <li class="nav-item nav-expand">
		        	<a class="nav-link nav-expand-link" href="#">Contact</a>
                    <ul class="nav-items nav-expand-content">
                        <li class="nav-item">
					        <a class="nav-link" href="?c=contacts&p=0">Contact</a>
				        </li>
                        <li class="nav-item">
					        <a class="nav-link" href="?c=contacts&p=1">FAQ</a>
				        </li>
                        <li class="nav-item">
					        <a class="nav-link" href="?c=contacts&p=2">Personnalité de la Fédération</a>
				        </li>
                    </ul>
		        </li>
            </ul>
        </div>
        <!--Menu Version PC et Tablette-->
        <div class="collapse navbar-collapse justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item" id="home">
                <a class="nav-link" href="?c=home">Accueil</a>
            </li>
            <li class="nav-item dropdown" id="federation">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">La Fédération</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?c=federation&p=0">La Fédération</a>
                    <a class="dropdown-item" href="?c=federation&p=1">Les Régions et Clubs</a>
                    <a class="dropdown-item" href="?c=federation&p=2">Contacts</a>
                    <a class="dropdown-item" href="?c=federation&p=3">Lien</a>
                    <a class="dropdown-item" href="?c=federation&p=4">Logo-Légal</a>
                </div>
            </li>
            <li class="nav-item dropdown" id="directionTech">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Direction Technique</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?c=directionTech&p=0">Le Conseil des ME</a>
                    <a class="dropdown-item" href="?c=directionTech&p=1">Liste officielle des maîtres et ceintures noires</a>
                    <a class="dropdown-item" href="?c=directionTech&p=2">Calendrier technique</a>
                    <a class="dropdown-item" href="?c=directionTech&p=3">Stages GRT</a>
                    <a class="dropdown-item" href="?c=directionTech&p=4">Compétitions</a>
                    <a class="dropdown-item" href="?c=directionTech&p=5">Passage de grades</a>
                    <a class="dropdown-item" href="?c=directionTech&p=6">Formations</a>
                </div>
            </li>
            <li class="nav-item dropdown" id="vietVoDao">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Le Vovinam-Viet Vo Dao</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?c=vietVoDao&p=0">La discipline et ses valeurs</a>
                    <a class="dropdown-item" href="?c=vietVoDao&p=1">L'Histoire</a>
                    <a class="dropdown-item" href="?c=vietVoDao&p=2">Les Grands Maîtres</a>
                    <a class="dropdown-item" href="?c=vietVoDao&p=3">La Fédération mondiale</a>
                </div>
            </li>
            <li class="nav-item dropdown" id="affiliation">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Affiliation/licenciés</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?c=affiliation&p=0">Documentation</a>
                    <a class="dropdown-item" href="?c=affiliation&p=1">Modalités d'Affiliation</a>
                    <a class="dropdown-item" href="?c=affiliation&p=2">FAQ Affiliation</a>
                    <a class="dropdown-item" href="?c=affiliation&p=3">Licenciés</a>
                    <a class="dropdown-item" href="?c=affiliation&p=4">Passeport</a>
                </div>
            </li>
            <li class="nav-item" id="actualite">
                <a class="nav-link" href="?c=actualite">Actualités</a>
            </li>
            <li class="nav-item dropdown" id="contacts">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Contact</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?c=contacts&p=0">Contact</a>
                    <a class="dropdown-item" href="?c=contacts&p=1">FAQ</a>
                    <a class="dropdown-item" href="?c=contacts&p=2">Personnalité de la Fédération</a>
                </div>
            </li>
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

const backLink = `<li class="nav-item">
	<a class="nav-link nav-back-link" href="javascript:;">
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
<?php
    if ($categorie!='admin'){
        ?>
<script> 
//To print in red the current Page
currentCategory= document.getElementById('<?php echo $categorie?>');
categoryName = currentCategory.getElementsByClassName("nav-link")[0];
categoryName.classList.add("red");

specCategory = currentCategory.getElementsByClassName("dropdown-item")[<?php echo (int)$page?>];
if (typeof(specCategory) != 'undefined' && specCategory != null){
    specCategory.classList.add("red");
}
</script>
        <?php
    }
}
?>