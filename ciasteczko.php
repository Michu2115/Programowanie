<?php

var dataWygasniecia = new Date();
dataWygasniecia.setDate(dataWygasniecia.getDate() + 2);

document.cookie = "promocja=wycieczka; expires=" + dataWygasniecia.toUTCString();

function sprawdzCiasteczko(nazwa) {
    var ciasteczka = document.cookie.split(';');
    for (var i = 0; i < ciasteczka.length; i++) {
        var ciasteczko = ciasteczka[i];
        while (ciasteczko.charAt(0) == ' ') {
            ciasteczko = ciasteczko.substring(1);
        }
        if (ciasteczko.indexOf(nazwa + '=') == 0) {
            return true;
        }
    }
    return false;
}

var czyIstnieje = sprawdzCiasteczko("promocja");
console.log("Czy ciasteczko istnieje? " + czyIstnieje);

function usunCiasteczko(nazwa) {
    document.cookie = nazwa + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}

usunCiasteczko("promocja");

czyIstnieje = sprawdzCiasteczko("promocja");
console.log("Czy ciasteczko istnieje po usunięciu? " + czyIstnieje);

?>