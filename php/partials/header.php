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
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-sm bg-white justify-content-center sticky-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="">Accueil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="nav-federation" data-toggle="dropdown">La Fédération</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="" id="federation" >La Fédération</a>
                    <a class="dropdown-item" href="" id="calendrier">Calendrier</a>
                    <a class="dropdown-item" href="" id="clubs">Les clubs</a>
                    <a class="dropdown-item" href="" id="contact-federation">Contacts</a>
                    <a class="dropdown-item" href="" id="lien">Lien</a>
                    <a class="dropdown-item" href="" id="label">Label-Légal-régularité</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="nav-dir-tech" data-toggle="dropdown">Direction technique</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="" id="conseil-ME">Le conseil des ME</a>
                    <a class="dropdown-item" href="" id="liste-ME">Liste O.CN et ME</a>
                    <a class="dropdown-item" href="" id="calendrier-tech">Calendrier technique</a>
                    <a class="dropdown-item" href="" id="stage-GRT">Stages GRT Coupes</a>
                    <a class="dropdown-item" href="" id="grades">Passage de grades</a>
                    <a class="dropdown-item" href="" id="formation">Formations</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="nav-vovinam" data-toggle="dropdown">Le Vovinam VVD</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="" id="valeurs">Le sport et ses valeurs</a>
                    <a class="dropdown-item" href="" id="histoires">Son histoire</a>
                    <a class="dropdown-item" href="" id="federation-mondiale">La Fédération mondiale</a>
                    <a class="dropdown-item" href="" id="grands-maitres">Les grands Maîtres</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="nav-licence" data-toggle="dropdown">Affiliation/licenciés</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="" id="documentation">Documentation</a>
                    <a class="dropdown-item" href="" id="mod-affiliation">modalités d'Affiliation</a>
                    <a class="dropdown-item" href="" id="FAQ-affiliation">FAQ Affiliation</a>
                    <a class="dropdown-item" href="" id="licences">Licenciés</a>
                    <a class="dropdown-item" href="" id="passeport">Passeport</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="nav-actualites" data-toggle="dropdown">Actualités</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="" id="informations">Informations</a>
                    <a class="dropdown-item" href="" id="msg-regional">Message Régional</a>
                    <a class="dropdown-item" href="" id="msg-national">Message National</a>
                    <a class="dropdown-item" href="" id="msg-international">Message International</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="nav-contact" data-toggle="dropdown">Contacts</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="" id="contact-contact">Contacts</a>
                    <a class="dropdown-item" href="" id="FAQ">FAQ</a>
                    <a class="dropdown-item" href="" id="personnalite">Personnalité de la Fédération</a>
                </div>
            </li>
        </ul>
    </nav>
</body>
<?php
}
?>