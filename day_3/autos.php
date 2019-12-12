<?php

//SQL Connection
$_dbName = "auto.sqlite3";

$_con = new SQLite3($_dbName);



echo "<h2>Autos</h2>";

//Update Datensätze
if(@$_GET['action'] == 'create' && @$_GET['id'] > 0){


echo "Update".$_GET['id'];


if(@$_GET['Neuwagen']=='on'){
    $neuwagen = "ja";
}
else{
    $neuwagen = "nein";
}

$sql = "UPDATE autos 
        SET neuwagen ='$neuwagen',
        kaufdatum = '$_GET[Kaufdatum]',
        getriebe = '$_GET[Getriebe]', 
        marke = '$_GET[Marke]', 
        modell = '$_GET[Modell]', 
        kraftstoff = '$_GET[Kraftstoff]', 
        farbe = '$_GET[Farbe]', 
        aufbau = '$_GET[Aufbau]', 
        hubraum = '$_GET[Hubraum]'
        WHERE id = '$_GET[id]'";

$_con->query($sql);
}

else if(@$_GET['action'] == 'create'){


    if(@$_GET['Marke'] && @$_GET['Modell'] && @$_GET['Kraftstoff'] && @$_GET['Farbe'] && @$_GET['Aufbau'] && @$_GET['Hubraum']){

        if(@$_GET['Neuwagen']=='on'){
            $neuwagen = "ja";
        }
        else{
            $neuwagen = "nein";
        }

        $sql = "INSERT INTO autos (neuwagen, kaufdatum, getriebe, marke, modell, kraftstoff, farbe, aufbau, hubraum) 
        VALUES ('$neuwagen','$_GET[Kaufdatum]','$_GET[Getriebe]', '$_GET[Marke]', '$_GET[Modell]', '$_GET[Kraftstoff]', '$_GET[Farbe]', '$_GET[Aufbau]', '$_GET[Hubraum]')";
        $_con->query($sql);
    
        
        
        
        }
        
        else{
            //echo "Fehlende Daten!";
        
        }
}

if(@$_GET['action'] == 'delete'){

    $sql = "DELETE FROM autos WHERE id = $_GET[id]";
    $_con->query($sql);
}
if(@$_GET['action'] == 'edit'){

    $sql = "SELECT * FROM autos WHERE id = $_GET[id]";
    $query = $_con->query($sql);
    $edit = $query->fetchArray(SQLITE3_ASSOC);

    print_r($edit['getriebe']);

}

echo "<table class='striped'>";
        echo "<tr>";
                echo "<td>ID</td>";
                echo "<td>Neuwagen</td>";
                echo "<td>Kaufdatum</td>";
                echo "<td>Getriebe</td>";
                echo "<td>Marke</td>";
                echo "<td>Modell</td>";
                echo "<td>Kraftstoff</td>";
                echo "<td>Farbe</td>";
                echo "<td>Aufbau</td>";
                echo "<td>Hubraum</td>";
                echo "<td>Betankungen</td>";
                echo "<td></td>";
        echo "</tr>";







$query = $_con->query('SELECT * FROM autos');

//
while($result = $query->fetchArray(SQLITE3_ASSOC)){

    echo "<tr>";
    //
    foreach($result as $key => $value){

            echo "<td>";
            echo $value;
            echo "</td>";

        }
        echo "<td>";
        echo "<form>";
        echo "<input type='hidden' name='id' value=$result[id]>";
        echo "<button name='action' value='edit' class='right waves-effect waves-light btn cust_btn blue darken-4'><i class='material-icons left'>edit</i>Bearbeiten</button>";
        echo "<button name='action' value='delete' class='right waves-effect waves-light btn cust_btn red darken-1'><i class='material-icons left'>delete_forever</i>Löschen</button>";
        echo "</form>";
echo "</td>";


    echo "</tr>";

};



echo "</table>";

