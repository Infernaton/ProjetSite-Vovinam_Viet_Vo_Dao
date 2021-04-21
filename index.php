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
        <div class="container-fluid"  style="border-bottom: 1px solid #1c55a3; margin-top: 10px; padding-bottom: 10px">
            <div class="row">
                <div class="col-sm-2"><a href="?c=home"><img src="assets/img/logo.png" width="45%" height="100%"></a></div>
                <div class="col-sm-9"><a href=""><img src="assets/img/header.png" width="95%"></a></div>
                <div class="col-sm-1"><a href="?c=login&p=0">Login</a>
            </div>
        </div>
    </header>
<?php
// check auth

require_once 'php/init.php';
require_once 'php/partials/header.php';
require_once 'php/partials/footer.php';

//'pages' and 'delete' are Array declared in init.php and refer to different status

//Uses to switch between the different pages 
//var_dump($pages);

$pageCate = 'home';
$page = '';
$index = 0;
if (isset($_GET['c'])) {
    if (array_key_exists($_GET['c'],$pages)){
        $pageCate = $_GET['c'];
        if (isset($_GET['p'])){
            try{
                $page = $pages[$pageCate][(int)$_GET['p']];
                $index = (int)$_GET['p'];
            }
            catch (Exception $e){
                $page = '';
            }
        }
    }
    else {
        $pageCate = '404';
    }
}
if ($pageCate != 'admin') {
    partials_header($pageCate,$index);
}
/*
//In case the user want to delete or to Log out with our account
if (isset($_GET['delete'])){
    if (in_array($_GET['delete'],$del)){
        require_once 'php/management/'.$_GET['delete'].'.php';
        die;
    }
}*/
require_once 'php/views/'.$pageCate.$page.'.php';

// </body> in the footer
if ($pageCate != 'admin'){
    partials_footer();
}
?>
</html>