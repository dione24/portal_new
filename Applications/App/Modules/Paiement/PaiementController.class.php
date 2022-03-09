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
        // error_reporting(E_ALL);
        // ini_set('display_errors', 1);
        try {
            //transaction id
            $id_transaction = date("YmdHis");
            //  $id_transaction = \Library\Cinetpay::generateTransId();
            // Payment description
            $description_du_paiement = "Mon produit de ref: $id_transaction";
            // Payment Date must be on date format
            $date_transaction = date("Y-m-d H:i:s");
            // Amount
            $montant_a_payer = $request->postData('montant');

            // put a value that you can use to identify the buyer in your system
            $identifiant_du_payeur = 'payeur@domaine.ci';

            //Veuillez entrer votre apiKey
            $apiKey = "9740230376227497ddde1b0.56157923";
            //Veuillez entrer votre siteId
            $site_id = "124598";

            //platform ,  utiliser PROD si vous avez créé votre compte sur www.cinetpay.com  ou TEST si vous avez créé votre compte sur www.sandbox.cinetpay.com
            $plateform = "PROD";

            //la version ,  utilisé V1 si vous voulez utiliser la version 1 de l'api
            $version = "V2";

            // nom du formulaire CinetPay
            $formName = "goCinetPay";
            // notify url
            $notify_url = 'https://portal.malicreances-sa.com/';
            // return url
            $return_url = 'https://portal.malicreances-sa.com/';
            // cancel url
            $cancel_url = 'https://portal.malicreances-sa.com/';
            // cinetpay button type, must be 1, 2, 3, 4 or 5
            $btnType = 2;
            // button size, can be 'small' , 'large' or 'larger'
            $btnSize = 'large';
            // create html form for your basket
            $CinetPay = new \Library\CinetPay($site_id, $apiKey, $plateform, $version);
            $CinetPay->setTransId($id_transaction)
                ->setDesignation($description_du_paiement)
                ->setTransDate($date_transaction)
                ->setAmount($montant_a_payer)
                ->setDebug(false) // put it on true, if you want to activate debug
                ->setCustom($identifiant_du_payeur) // optional
                ->setNotifyUrl($notify_url) // optional
                ->setReturnUrl($return_url) // optional
                ->setCancelUrl($cancel_url) // optional
                ->displayPayButton($formName, $btnType, $btnSize);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}