$(document).ready(function () {
    /* à la sélection du classement on met à jour */
    $(document).on("change", "#select-order", function () {
        updateOrder();
    });
    /* au chargement de la page on lance le classement */
    updateOrder();
});

function updateOrder() {
    var order = $("#select-order").val();
    if (order == 'position' || order == 'note' || order == 'name') {
        var divList = $(".item");
        if (order == 'position') { //tri numerique croissant
            divList.sort(function (a, b) {
                return  $(a).data(order) - $(b).data(order);
            });
        } else if (order == 'note') {//tri numerique decroissant
            divList.sort(function (a, b) {
                return $(b).data(order) - $(a).data(order);
            });
        } else if (order == 'name') { //tri alphabetique
            divList.sort(function (a, b) {
                var compA = $(a).data(order).toUpperCase();
                var compB = $(b).data(order).toUpperCase();
                return (compA < compB) ? -1 : (compA > compB) ? 1 : 0;
            });
        }
        $(".card-container").html(divList);
    }
}


