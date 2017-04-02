<?php
/**
 * Created by PhpStorm.
 * User: annelyvattis
 * Date: 3/26/17
 * Time: 8:14 PM
 */

$pildid=array( "pildid/spain1.jpg","pildid/spain2.jpg","pildid/spain3.jpg"  );

$pildi=array(
    array("big"=>"pildid/spain1.jpg", "small"=>"pildid/spain1.jpg", "alt"=>"spain1"),
    array("big"=>"pildid/spain2.jpg", "small"=>"pildid/spain2.jpg", "alt"=>"spain2"),
    array("big"=>"pildid/spain3.jpg", "small"=>"pildid/spain3.jpg", "alt"=>"spain3")
);
print_r($pildi);
include 'pildid';
echo $pildid;
for ($i=0;$i<3;++$i)
echo "<a href='$pildid[$i]'> pildid $i</a><br>";
?>