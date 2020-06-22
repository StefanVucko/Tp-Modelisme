<div class="container-fluid container-lg">
    <br/>
    <div class="titre p-2 mb-5" style="background-color:black;">
        <h1 style="color:goldenrod">Enregistrer un nouveau bon de commande :</h1>
    </div>    

    <form id="formBons" name="formBons" onsubmit="return false">
            <div class="form-group d-flex justify-content-end">
            <div class="form-group m-0 p-0">
            <label for="orderDate" class="col-md-12 col-form-label" style="color:goldenrod"><strong>Date de la commande :</strong></label>
            <div class="col-md-10 pb-3">   
                <input type="text" style="background-color:black; color:goldenrod;" class="form-control" id="orderDate" name="orderDate" readonly value="<?= date("d-m-yy"); ?>">
            </div>
            </div>
            </div>
        <h4 class="text-center" style="color:goldenrod">Informations du client</h4>
        <br/>
        <div class="form-row">
            <div class="form-group col-md-6 pt-3 pb-3">
                <select id="customerNumber" name="customerNumber" style="background-color:black; color:goldenrod;" class="form-control" onchange="donneesClient(this)" required>
                    <option value="">- Sélectionnez un client -</option>
                    <?php foreach($customers as $customer): ?>
                        <option value="<?= intval($customer['customerNumber'])?>"><?= htmlspecialchars($customer['customerName']) ?></>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group col-md-6 pt-3 text-center">
                <a href="addCustomer.php" class="btn btn-dark bg-custom"><i class="fas fa-user-plus" style="background-color:black; color:goldenrod;"></i> Ajouter un nouveau client</a>
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">   
            <label for="address" style="color:goldenrod">Adresse :</label>   
            <input type="text" class="form-control" id="customerAddress" style="background-color:black; color:goldenrod;" disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="phone" style="color:goldenrod"> Ville :</label>
                <input type="text" class="form-control w-50" style="background-color:black; color:goldenrod;" id="customerCity" disabled >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="phone" style="color:goldenrod"> Pays :</label>
                <input type="text" class="form-control w-50" style="background-color:black; color:goldenrod;" id="customerCountry" disabled >
            </div>
            <div class="form-group col-md-6">
                <label for="phone" style="color:goldenrod"> Téléphone :</label>
                <input type="text" class="form-control w-50" style="background-color:black; color:goldenrod;" id="customerPhone" disabled >
            </div>
        </div>
        <br/><br/>
        <h4 style="color:goldenrod">Ajout de produits commandés<h4>

        
        <table id="tableProducts" style="background-color:black; color:goldenrod;" class="table table-responsive">
            <thead class="thead" style="background-color:black; color:goldenrod;">
                <tr>
                    <th scope="col">Produit</th>
                    <th scope="col">Description</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Montant</th>
                </tr>
            </thead>
            <tbody id="bodyTableProducts" style="color:goldenrod">
            </tbody>
        </table>
        <div class="text-right justify-content-end m-5">
            <button type="button" style="background-color:white; color:goldenrod;" class="btn btn-dark" onclick="ajouterProduitLigne()"><i class="fas fa-plus" style="color:goldenrod"></i> Ajouter </button>
            <button type="button" style="background-color:white; color:goldenrod;" class="btn btn-dark" onclick="supprimerProduitLigne()"><i class="fas fa-minus" style="color:goldenrod"></i> Supprimer</button>
        </div>

        <div class="form-row d-none">
            <div class="col-md-5 order-2 order-md-1">
                <div class="form-group">
                    <label for="comments">Commentaires :</label>
                    <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="form-row order-1 order-md-2">
                    <div class="form-group col-md-4">   
                        <label for="total" style="color:goldenrod">Total :  </label>
                        <div>   
                            <input type="number" style="background-color:black; color:goldenrod;" class="form-control" id="total" name="total" readonly>
                        </div>
                    </div>
                    <div class="form-group col-md-4 ">   
                        <label for="tva" style="color:goldenrod">T.V.A ( 20% ) :  </label>
                        <div>   
                            <input type="number" style="background-color:black; color:goldenrod;" class="form-control" id="tva" name="tva" readonly>
                        </div>
                    </div>
                    <div class="form-group col-md-4">   
                        <label for="totalTtc" style="color:goldenrod">Total T.T.C :  </label>
                        <div>   
                            <input type="number" style="background-color:black; color:goldenrod;" class="form-control" id="totalTtc" name="totalTtc" readonly>
                        </div>
            </div>
        </div>
        <br/>

        <div class="text-center">
            <button type="submit" id="saveOrder" style="background-color:white; color:goldenrod;" class="btn btn-dark mb-5 mr-5" onclick="commande()"><i class="far fa-save" style="color:goldenrod"></i> Enregistrer</button>
            <button type="reset" style="background-color:white; color:goldenrod;" class="btn btn-dark mb-5 ml-5"><i class="fas fa-undo" style="color:goldenrod"></i> Reinitialiser</button>
        </div>
    </form>
    <div class="modal" id="reponseModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Commande enregistrée avec succès.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
            </div>
            </div>
        </div>
    </div>
</div>
<script src="js/commandes.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
