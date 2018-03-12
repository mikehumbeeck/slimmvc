$(function () {

    $('#con_kla_id').on("blur", function () {
        //alert("test");

        var klantID = $(this).val();            //haal de waarde van de zoekterm uit het tekstvak


        $.ajax({
            url: "ajax_services/service_klant.php?getname=true",
            type: "post",
            dataType: "json",
            async: true,            //Wachten niet op respons van server
            data: {'id': klantID},

            success: function (response) {                 //wat doen we bij succes?
                $('#kla_naam').val(response.naam);
                $('#kla_voornaam').val(response.voornaam);

                console.log(response);
                if (response.voornaam !== "not found"){
                    $('#divResponse').html("Let op! Klant " + response.voornaam + " " + response.naam + " bestaat al");
                }

            },
            error: function (jqXhr, textStatus, errorThrown) {       //wat doen we bij problemen?
                $('#divResponse').html("Er is iets fout gegaan " + textStatus);
            }
        }); //einde AJAX-call
    });


    $('body').on('click', '#btnOpslaan', function (e) {   //bij de klik op de knop btnOpslaan...

        $('#divResponse').html(""); //vorige response leegmaken

        e.preventDefault();

        //alle namen en values bij elkaar nemen in een array
        var heel_het_formulier = $('#RegistrationForm').serializeArray();

        $.ajax({
            url: "ajax_services/service_form_contact.php", //welk script moet er antwoorden?
            type: "post",
            dataType: "json",                            //wat verwachten we terug?
            async: false,                                //wachten op response!!
            data: heel_het_formulier,                    //te verzenden data
            success: function (response)                  //wat doen we bij succes?
            {
                //het SQL statement dat de controle doet op overlap
                var check_sql = response.check_sql;

                if (response.status == "OK") {
                    //bericht samenstellen
                    var msg = "Geen overlapping gevonden;" + response.message;
                }
                if (response.status == "NOTOK") {
                    //bericht samenstellen
                    var msg = "Er is al een contact voor klant " + response.con_kla_id +
                        " op " + response.con_datum + " van " + response.con_uur_van +
                        " tot " + response.con_uur_tot + ";" + response.message;
                }

                //bericht (positief of negatief) weergeven
                $('#divResponse').html(msg);
            },
            error: function (jqXhr, textStatus, errorThrown) { //wat doen we bij problemen?
                var myerr = "Probleem met AJAX call" + "||" + jqXhr.responseText + "||" +
                    textStatus + "||" + errorThrown;

                //bericht weergeven
                $('#divResponse').html(myerr);
            }
        }); //einde ajax call

    }); //einde on click


}); //einde function