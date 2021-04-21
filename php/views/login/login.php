<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/federation.css">
    <title>Connexion</title>
</head>

<div id="logine">
    <form action="verification.php" method="POST">
    <div class="login">
        <h1>Connexion</h1>
        <div class ="user">
            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
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