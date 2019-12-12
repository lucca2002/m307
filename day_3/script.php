<?php

// Das ist ein Kommentar
/* Das ist ein 
Mehrzeiliger-Kommentar
*/

$name = "Zuberbühler";
$vorname = "Lucca";
$ort = "Frauenfeld";
$alter = 17;



echo "<p> Hallo zusammen mein Name ist <strong> $vorname(".'$vorname'.") $name(".'$name'.") </strong>, ich lebe in <strong> $ort(".'$ort'.") </strong> und bin <strong> $alter(".'$alter'.") </strong> Jahre alt. </p> ";

$a = 13;
$b = 7.7;

$result = $a * $b;

echo $result;

$final = $result * $b;

echo "<p> $final </p>";

$final++;
echo $final;



?>