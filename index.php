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
if (isset($_GET['c'])) {
    if (array_key_exists($_GET['c'],$pages)){
        $pageCate = $_GET['c'];
        if (isset($_GET['p'])){
            try{
                $page = $pages[$pageCate][(int)$_GET['p']];
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
partials_header($page);
/*
//In case the user want to delete or to Log out with his account
if (isset($_GET['delete'])){
    if (in_array($_GET['delete'],$del)){
        require_once 'php/management/'.$_GET['delete'].'.php';
        die;
    }
}*/
require_once 'php/views/'.$pageCate.$page.'.php';

partials_footer();
?>