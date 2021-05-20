<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/add.css">
</head>
<body>
    <h1 id="panel" class="content-title-red">PANEL ADMINISTRATEUR</h1>
<?php
require_once 'management/db.php';
$pages = ['panel','addClub','addMaster','event'];

$page = 'panel';
if (isset($_GET['p'])) {
    if (in_array($_GET['p'],$pages)){
        $page = $_GET['p'];
    }
}

require_once 'views/'.$page.'.php';
?>
</body>
</html>