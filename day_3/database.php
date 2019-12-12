<?php

$dbName = "auto.sqlite3";
$arraysend = array();


if(!file_exists($dbName)){
    $myDB = new SQLite3($dbName);



$sql = "CREATE TABLE IF NOT EXISTS autos (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    neuwagen TEXT NOT NULL,
    kaufdatum TEXT NOT NULL,
    getriebe TEXT NOT NULL,
    marke TEXT NOT NULL,
    modell TEXT NOT NULL,
    kraftstoff TEXT NOT NULL,
    farbe TEXT NOT NULL,
    aufbau TEXT NOT NULL,
    hubraum INTEGER NOT NULL,
    betankungen INTEGER NOT NULL DEFAULT 0
)";

$myDB->query($sql);

/*

$sql = "INSERT INTO autos (marke, modell, kraftstoff, farbe, aufbau, hubraum) 
VALUES ('VW', 'off', 'Passat', 'Diesel', '#000000', 'Limousine', 1000)";
$myDB->query($sql);

$sql = "INSERT INTO autos (marke, modell, kraftstoff, farbe, aufbau, hubraum)  
VALUES ('VW', 'Passat2', 'Diesel', '#000000', 'Limousine', 1000)";
$myDB->query($sql);

$sql = "INSERT INTO autos (marke, modell, kraftstoff, farbe, aufbau, hubraum)  
VALUES ('VW', 'Passat3', 'Diesel', '#000000', 'Limousine', 1000)";
$myDB->query($sql);

*/

}

if(@$_GET['action'] == 'tanken'){
    $arraysend['error'] = 'Befehl Tanken ueber Get erhalten';
}

if(@$_GET['action'] == 'delete'){
    $arraysend['error'] = 'Befehl Delete ueber Get erhalten';
}

$con = new SQLite3($dbName);
$result = $con->query('SELECT * FROM autos');
$arry = array();
$i=0;
while($res = $result->fetchArray(SQLITE3_ASSOC)){
    foreach($res as $key => $value){
        $arr[$i][$key] = $value;
    }
    $i++;
}


//$arraysend['data'] = $arr;
//$arraysend['error'] = array();

//echo json_encode($arraysend);


