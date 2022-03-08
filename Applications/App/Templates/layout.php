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


<!Doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Portal MALI CREANCES | <?= $titles; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link href="/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body data-topbar="white" data-layout="horizontal">
    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        PORTAL | MALI CREANCES SA
                        <a href="index.html" class="logo logo-white">
                            <span class="logo-sm">
                                <img src="/images/logo.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="/images/logo-dark.png" alt="" height="17">
                            </span>
                        </a>
                    </div>
                    <button type="button"
                        class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                        data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>

            </div>
        </header>

        <div class="topnav">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="/home" id="topnav-dashboard"
                                    role="button">
                                    <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">Accueil</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="/paiement" id="topnav-dashboard"
                                    role="button">
                                    <i class="bx bx-money"></i><span key="t-dashboards">Paiement</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="/logout" id="topnav-dashboard"
                                    role="button">
                                    <i class="bx bx-sign-out"></i><span key="t-dashboards">Déconnexion</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <?= $content; ?>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                            document.write(new Date().getFullYear())
                            </script> © Portal MALI CREANCES
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Develop by NIANGALY ABDOULAYE
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="/libs/jquery/jquery.min.js"></script>
    <script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/libs/metismenu/metisMenu.min.js"></script>
    <script src="/libs/simplebar/simplebar.min.js"></script>
    <script src="/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="/libs/apexcharts/apexcharts.min.js"></script>

    <script src="/js/pages/dashboard.init.js"></script>

    <script src="/js/app.js"></script>
</body>

</html>