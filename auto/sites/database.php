<?php

$dbName = "auto.sqlite3";
$arraysend = array();


if(!file_exists($dbName)){
    $myDB = new SQLite3($dbName);



$sql = "CREATE TABLE IF NOT EXISTS autos (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    kraftstoff TEXT NOT NULL,
    farbe TEXT NOT NULL,
    bauart TEXT NOT NULL,
    betankungen INTEGER NOT NULL DEFAULT 0
)";

$myDB->query($sql);

$sql = "INSERT INTO autos (name, kraftstoff, farbe, bauart) 
VALUES ('Passat', 'Diesel', '#000000', 'Limousine')";
$myDB->query($sql);

$sql = "INSERT INTO autos (name, kraftstoff, farbe, bauart) 
VALUES ('Honda', 'Benzin', '#008888', 'PKW')";
$myDB->query($sql);

$sql = "INSERT INTO autos (name, kraftstoff, farbe, bauart) 
VALUES ('Opel', 'Elektro', '#005555', 'SUV')";
$myDB->query($sql);

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


$arraysend['data'] = $arr;
//$arraysend['error'] = array();

echo json_encode($arraysend);


