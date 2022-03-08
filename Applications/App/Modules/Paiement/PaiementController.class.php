<?php

namespace Applications\App\Modules\Paiement;

class PaiementController extends \Library\BackController
{
    public function executeIndex(\Library\HTTPRequest $request)
    {
        $this->page->addVar("titles", "Paiement"); // Titre de la page


    }


    public function executeCinet(\Library\HTTPRequest $request)
    {
        $this->managers->getManagerOf('Paiement')->Paiement($request);
    }
}