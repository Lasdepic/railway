<?php


require_once "./modele/passager.php";
require_once "./modele/railway.php";
require_once "./services/gare.php";


$train1 = new Railway("TGV123", "Marseille", "12h30", "A");
$train2 = new Railway("TGV456", "Lyon", "14h00", "B");
$train3 = new Railway("TGV378", "Dunkerque", "16h00", "C");
Railway::ajouterTrain(Railway::$trains, $train1);
Railway::ajouterTrain(Railway::$trains, $train2);
Railway::ajouterTrain(Railway::$trains, $train3);


$passagers = [];
Passager::ajouterUnPassager($passagers, new Passager("Brian", "B123", "TGV123"));
Passager::ajouterUnPassager($passagers, new Passager("Jordan", "B456", "TGV456"));
Passager::ajouterUnPassager($passagers, new Passager("Elodie", "B789", "TGV123"));
Passager::ajouterUnPassager($passagers, new Passager("Wahid", "B904", "TGV123"));
Passager::ajouterUnPassager($passagers, new Passager("Pierre", "B876", "TGV378"));

Railway::afficherTrain(Railway::$trains);
Passager::afficherPassagerTrain($passagers);
Gare::information($passagers);
?>