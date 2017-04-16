<?php

$dirname = "pildid/";
$images = glob($dirname."*.jpg");

require_once('head.html');

$mode="";
if (!empty($_GET["mode"])) {
    $mode=$_GET["mode"];
}

switch($mode){
    case "pealeht":
        include("pealeht.html");
        break;
    case "galerii":
        include("galerii.php");
        break;
    case "vote":
        include("vote.php");
        break;
    case "tulemus":
        include("tulemus.php");
        break;
    default:
        include("pealeht.html");
        break;
}



require_once('foot.html');



?>
