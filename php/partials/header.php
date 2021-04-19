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
                <div class="col-sm-2"><a href="../index.html"><img src="assets/img/logo.png" width="45%" height="90%"></a></div>
                <div class="col-sm-9"><a href="../index.html"><img src="assets/img/header.png" width="95%"></a></div>
            </div>
        </div>
    </header>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-sm bg-white justify-content-center sticky-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../index.html">Accueil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">La fédération</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../federation/federation.html">La fédération</a>
                    <a class="dropdown-item" href="../federation/calendrier.html">Calendrier</a>
                    <a class="dropdown-item" href="../federation/map.html">Les clubs</a>
                    <a class="dropdown-item" href="../federation/contacts.html">Contacts</a>
                    <a class="dropdown-item" href="../federation/lien.html">Lien</a>
                    <a class="dropdown-item" href="../federation/legal.html">Label-Légal-régularité</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Direction technique</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../direction_tech/conseilMaitre.html">Le conseil des ME</a>
                    <a class="dropdown-item" href="../direction_tech/listeMaitre.html">Liste O.CN et ME</a>
                    <a class="dropdown-item" href="../direction_tech/calendrier.html">Calendrier technique</a>
                    <a class="dropdown-item" href="../direction_tech/stage.html">Stages GRT Coupes</a>
                    <a class="dropdown-item" href="../direction_tech/changeGrade.html">Passage de grades</a>
                    <a class="dropdown-item" href="../direction_tech/formation.html">Formations</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Le Vovinam VVD</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../le-viet-vo-dao/la-discipline.html">Le sport et ses valeurs</a>
                    <a class="dropdown-item" href="../le-viet-vo-dao/l-histoire.html">Son histoire</a>
                    <a class="dropdown-item" href="../le-viet-vo-dao/la-fede-mondiale.html">La fédération mondiale</a>
                    <a class="dropdown-item" href="../le-viet-vo-dao/les-grands-ME.html">Les grands Maîtres</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Affiliation/licenciés</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../Affiliation-licenciés/documentation.html">Documentation</a>
                    <a class="dropdown-item" href="../Affiliation-licenciés/modalités_affiliation.html">modalités d'Affiliation</a>
                    <a class="dropdown-item" href="../Affiliation-licenciés/faq_affiliation.html">FAQ Affiliation</a>
                    <a class="dropdown-item" href="../Affiliation-licenciés/licenciés.html">Licenciés</a>
                    <a class="dropdown-item" href="../Affiliation-licenciés/passeports.html">Passeport</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Actualités</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../Actualités/informations.html">Informations</a>
                    <a class="dropdown-item" href="../Actualités/msg_regional.html">Message Régional</a>
                    <a class="dropdown-item" href="../Actualités/msg_national.html">Message National</a>
                    <a class="dropdown-item" href="../Actualités/msg_internanional.html">Message International</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Contacts</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../Contacts/contacts.html">Contacts</a>
                    <a class="dropdown-item" href="../Contacts/faq.html">FAQ</a>
                    <a class="dropdown-item" href="../Contacts/personnalite-federation.html">Personnalité de la fédération</a>
                </div>
            </li>
        </ul>
    </nav>
</body>
<?php
}
?>