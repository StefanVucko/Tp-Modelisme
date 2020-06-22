<div class="container">
    <div class="titre p-2 my-2 rounded">
        <h1 style="color:goldenrod"> Enregistrement de clients</h1>
    </div> 
    <form name="formCustomer" method="POST" action="addCustomer.php" >
        <div class="form-group text-center">
            <label for="customerName" style="color:goldenrod" >Nom client :</label>
            <input type="texte" name="customerName" id="customerName" class="form-control">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6 text-center">
                <label for="contactLastName" style="color:goldenrod;">Nom contact :</label>
                <input type="texte" name="contactLastName" id="contactLastName" class="form-control">
            </div>
            <div class="form-group col-md-6 text-center">
                <label for="contactFirstName" style="color:goldenrod">Prénom contact :</label>
                <input type="texte" name="contactFirstName" id="contactFirstName" class="form-control">
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6 text-center ">
            <label for="phone" style="color:goldenrod">Téléphone :</label>
            <input type="texte" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group col-md-12 text-center">
            <label for="address1" style="color:goldenrod">Adresse 1 :</label>
            <input type="texte" name="address1" id="address1" class="form-control">
        </div>
        </div>
        <div class="form-group text-center">
            <label for="address2" style="color:goldenrod">Adresse 2:</label>
            <input type="texte" name="address2" id="address2" class="form-control">
        </div>

        <div class="form-row">
            <div class="form-group col-md-4 text-center">
                <label for="city" style="color:goldenrod">Ville :</label>
                <input type="texte" name="city" id="city" class="form-control">
            </div>
            <div class="form-group col-md-4 text-center">
                <label for="state" style="color:goldenrod">Departement :</label>
                <input type="texte" name="state" id="state" class="form-control">
            </div>
            <div class="form-group col-md-4 text-center">
                <label for="postalCode" style="color:goldenrod">Code postal :</label>
                <input type="number" name="postalCode" id="postalCode" class="form-control">
            </div>
        </div>


        <div class="form-row">
        <div class="form-group col-md-4 text-center">
                <label for="country" style="color:goldenrod">Pays :</label>
                <input type="texte" name="country" id="country" class="form-control">
        </div>
        <div class="form-group col-md-4 text-center">
                <label for="employee" style="color:goldenrod">Rep. des ventes</label>
                <select id="employee" name="employee" class="form-control">
                    <?php foreach($employees as $employee): ?>
                        <option value="<?= intval($employee['employeeNumber'])?>"><?= $employee['firstName']." ".$employee['lastName']?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group col-md-4 text-center">
                <label for="creditLimit" style="color:goldenrod">Limite de crédit :</label>
                <input type="number" name="creditLimit" id="creditLimit" class="form-control">
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-dark mb-5" style="color:goldenrod">Sauvegarder</button>
        </div>
    </form>
</div>