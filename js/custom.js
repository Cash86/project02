var state = false;

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

$(document).ready(function () {

    $('ul.sf-menu').superfish();

    var treasure = getCookie("treasure");
    if (treasure != "") {
        $('body').css('background-color', '#CA9729');
        state = true;
    }

    $('#ka-emblem').on('click', function() {
        if(!state) { // goldrot: DAA520, unser gold: CA9727
            $('body').css('background-color', '#CA9729');
            state = true;
            document.cookie = 'treasure=cimfid';
        } else {
            $('body').css('background-color', '#FFFFFF');
            state = false;
            document.cookie = 'treasure=; expires=Thu, 01 Jan 1970 00:00:00 UTC';
        }
    });
});