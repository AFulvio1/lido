function bottonePagamento(conto, id) {
    window.open("http://localhost:3000/servizi/ombrelloni/caricamento.php?conto=" + encodeURIComponent(conto));

    var column;
    var row;

    const t = Array()

    const stringa_id = id.toString();
    const string_lenght = stringa_id.length;

    let n_column = stringa_id.charAt(stringa_id.length-1);

    if (string_lenght == 1) {

    }
    else if (string_lenght == 2) {

    }
    else if (string_lenght == 3) {

    }

    if ( n_column == '1') {
        let column = 'T';
    }
    else if (n_column == '2') {
        let column = 'S';
    }
    else if (n_column == '3') {
        let column = 'T';
    }
    else if (n_column == '4') {
        let column = 'T';
    }
    else if (n_column == '5') {
        let column = 'T';
    }
    else if (n_column == '6') {
        let column = 'E';
    }
    else if (n_column == '7') {
        let column = 'D';
    }
    else if (n_column == '8') {
        let column = 'C';
    }
    else if (n_column == '9') {
        let column = 'B';
    }
    else if (n_column == '0') {
        let column = 'A';
    }
}
    
$(document).ready( function() {
    $('#aggiungi-lettino').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/functions/aggiungiLettino.php',
            async: true,
            dataType: "json",
            success: function (result) {
                document.getElementById("counter-lettini").innerHTML = result.counter;
                document.getElementById("saldo-lettini").innerHTML = result.saldo + " €";
                document.getElementById("conto").innerHTML = result.conto + " €";
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
});

$(document).ready( function() {
    $('#rimuovi-lettino').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/functions/rimuoviLettino.php',
            async: true,
            dataType: "json",
            success: function (result) {
                document.getElementById("counter-lettini").innerHTML = result.counter;
                document.getElementById("saldo-lettini").innerHTML = result.saldo + " €";
                document.getElementById("conto").innerHTML = result.conto + " €";
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
});

$(document).ready( function() {
    $('#aggiungi-sdraio').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/functions/aggiungiSdraio.php',
            async: true,
            dataType: "json",
            success: function (result) {
                document.getElementById("counter-sdraio").innerHTML = result.counter;
                document.getElementById("saldo-sdraio").innerHTML = result.saldo + " €";
                document.getElementById("conto").innerHTML = result.conto + " €";
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
});

$(document).ready( function() {
    $('#rimuovi-sdraio').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/functions/rimuoviSdraio.php',
            async: true,
            dataType: "json",
            success: function (result) {
                document.getElementById("counter-sdraio").innerHTML = result.counter;
                document.getElementById("saldo-sdraio").innerHTML = result.saldo + " €";
                document.getElementById("conto").innerHTML = result.conto + " €";
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
});

$(document).ready( function() {
    $('#aggiungi-cabina').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/functions/aggiungiCabina.php',
            async: true,
            dataType: "json",
            success: function (result) {
                document.getElementById("counter-cabina").innerHTML = result.counter;
                document.getElementById("saldo-cabina").innerHTML = result.saldo + " €";
                document.getElementById("conto").innerHTML = result.conto + " €";
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
});

$(document).ready( function() {
    $('#rimuovi-cabina').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/functions/rimuoviCabina.php',
            async: true,
            dataType: "json",
            success: function (result) {
                document.getElementById("counter-cabina").innerHTML = result.counter;
                document.getElementById("saldo-cabina").innerHTML = result.saldo + " €";
                document.getElementById("conto").innerHTML = result.conto + " €";
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
});
    