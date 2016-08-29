// variabili globali javascript
var purezza = "";
var carati = "";
var colore = "";
var cambio = "";
var xmlhttp = null;

getCurrencyExchange();

function myFunction() {
    carati = $("#carati").val();
    if((carati > 0) && (carati < 11)) {
        if((carati > 0) && (carati < 0.30)) {
            // scale ridotte di purezza
            // adatta i valori scelti di conseguenza
            purezza = $("#purezza").val();
            switch(purezza) {
                case "IF":
                case "VVS1":
                case "VVS2":
                    purezza = "IF-VVS";
                    break;
                case "VS1":
                case "VS2":
                    purezza = "VS";
                    break;
            }

            // scale ridotte di colore
            // adatta i valori scelti di conseguenza
            switch($("#colore").val()) {
                case "D":
                case "E":
                case "F":
                    colore = "D-F";
                    break;
                case "G":
                case "H":
                    colore = "G-H";
                    break;
                case "I":
                case "J":
                    colore = "I-J";
                    break;
                case "K":
                case "L":
                    colore = "K-L";
                    break;
                case "M":
                case "N":
                    colore = "M-N";
                    break;
            }
        } else {
            // se le pietre sono piu' grandi (oltre i 0.29ct)
            // lascia i valori come scelti dall'utente
            purezza = $("#purezza").val();
            colore = $("#colore").val();
            // non esiste 'N' sopra i 0.29ct
            if(colore == "N") {
                colore = "M";
            }
        }

        $("#plchCarati").text(carati);
        $("#plchColore").text(colore);
        $("#plchPurezza").text(purezza);

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("plchResult").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","includes/getvalue.php?carati="+carati+"&colore="+colore+"&purezza="+purezza+"&cambio="+cambio,true);
        xmlhttp.send();

        $(document).ready(
            function(){
                $('#myModal').modal('show');
        }) ;
        return ;
    }
}

// Ottiene il cambio Euro Dollaro
function getCurrencyExchange() {
    $.ajax({
        crossDomain: true,
        type: "GET",
        dataType: "jsonp",
        url: "http://api.fixer.io/latest?base=USD&symbols=EUR",
        success: function (res) {
            $.each(res.rates, function (key, val) {
                if (key == 'EUR') {
                     cambio = val;
                     $(document).ready(
                        function(){
                            $("#dollaro").val(cambio);
                        });
                     return false;
                }
            });
        },
        error: function (err) {
            $(document).ready(
                function(){
                    $("#dollaro").text("Errore nel reperire i dati");
                });
        }
    });
}
