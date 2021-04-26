<?php

$url = parse_url($_SERVER['REQUEST_URI']);
parse_str($url["query"],$result);
var_dump($result);

$coo = explode(",", ($result["coordonee"]));

var_dump(base64_encode(serialize($coo)));

?>