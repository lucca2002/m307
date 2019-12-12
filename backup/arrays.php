<?php

echo "<h2>Arrays</h2>";

//Array
$edelmetalle = ["Gold", "Platin", "Iridium"];


echo "<pre>";
print_r($edelmetalle);
echo "</pre>";

echo $edelmetalle[0];
echo "<br>";





//Assoziativer Array

$wochentage = [

    "Mo" => "Montag",
    "Di" => "Dienstag",
    "Mi" => "Mittwoch",
    "Do" => "Donnerstag",
    "Fr" => "Freitag"
];

//Ausgabe mittel foreach Schleife
foreach ($wochentage as $tag){

    echo $tag;
    echo "<br>";
}




echo "<pre>";
print_r($wochentage);
echo "</pre>";

echo $wochentage["Mo"];


$persdata = [

    "Name" => "Zuberbühler",
    "Vorname" => "Lucca",
    "Alter" => 17,
    "Ort" => "Frauenfeld"


];

echo "<p> Hallo zusammen mein Name ist <strong>". $persdata["Name"]." ". $persdata["Vorname"] ."</strong>, ich lebe in <strong>". $persdata["Ort"]." </strong> und bin <strong>". $persdata["Alter"]." </strong> Jahre alt. </p> ";



// Assoziativer Array verschachtelt für Auto-DB

$autodata = [
    [

    "Marke" => "Skoda",
    "Modell" => "Suberb",
    "Aufbau" => "Kombi",
    "Kraftstoff" => "",
    "Farbe" => "Weiss",
    "Hubraum" => 2000,
    "Betankungen" => 500


    ],
    [

        "Marke" => "Automarke 2",
        "Modell" => "Auto2",
        "Aufbau" => "Sport",
        "Kraftstoff" => "Benzin",
        "Farbe" => "Grau",
        "Hubraum" => 1200,
        "Betankungen" => 230
    
    
    ]
];

//Verschatelter Array in Liste ausgeben
foreach ($autodata as $auto) {
    
    echo "<h3>".$auto["Marke"]." ".$auto["Modell"]."</h3>";
    echo "<ul>";
    //
    foreach($auto as $key => $value){
        if($key == "Marke" ||$key == "Modell" || $value == ""){

        }
        else{
            echo "<li>";
            echo $value;
            echo "</li>";
        }
    }
    echo "</ul>";
}

$anzahl = count($autodata);

echo "Anzahl Autos = ". $anzahl;