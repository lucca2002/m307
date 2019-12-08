$(document).ready(function () {

    //JSON aus PHP importieren
    var template = $('template').html();
    $.getJSON('../sites/database.php', function (mydata) {


        mydata.data.forEach(element => {

            var datensatz = Mustache.to_html(template, element);

            $('tbody').append(datensatz);


        
        });

        $('.edit-modal').click(function () {

                var id = $(this).parent().attr("data-id");

                console.log('Click on Edit button'+ id +' registred');
                $('#modal-titel').html('Fahrzeug ID ' + id + ' editieren');
                $('#modal-inhalt').load("../sites/editform.html");
                var mymodal = M.Modal.getInstance($('.modal'));
                mymodal.open();
                

        });

        $('.tanken').click(function () {
            var id = $(this).parent().attr("data-id");
            console.log('Click on tanken button '+ id + ' registered');

            $.ajax({
                method: "GET",
                url: "database.php",
                dataType: "html",
                data:{
                    id: id,
                    action: "tanken"
                },
                success: function(myData){
                    console.log(myData);
                }
              });

              

    
        });
    
        $('.delete').click(function () {
            var id = $(this).parent().attr("data-id");
            console.log('Click on delete button registered');
            
            $.ajax({
                method: "GET",
                url: "database.php",
                dataType: "html",
                data:{
                    id: id,
                    action: "delete"
                },
                success: function(myData){
                    console.log(myData);
                }
              });
        });

        //console.log("Values Field2:") 
        //Data Werte von Field2 mittels forEach ausgeben:
        //mydata.data.forEach(element => {
            //console.log(element.Field2);
        //});

        //Errors ausgeben
        //mydata.error.forEach(element => {
            //console.log(element);
           // M.toast({ html: element.meldung, classes:"red black-text" });   
        //});

    });

    //Auf JSON mit AJAX zugreifen
    /*$.ajax({
        method: "GET",
        url: "../data/mydata.json",
        dataType: "json",
        success: function(myData){
            console.log(myData);
        }
      });*/

      /*$.ajax({
        method: "POST",
        url: "../sites/auto.php",
        dataType: "HTML",
        data: {
            var1: "Variabel 1",
            var2: "Variabel 2"
        },
        success: function(myData){
            console.log(myData);
        }
      });*/

    $('.modal').modal();

    $('#addauto').click(function () {
        console.log('Click on Add_Auto button registred');
        $('#modal-titel').html('neuer Datensatz erstellen');
        $('#modal-inhalt').load("../sites/createform.html");

    });






});
