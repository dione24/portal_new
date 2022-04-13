<div class="row">
    <div class="col-xl-4">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Bienvenue !</h5>
                            <p><?= (($FicheDebiteur['nom'] . ' ' . $FicheDebiteur['prenom'])); ?> </p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-6">Chart</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-6 mt-sm-0">
                            <canvas id="myChart" width="20" height="1"></canvas>
                            <script>
                            var ctx = document.getElementById('myChart');
                            var myChart = new Chart(ctx, {
                                type: 'pie',
                                data: {
                                    labels: ['Montant Recouvré', 'Montant Principal '],
                                    datasets: [{
                                        label: '# Paiement',
                                        data: [<?= $FicheDebiteur['MontantTotal']; ?>,
                                            <?= $FicheDebiteur['montant_debiteurs']; ?>
                                        ],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)'
                                        ],
                                        borderWidth: 1,
                                        hoverOffset: 4
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Montant à Payer</p>
                                <h4 class="mb-0"> CFA
                                    <?= number_format($FicheDebiteur['montant_debiteurs'], 0, ',', ' '); ?>
                                </h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Montant Payé</p>
                                <h4 class="mb-0">CFA <?= number_format($FicheDebiteur['MontantTotal'], 0, ',', ' '); ?>
                                </h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Montant Restant</p>
                                <h4 class="mb-0">CFA
                                    <?= number_format($FicheDebiteur['montant_debiteurs'] - $FicheDebiteur['MontantTotal'], 0, ',', ' '); ?>
                                </h4>
                            </div>
                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Mes Paiements</h4>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">Montant</th>
                                <th class="align-middle">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($paiementDebiteur as $key => $value) { ?>
                            <tr>
                                <td>
                                    <h6 class="font-weight-normal mb-0">
                                        <?= number_format($value['montant_paiement'], 0, ',', ' '); ?></h6>
                                </td>
                                <td>
                                    <h6 class="font-weight-normal mb-0">
                                        <?= date("d/m/Y", strtotime($value['date_recu'])); ?></h6>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>