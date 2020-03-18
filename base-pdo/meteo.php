<?php

try {
    // On se connecte à MySQL
    $bd = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}


$resultat = $bd->query('SELECT * FROM meteo');

$donnees = $resultat->fetch();

while ($donnees = $resultat->fetch()) {
    echo $donnees['ville'];
}

$resultat->closeCursor();
