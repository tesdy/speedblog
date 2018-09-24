$(document).ready(function(){
    $('select').formSelect();
    $('.sidenav').sidenav();

    // Search field in NavBar actions :
    var trig = 1;
// fix chrome
    var mynavsearch = $('#mynavsearch');

    mynavsearch.addClass('searchbarfix');
    // Au focus sur le champ search de la navbar : Agrandissement de 150
    mynavsearch.click(function(e) {
        // handle other nav elements visibility here to avoid push down
        $('.search-hide').addClass('hide');
        if (trig === 1){
            $('#navfix2').animate({
                width: '+=150',
                marginRight: 0
            }, 400);

            trig ++;
        }

    });

    // au retrait du focus sur le champ search de la navbar : retour à taille normale
    mynavsearch.focusout(function() {

        $('#navfix2').animate({
            width: '-=150'
        }, 400);
        trig = trig - 1;
        //handle other nav elements visibility first to avoid push down
        $('.search-hide').removeClass('hide');



    });

});

$(document).ready(function () {
    /* à la sélection du classement on met à jour */
    $(document).on("change", "#select-order", function () {
        updateOrder();
    });
    /* au chargement de la page on lance le classement */
    updateOrder();
});

function updateOrder() {

    var order = $("#select-order").val(); // Récupérer le choix de l'user dans le 'select' ayant l'id "select-order"
    if (order === 'nameasc' || order === 'namedesc' || order === 'dateasc' || order === 'datedesc') {
        if (order === 'nameasc' || order === 'namedesc' || order === 'dateasc' || order === 'datedesc') {

            var divList = $(".item"); // Récupérer toutes les div ayant la classe "item"
            if (order === 'nameasc') { // Si c'est sur nameasc c'est un tri ordre alphabétique du titre
                order = 'name';
                divList.sort(function (a, b) {
                    var compA = $(a).data(order).toUpperCase();
                    var compB = $(b).data(order).toUpperCase();
                    return (compA < compB) ? -1 : (compA > compB) ? 1 : 0; // si nom de a < nom de b alors -1
                });
            } else if (order === 'namedesc') {// Si c'est sur namedesc c'est un tri ordre anti-alphabétique du titre
                order = 'name';
                divList.sort(function (a, b) {
                    var compA = $(a).data(order).toUpperCase();
                    var compB = $(b).data(order).toUpperCase();
                    return (compA < compB) ? 1 : (compA > compB) ? -1 : 0; // si nom de a < nom de b alors -1
                });
            } else if (order === 'dateasc') {// Si c'est sur namedesc c'est un tri ordre chronologique
                order = 'date';
                divList.sort(function (a, b) {
                    return Date.parse($(a).data(order)) - Date.parse($(b).data(order));
                });
            } else if (order === 'datedesc') { // Si c'est sur dateasc c'est par ordre antichronologique
                order = 'date';
                divList.sort(function (a, b) {
                    return Date.parse($(b).data(order)) - Date.parse($(a).data(order));
                });
            }
            $(".bookcard").html(divList);
        }
    }
}