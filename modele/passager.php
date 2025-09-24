<?php

// 2. **Passager :**
//    - Propriétés :
//      - Nom du passager
//      - Numéro de billet
//      - Train auquel le passager est assigné
//    - Méthodes statiques :
//      - Ajouter un passager à un train
//      - Afficher tous les passagers avec leur train et numéro de billet

require_once __DIR__ . "/railway.php";

class Passager{

    public $passagers = [];
    public $name;
    private $numTicket;
    private  $idTrainTicket;

    function __construct($name, $numTicket, $idTrainTicket)
    {
        $this->name = $name;
        $this->numTicket = $numTicket;
        $this->idTrainTicket = $idTrainTicket;
    }

    public static function ajouterUnPassager(&$passagers, $passager){
        $passagers[] = $passager;
    }

    public static function afficherPassagerTrain($passagers){
        foreach ($passagers as $passager) {
            echo "==============================\n";
            echo "Nom: {$passager->name}\n";
            echo "Numéro de billet: {$passager->numTicket}\n";
            echo "Train assigné: {$passager->idTrainTicket}\n";
            echo "===============================\n";
            echo "";
        }
    }
}


?>