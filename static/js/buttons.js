// funzione che cattura la scelta dell'utente e in base all'esito rimanda alla pagina della prenotazione
function buttonChoise(numero,costo,riga,colonna) {
    var choise = confirm("Vuoi confermare la scelta?");
    if (choise == true) {
        window.open("http://localhost:3000/servizi/ombrelloni/prenotazione-ombrellone.php?numero=" + encodeURIComponent(numero) + "&costo=" + encodeURIComponent(costo) + "&riga=" + encodeURIComponent(riga) + "&colonna=" + encodeURIComponent(colonna));
    }
}