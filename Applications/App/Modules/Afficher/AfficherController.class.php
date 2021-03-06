<?php

namespace Applications\App\Modules\Afficher;

class AfficherController extends \Library\BackController
{
    public function executeHome(\Library\HTTPRequest $request)
    {
        $this->page->addVar("titles", "Accueil"); // Titre de la page
        $FicheDebiteur = $this->managers->getManagerOf('Afficher')->getFicheDebiteur($_SESSION['deb']);
        $this->page->addVar("FicheDebiteur", $FicheDebiteur); // Titre de la page
        $SumPayementDebiSuvi = $this->managers->getManagerOf('Afficher')->SumPayementDebiSuvi($_SESSION['deb']);
        $this->page->addVar("SumPayementDebiSuvi", $SumPayementDebiSuvi); // Titre de la page
        $paiementDebiteur = $this->managers->getManagerOf('Afficher')->PayementDebiteur($_SESSION['deb']);
        $this->page->addVar("paiementDebiteur", $paiementDebiteur); // Titre de la page


    }
}