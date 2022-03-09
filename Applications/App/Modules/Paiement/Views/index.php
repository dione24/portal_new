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
                                <img src="/images/latest_ml2.png" alt="Logo CinetPay" width="200px">
                                <form method="post" action="/paiement/cinet">
                                    <div>
                                        <label for="billing-money" class="col-md-2 col-form-label">Montant</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="billing-phone" name="montant"
                                                placeholder="Entrer le montant ">
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success" id="bt_get_signature">
                                                <i class="mdi mdi-arrow-right me-1"></i> Payer</button>
                                        </div> <!-- end col -->
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