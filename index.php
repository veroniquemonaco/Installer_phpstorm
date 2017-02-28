<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$somme = $students["Emmanuel"]+$students["Thierry"]+$students["Pascal"]+$students["Eric"]+$students["Nicolas"];
$nbpers = count($students);
$moyenne = $somme/$nbpers;

echo $somme."<br/>";
echo $nbpers."<br/>";
echo "la moyenne est".$moyenne." "." ans";


?>