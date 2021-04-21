<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/federation.css">
    <title>Inscription</title>
</head>
<div class="corps">
    <form action="verification.php" method="POST">
    <div class="login">
        <h1 class="content-title-yellow">Connexion</h1>
        <div class ="user">
            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
        </div>
        <div class ="prenom">
            <label><b>Prénom</b></label>
            <input type="text" placeholder="Entrer votre prénom" name="username" required>
        </div>
        <div class ="nom">
            <label><b>Nom de Famille</b></label>
            <input type="text" placeholder="Entrer votre nom de famille" name="username" required>
        </div>
        <div class ="email">
            <label><b>E-mail</b></label>
            <input type="text" placeholder="Entrer l'e-mail" name="username" required>
        </div>
        <div class ="password">
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>
        </div>
            <div class ="submit">
            <input type="submit" id='submit' value='LOGIN' >
        </div>
        <?php
            if(isset($_GET['erreur'])){
            $err = $_GET['erreur'];
            if($err==1 || $err==2)
            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
    
    </div>
    </form>
</div>