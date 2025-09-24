<?php

// 1. **Train :**
//    - Propriétés :
//      - Identifiant du train
//      - Destination
//      - Heure de départ
//    - Méthodes statiques :
//      - Ajouter un train
//      - Afficher tous les trains avec leur destination et heure de départ

class Railway
{
    public static $trains = [];
    public $identifiantTrain;
    public $destination;
    public $heureDépart;
    public $plateforme;

    function __construct($idTrain, $destination, $heureD, $quai){

        $this->identifiantTrain = $idTrain;
        $this->destination = $destination;
        $this->heureDépart = $heureD;
        $this->plateforme = $quai;
    }

    public static function ajouterTrain(&$trains, $newTrain){
        $trains[] = $newTrain;
    }

    private static function afficherTrain($trains){
        foreach ($trains as $train){
            echo "=======================================\n";
            echo " => Train ID: {$train->identifiantTrain}\n => Destination: {$train->destination}\n => Heure de départ: {$train->heureDépart}\n => Quai : $train->plateforme";
            echo "=======================================\n";
            echo "";
        }
    }
}

