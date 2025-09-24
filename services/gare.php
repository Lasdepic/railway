<?php

// 3. **Gare :**
//    - Méthodes statiques :
//      - Afficher les informations sur les plates-formes de départ avec les trains correspondants.

require_once __DIR__ . '/../modele/passager.php';
require_once  __DIR__ . '/../modele/railway.php';

class Gare
{

    public static function information($passagers)
    {
        foreach (Railway::$trains as $train) {
            foreach ($passagers as $passager) {
                echo " Train : $train->identifiantTrain | Destination : $train->destination | Départ : $train->heureDépart | Quai : $train->plateforme === -Passager : $passager->name\n";
            }
        }
    }
}
