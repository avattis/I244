<?php
/**
 * Created by PhpStorm.
 * User: annelyvattis
 * Date: 4/1/17
 * Time: 9:37 PM
 */
$str = "absdef \n";
$len = strlen($str);
echo ("Õigetpidi: ");echo($str);
echo "<br>";
echo ("Tagurpidi: ");
for ($i=($len-1); $i>=0; $i--)

 echo ($str[$i]);
?>