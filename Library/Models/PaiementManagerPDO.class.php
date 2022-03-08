<?php

namespace Library\Models;

class PaiementManagerPDO extends \Library\Models\PaiementManager
{
    public function Paiement()
    {

        $apikey = '9740230376227497ddde1b0.56157923';
        $cpm_site_id = '9740230376227497ddde1b0.56157923';
        $cpm_version = 'V1';
        $cpm_language = 'fr';
        $cpm_currency = 'CFA';
        $cpm_page_action = 'PAYMENT';
        $cpm_payment_config = 'SINGLE';
        $cpSecure = "https://secure.cinetpay.com";
        $signatureUrl = "https://api.cinetpay.com/v1/?method=getSignatureByPost";
        $cpm_amount = $_POST['cpm_amount'];
        $cpm_custom = ''; // This field exist soanything can be inserted in it;it will be send back after payment
        $cpm_designation = 'Payement'; //this field exist to identify the article being paid
        $cpm_trans_date = date("Y-m-d H:i:s");
        $cpm_trans_id = 'payement-' . (string)date("YmdHis"); //Transaction id that will be send to identify the transaction
        $return_url = ""; //The customer will be redirect on this page after successful payment
        $cancel_url = ""; //The customer will be redirect on this page if the payment get cancel
        $notify_url = ""; //This page must be a webhook (webservice).
        //it will be called weither or nor the payment is success or failed
        //you must only listen to this to update transactions status
        //Data that will be send in the form
        $getSignatureData = array(
            'apikey' => $apikey,
            'cpm_amount' => $cpm_amount,
            'cpm_custom' => $cpm_custom,
            'cpm_site_id' => $cpm_site_id,
            'cpm_version' => $cpm_version,
            'cpm_currency' => $cpm_currency,
            'cpm_trans_id' => $cpm_trans_id,
            'cpm_language' => $cpm_language,
            'cpm_trans_date' => $cpm_trans_date,
            'cpm_page_action' => $cpm_page_action,
            'cpm_designation' => $cpm_designation,
            'cpm_payment_config' => $cpm_payment_config
        );
        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'method' => "POST",
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                'content' => http_build_query($getSignatureData)
            )
        );
        $context = stream_context_create($options);
        // $result = file_get_contents($signatureUrl, false, $context);
        // if ($result === false) {
        //     /* Handle error */
        //     \header($return_url);
        //     exit();
        // }
        // var_dump($getSignatureData);
        // echo("\n");
        // $signature = json_decode($result);
        // var_dump($signature);


    }
}