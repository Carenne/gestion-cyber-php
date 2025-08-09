   
      <div id="note" class="content-section active">
            <?php
                // Récupération des paiements
                $stmt = $pdo->query("SELECT * FROM paiement ORDER BY date_heure_paiement DESC");
                $paiements = $stmt->fetchAll();
            ?>
            <!-- Liste des paiements -->
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Liste des paiements</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                       <!-- <table class="table table-striped mb-0">-->
                         <table id="myTable" class="table table-striped table-bordered table-hover" style="width:100%">
                            <thead class="table-light">
                                <tr>
                                    <th>Montant</th>
                                    <th>Type</th>
                                    <th>Commentaire</th>
                                    <th>Vendeur</th>
                                    <th>Heure</th>
                                    <th>Contrôle</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php if (!empty($paiements)): ?>
                                    <?php foreach ($paiements as $p): ?>
                                        <tr>
                                            
                                            <td><?= htmlspecialchars($p['montant']) ?></td>
                                            <td><?= htmlspecialchars($p['type_service']) ?></td>
                                            <td><?= htmlspecialchars($p['commentaire']) ?></td>
                                            <td><?= htmlspecialchars($p['nom_vendeur']) ?></td>
                                            <td><?= htmlspecialchars($p['date_heure_paiement']) ?></td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-outline-primary">Modifier</a>
                                                <a href="#" class="btn btn-sm btn-outline-danger">Supprimer</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="7" class="text-center">Aucun paiement trouvé</td>
                                    </tr>
                                <?php endif; ?>

                            </tbody>
                        </table>
                            <script>
                                $(document).ready(function () {
                                    $('#myTable').DataTable({
                                        "pageLength": 5, // Par défaut 5 lignes par page
                                        "lengthMenu": [5, 10, 25, 50, 100], // Choix possible
                                        "language": {
                                            "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json"
                                        }
                                    });
                                });
                            </script>
                    </div>
                </div>
            </div>

            <!-- Montant par type -->
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Montant</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="posteCheck">
                                <label class="form-check-label" for="posteCheck">Poste</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="impressionCheck">
                                <label class="form-check-label" for="impressionCheck">Impression/Photocopie</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="wifiCheck">
                                <label class="form-check-label" for="wifiCheck">Wifi</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="filmCheck">
                                <label class="form-check-label" for="filmCheck">Film</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="autreCheck">
                                <label class="form-check-label" for="autreCheck">Autre</label>
                            </div>
                        </div>
                    </div>

                    <!-- Tableau des montants -->
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control text-center" value="200"></td>
                                    <td><input type="text" class="form-control text-center" value="300"></td>
                                    <td><input type="text" class="form-control text-center" value="400"></td>
                                    <td><input type="text" class="form-control text-center" value="500"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control text-center" value="7"></td>
                                    <td><input type="text" class="form-control text-center" value="8"></td>
                                    <td><input type="text" class="form-control text-center" value="9"></td>
                                    <td><input type="text" class="form-control text-center" value="600"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control text-center" value="4"></td>
                                    <td><input type="text" class="form-control text-center" value="5"></td>
                                    <td><input type="text" class="form-control text-center" value="6"></td>
                                    <td><input type="text" class="form-control text-center" value="700"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control text-center" value="1"></td>
                                    <td><input type="text" class="form-control text-center" value="2"></td>
                                    <td><input type="text" class="form-control text-center" value="3"></td>
                                    <td><input type="text" class="form-control text-center" value="900"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control text-center" value="0"></td>
                                    <td><input type="text" class="form-control text-center" value="0"></td>
                                    <td><input type="text" class="form-control text-center" value="0"></td>
                                    <td><input type="text" class="form-control text-center" value="1800"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Bouton Enregistrer -->
            <div class="text-end">
                <button class="btn btn-primary px-4">
                    <i class="bi bi-save me-2"></i>Enregistrer
                </button>
            </div>
        </div>