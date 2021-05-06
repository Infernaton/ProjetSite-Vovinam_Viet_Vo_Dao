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
    <title>Vovinam Viet Vodao</title>
</head>
<body>
    <header>
        <div class="container-fluid header">
            <div class="row">
                <div class="col-sm-2"><a href="?c=home"><img src="assets/img/logo.png" width="45%" height="100%"></a></div>
                <div class="col-sm-9"><a href=""><img src="assets/img/header.png" width="95%"></a></div>
            </div>
        </div>
    </header>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-sm justify-content-center sticky-top navbar-lightgray">
        <ul class="navbar-nav">
            <li class="nav-item" id="home">
                <a class="nav-link" href="?c=home">Accueil</a>
            </li>
            <li class="nav-item dropdown" id="federation">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">La Fédération</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?c=federation&p=0" id="federation" >La Fédération</a>
                    <a class="dropdown-item" href="?c=federation&p=1" id="clubs">Les Régions et Clubs</a>
                    <a class="dropdown-item" href="?c=federation&p=2" id="contact-federation">Contacts</a>
                    <a class="dropdown-item" href="?c=federation&p=3" id="lien">Lien</a>
                    <a class="dropdown-item" href="?c=federation&p=4" id="label">Logo-Légal</a>
                </div>
            </li>
            <li class="nav-item dropdown" id="directionTech">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Direction Technique</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?c=directionTech&p=0" id="conseil-ME">Le Conseil des ME</a>
                    <a class="dropdown-item" href="?c=directionTech&p=1" id="liste-ME">Liste officielle des maîtres et ceintures noires</a>
                    <a class="dropdown-item" href="?c=directionTech&p=2" id="calendrier-tech">Calendrier technique</a>
                    <a class="dropdown-item" href="?c=directionTech&p=3" id="stage-GRT">Stages GRT</a>
                    <a class="dropdown-item" href="?c=directionTech&p=4" id="competition">Compétitions</a>
                    <a class="dropdown-item" href="?c=directionTech&p=5" id="grades">Passage de grades</a>
                    <a class="dropdown-item" href="?c=directionTech&p=6" id="formation">Formations</a>
                </div>
            </li>
            <li class="nav-item dropdown" id="vietVoDao">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Le Vovinam-Viet Vo Dao</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?c=vietVoDao&p=0" id="valeurs">La discipline et ses valeurs</a>
                    <a class="dropdown-item" href="?c=vietVoDao&p=1" id="histoires">L'Histoire</a>
                    <a class="dropdown-item" href="?c=vietVoDao&p=2" id="grands-maitres">Les Grands Maîtres</a>
                    <a class="dropdown-item" href="?c=vietVoDao&p=3" id="federation-mondiale">La Fédération mondiale</a>
                </div>
            </li>
            <li class="nav-item dropdown" id="affiliation">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Affiliation/licenciés</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?c=affiliation&p=0" id="documentation">Documentation</a>
                    <a class="dropdown-item" href="?c=affiliation&p=1" id="mod-affiliation">Modalités d'Affiliation</a>
                    <a class="dropdown-item" href="?c=affiliation&p=2" id="FAQ-affiliation">FAQ Affiliation</a>
                    <a class="dropdown-item" href="?c=affiliation&p=3" id="licences">Licenciés</a>
                    <a class="dropdown-item" href="?c=affiliation&p=4" id="passeport">Passeport</a>
                </div>
            </li>
            <li class="nav-item" id="actualite">
                <a class="nav-link" href="?c=actualite">Actualités</a>
            </li>
            <li class="nav-item dropdown" id="contacts">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Contact</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?c=contacts&p=0" id="contact-contact">Contact</a>
                    <a class="dropdown-item" href="?c=contacts&p=1" id="FAQ">FAQ</a>
                    <a class="dropdown-item" href="?c=contacts&p=2" id="personnalite">Personnalité de la Fédération</a>
                </div>
            </li>
        </ul>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
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