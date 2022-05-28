function buttonChoise(numero,costo,riga,colonna) {
    /** choise: true if ok, false else */
    var choise = confirm("Vuoi confermare la scelta?");
    if (choise == true) {
        window.open("http://localhost:3000/servizi/ombrelloni/prenotazione-ombrellone.php?numero=" + encodeURIComponent(numero) + "&costo=" + encodeURIComponent(costo) + "&riga=" + encodeURIComponent(riga) + "&colonna=" + encodeURIComponent(colonna));
    }
}
function buttonAlert() {
    alert("Purtroppo l'ombrellone selezionato è stato già prenotato!");
}