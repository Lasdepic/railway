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
    private $identifiantTrain;
    public $destination;
    public $heureDépart;

    function __construct($idTrain, $destination, $heureD){

        $this->identifiantTrain = $idTrain;
        $this->destination = $destination;
        $this->heureDépart = $heureD;
    }

    public static function ajouterTrain(&$trains, $newTrain){
        $trains[] = $newTrain;
    }

    public static function afficherTrain($trains){
        foreach ($trains as $train){
            echo "=======================================\n";
            echo " => Train ID: {$train->identifiantTrain}\n => Destination: {$train->destination}\n => Heure de départ: {$train->heureDépart}\n";
            echo "=======================================\n";
            echo "";
        }
    }
}

