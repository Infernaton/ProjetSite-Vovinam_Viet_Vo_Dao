<?php 
function partials_header($page){
?>   
<!DOCTYPE html>
<html lang="fr_FR">
    <!-- Configurations de la page -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Vovinam Viet Vodao</title>
</head>
<body>
    <header>
        <div class="container-fluid"  style="border-bottom: 1px solid #1c55a3; margin-top: 15px;">
            <div class="row">
                <div class="col-sm-2"><a href=""><img src="assets/img/logo.png" width="45%" height="90%"></a></div>
                <div class="col-sm-9"><a href=""><img src="assets/img/header.png" width="95%"></a></div>
            </div>
        </div>
    </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-sm bg-white justify-content-center sticky-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="?c=home">Accueil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="nav-federation" data-toggle="dropdown">La Fédération</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?c=federation&p=0" id="federation" >La Fédération</a>
                    <a class="dropdown-item" href="?c=federation&p=1" id="clubs">Les clubs</a>
                    <a class="dropdown-item" href="?c=federation&p=2" id="contact-federation">Contacts</a>
                    <a class="dropdown-item" href="?c=federation&p=3" id="lien">Lien</a>
                    <a class="dropdown-item" href="?c=federation&p=4" id="label">Label-Légal-régularité</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="nav-dir-tech" data-toggle="dropdown">Direction technique</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?c=directionTech&p=0" id="conseil-ME">Le conseil des ME</a>
                    <a class="dropdown-item" href="?c=directionTech&p=1" id="liste-ME">Liste O.CN et ME</a>
                    <a class="dropdown-item" href="?c=directionTech&p=2" id="calendrier-tech">Calendrier technique</a>
                    <a class="dropdown-item" href="?c=directionTech&p=3" id="stage-GRT">Stages GRT</a>
                    <a class="dropdown-item" href="?c=directionTech&p=4" id="stage-GRT">Compétition</a>
                    <a class="dropdown-item" href="?c=directionTech&p=5" id="grades">Passage de grades</a>
                    <a class="dropdown-item" href="?c=directionTech&p=6" id="formation">Formations</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="nav-vovinam" data-toggle="dropdown">Le Vovinam VVD</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?c=vietVoDao&p=0" id="valeurs">Le sport et ses valeurs</a>
                    <a class="dropdown-item" href="?c=vietVoDao&p=1" id="histoires">Son histoire</a>
                    <a class="dropdown-item" href="?c=vietVoDao&p=2" id="federation-mondiale">La Fédération mondiale</a>
                    <a class="dropdown-item" href="?c=vietVoDao&p=3" id="grands-maitres">Les grands Maîtres</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="nav-licence" data-toggle="dropdown">Affiliation/licenciés</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?c=affiliation&p=0" id="documentation">Documentation</a>
                    <a class="dropdown-item" href="?c=affiliation&p=1" id="mod-affiliation">modalités d'Affiliation</a>
                    <a class="dropdown-item" href="?c=affiliation&p=2" id="FAQ-affiliation">FAQ Affiliation</a>
                    <a class="dropdown-item" href="?c=affiliation&p=3" id="licences">Licenciés</a>
                    <a class="dropdown-item" href="?c=affiliation&p=4" id="passeport">Passeport</a>
                </div>
            </li>
            <a class="nav-link" href="?c=actualite" id="nav-actualites">Actualités</a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="nav-contact" data-toggle="dropdown">Contacts</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?c=contacts&p=0" id="contact-contact">Contacts</a>
                    <a class="dropdown-item" href="?c=contacts&p=1" id="FAQ">FAQ</a>
                    <a class="dropdown-item" href="?c=contacts&p=2" id="personnalite">Personnalité de la Fédération</a>
                </div>
            </li>
        </ul>
    </nav>
</body>
<?php
}
?>