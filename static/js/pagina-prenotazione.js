function bottonePagamento(conto, id, riga, colonna) {
    window.open("http://localhost:3000/servizi/ombrelloni/caricamento.php?conto=" + encodeURIComponent(conto) + "&id=" + encodeURIComponent(id) + "&riga=" + encodeURIComponent(riga) + "&colonna=" + encodeURIComponent(colonna));
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
    