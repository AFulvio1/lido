// funzione che carica i partial negli appositi container al caricamento della pagina
$(function () {
    $(document).ready(function () {
        $(".load-html").each(function () {
            var container = '#' + $(this).attr('data-container');
            var src = $(this).attr('data-source');
            $(container).load(src);
        });
    });
});