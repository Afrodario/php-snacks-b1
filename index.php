<?php
//Snack 2
echo ("<h1>Snack 2</h1>");
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

//Prima verifica
if (strlen($name) > 3) {
    //Seconda verifica
    if (strpos($mail, "@") && strpos($mail, ".")) {
        //Terza verifica
        if (is_numeric($age)) {
            //Risultato finale
            echo ("<p>Accesso eseguito!</p>");
        } else {
            echo ('<p>Accesso negato per età non valida</p>');
        }
    } else {
        echo ('<p>Accesso negato per indirizzo e-mail non valido</p>');
    };
} else {
    echo('<p>Accesso negato per nome troppo corto</p>');
};

//Snack 5
echo ("<h1>Snack 5</h1>");
$lyrics = "Life is a mistery. Everyone must stand alone. I hear you call my name and it feels like home.";
echo ("L'incipit di 'Like a Prayer' è " . "<em>$lyrics</em>");

$delimitatore = ".";
$testoSpezzato = explode($delimitatore, $lyrics);

for ($i = 0; $i < count($testoSpezzato); $i++) {
    echo ("<p>$testoSpezzato[$i]" . $delimitatore . "</p>");
};


?>