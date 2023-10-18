<?php
$wzorzec = '/[-w.]+@([-A-z0-9]+\.)+[A-z]/';
$tekst = "mam 4 zeszyty";


if(preg_match($wzorzec, $tekst)){
    echo "Znaleziono email!";
} else {
    echo "nie znaleziono email!";
};


?>