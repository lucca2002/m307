//jQuery

//Warten bis Dokument geladen ist
$(document).ready(function(){
    console.log("Document ready")

    //Click auf Button mit ID button01
    $('#button01').click(function(){
        console.log('Click on jQuery Button1 registered');

    });

    $('#button02').click(function(){
        console.log('Click on  Button2 registered');
        $('#text01').html('Text1 mit jQuery');

    });

    $('#button03').click(function(){
        console.log('Click on jQuery Button3 registered');
        $('#text01').html('Text2 mit jQuery');

    });

    $('#button04').click(function(){
        console.log('Click on jQuery Button4 registered');
        //Formular aus HTML laden
        $('#text01').load("formular.html", 
        //Funktion für Button mitladen
        function(){
            $('#form_button01').click(function(){
                console.log('Click on jQuery form_Button1 registered');
        
            });
        });

    });

    $('#button05').click(function(){
        console.log('Click on jQuery Button5 registered');
        $('#text01').html('');

    });




});

//Konsolenausgaben
console.log("Hello JavaScript!");
console.warn("Warnung : warn");
console.error("Error : error");

//Funktion ausführen
MeineFunktion('Hello Function');

//Funktion mit lokaler Variabel, bei Aufruf auto-instanziert
function MeineFunktion(Variabel){

    console.log("Function:" + Variabel);
}


//JS for-Schleife
for(var i = 0;  i<10; i++){

    console.log('Schleife' + i);
}

//Funktion
function Manipulation(Variabel){
    //Text von Element mit ID text01 auf Variabel ändern
    document.getElementById('text01').innerHTML = Variabel;
    //Mitteilungsfenster
    window.alert("Text geändert!")
}

