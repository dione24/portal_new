<?php
$apikey = '9740230376227497ddde1b0.56157923';
$cpm_site_id = '9740230376227497ddde1b0.56157923';
$cpm_version = 'V1';
$cpm_language = 'fr';
$cpm_currency = 'CFA';
$cpm_page_action = 'PAYMENT';
$cpm_payment_config = 'SINGLE';
$cpSecure = "https://secure.cinetpay.com";
$signatureUrl = "https://api.cinetpay.com/v1/?method=getSignatureByPost";
$cpm_amount = '';
$cpm_custom = ''; // This field exist soanything can be inserted in it;it will be send back after payment
$cpm_designation = 'Payement'; //this field exist to identify the article being paid
$cpm_trans_date = date("Y-m-d H:i:s");
$cpm_trans_id = 'payement-' . (string)date("YmdHis"); //Transaction id that will be send to identify the transaction
$return_url = "https://portal.malicreances-sa.com"; //The customer will be redirect on this page after successful payment
$cancel_url = "https://portal.malicreances-sa.com"; //The customer will be redirect on this page if the payment get cancel
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
// $context = stream_context_create($options);
// $result = file_get_contents($signatureUrl, false, $context);
// if ($result === false) {
//     /* Handle error */
//     \header($return_url);
//     exit();
// }
// // var_dump($getSignatureData);
// // echo("\n");
// $signature = json_decode($result);
// // var_dump($signature);
?>



<div class="checkout-tabs">
    <div class="row">
        <div class="col-xl-2 col-sm-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-shipping-tab" data-bs-toggle="pill" href="#v-pills-shipping"
                    role="tab" aria-controls="v-pills-shipping" aria-selected="true">
                    <i class="bx bx-money  d-block check-nav-icon mt-4 mb-2"></i>
                    <p class="fw-bold mb-4">Paiement via CinetPay</p>
                </a>
            </div>
        </div>
        <div class="col-xl-10 col-sm-9">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-shipping" role="tabpanel"
                            aria-labelledby="v-pills-shipping-tab">
                            <div>
                                <h4 class="card-title">Cinet Pay</h4>
                                <img src="/images/latest_inline.png" alt="Logo CinetPay">
                                <form method="post" action="<?= $cpSecure; ?>">
                                    <div>
                                        <label for="billing-money" class="col-md-2 col-form-label">Montant</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="billing-phone" name="cpm_amount"
                                                placeholder="Entrer le montant ">
                                        </div>
                                    </div>
                                    <input type="hidden" value="<?= $apikey; ?>" name="apikey">
                                    <input type="hidden" value="<?= $cpm_custom; ?>" name="cpm_custom">
                                    <input type="hidden" value="<?= $cpm_site_id; ?>" name="cpm_site_id">
                                    <input type="hidden" value="<?= $cpm_version; ?>" name="cpm_version">
                                    <p><input type="hidden" value="<?= $cpm_currency; ?>" name="cpm_currency">
                                    </p>
                                    <input type="hidden" value="<?= $cpm_trans_id; ?>" name="cpm_trans_id">
                                    <input type="hidden" value="<?= $cpm_language; ?>" name="cpm_language">
                                    <input type="hidden" value="<?= $getSignatureData['cpm_trans_date']; ?>"
                                        name="cpm_trans_date">
                                    <input type="hidden" value="<?= $cpm_page_action; ?>" name="cpm_page_action">
                                    <p><input type="hidden" value="<?= $cpm_designation; ?>" name="cpm_designation">
                                    </p>
                                    <input type="hidden" value="<?= $cpm_payment_config; ?>" name="cpm_payment_config">
                                    <input type="hidden" value="<?= $signature; ?>" name="signature">
                                    <input type="hidden" value="<?= $return_url; ?>" name="return_url">
                                    <input type="hidden" value="<?= $cancel_url; ?>" name="cancel_url">
                                    <input type="hidden" value="<?= $notify_url; ?>" name="notify_url">
                                    <input type="hidden" value="1" name="debug">

                                    <div class="row mt-4">
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success" id="bt_get_signature">
                                                <i class="mdi mdi-arrow-right me-1"></i> Payer</button>
                                        </div> <!-- end col -->
                                        <!-- end col -->
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <a href="/home" class="btn text-muted d-none d-sm-inline-block btn-link">
                        <i class="mdi mdi-arrow-left me-1"></i> Annuler</a>
                </div> <!-- end col -->
                <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>
</div>