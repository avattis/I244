<?php
include '8nadal.html';
$tekst="See siin on näite tekst";
if (isset($_POST['tekst']) && $_POST['tekst']!="") {
    $tekst=htmlspecialchars($_POST['tekst']);
}
$taustavarv="#ff0000";
if (isset($_POST['taustavarv']) && $_POST['taustavarv']!="") {
    $taustavarv=htmlspecialchars($_POST['taustavarv']);
}
$tekstivarv="#1a0000";
if (isset($_POST['tekstivarv']) && $_POST['tekstivarv']!="") {
    $tekstivarv=htmlspecialchars($_POST['tekstivarv']);
}
$tsuurus="25";
if (isset($_POST['tsuurus']) && $_POST['tsuurus']!="") {
    $tsuurus=htmlspecialchars($_POST['tsuurus']);
}

?>

