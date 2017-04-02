<?php
include '2massiiv.html';

$kassid= array(
    array('nimi'=>'Miisu', 'vanus'=>2),
    array('nimi'=>'Tom', 'vanus'=>1)
);
foreach ($kassid as $kass){

    echo $kass['nimi'];
    echo $kass['vanus'];
}

?>