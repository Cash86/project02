var state = false;

$(document).ready(function () {

    $('ul.sf-menu').superfish();

    if (document.cookie.length > 0) {
        $('body').css('background-color', '#CA9729');
        state = true;
    }

    $('#ka-emblem').on('click', function() {
        if(!state) { // goldrot: DAA520, unser gold: CA9727
            $('body').css('background-color', '#CA9729');
            state = true;
            document.cookie = 'treasure=cimfid';
        } else {
            var r = confirm('Wirklich diese schönen Farben abstellen?');
            if (r == true) {
                $('body').css('background-color', '#FFFFFF');
                state = false;
                document.cookie = 'treasure=; expires=Thu, 01 Jan 1970 00:00:00 UTC';
            }
        }
    });
});