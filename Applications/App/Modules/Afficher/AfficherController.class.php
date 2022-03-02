<?php

namespace Applications\App\Modules\Afficher;

class AfficherController extends \Library\BackController
{
    public function executeHome(\Library\HTTPRequest $request)
    {
        $this->page->addVar("titles", "Accueil"); // Titre de la page
        $FicheDebiteur = $this->managers->getManagerOf('Afficher')->getFicheDebiteur();
        $this->page->addVar("FicheDebiteur", $FicheDebiteur); // Titre de la page
        $SumPayementDebiSuvi = $this->managers->getManagerOf('Afficher')->SumPayementDebiSuvi();
        $this->page->addVar("SumPayementDebiSuvi", $SumPayementDebiSuvi); // Titre de la page

        $paiementDebiteur = $this->managers->getManagerOf('Afficher')->PayementDebiteur();
        $this->page->addVar("paiementDebiteur", $paiementDebiteur); // Titre de la page


    }
}