<?php


require_once "./modele/passager.php";
require_once "./modele/railway.php";


$trains = [];

$train1 = new Railway("TGV123", "Marseille", "12h30");
$train2 = new Railway("TGV456", "Lyon", "14h00");
Railway::ajouterTrain($trains, $train1);
Railway::ajouterTrain($trains, $train2);


$passagers = [];
Passager::ajouterUnPassager($passagers, new Passager("Brian", "B123", "TGV123"));
Passager::ajouterUnPassager($passagers, new Passager("Jordan", "B456", "TGV456"));
Passager::ajouterUnPassager($passagers, new Passager("Elodie", "B789", "TGV123"));


Passager::afficherPassagerTrain($passagers);
?>