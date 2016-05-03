$(document).ready(function () {

    var search = [];
    $('.element').each(function() {
       search.push(this.id);
    });

    $("#search").keyup(function (e) {
        if (e.which == 13) {
            e.preventDefault();
        }
        var len = $(this).val().length;
        if (len >= 3) {
            // Function search
            searchT(search, $(this).val());
        } else {
            $('.element').fadeIn('fast');
        }
    });

    document.title = search.length + ' projects - Valentin';

});

function searchT(array, terms) {

    $('.element').hide();

    // Return tittle match
    var result = $.map(array, function (value, key) {
        if (value.match(new RegExp('(' + terms + ')', 'gi'))) {
            return value;
        }
    });
    $.each(result, function (i) {
        $('#' + result[i]).show();
    });

}