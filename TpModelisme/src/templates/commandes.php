<br/>
<div class="container">
    <div class="titre p-2 mb-5 rounded">
        <h1 style="color:goldenrod"> Liste de bons de commande</h1>
    </div>    

    <table id="listeCommandes"  class="table table-responsive-lg table-striped table-bordered table-sm" style="color:goldenrod" cellspacing="0">
        <thead class="thead-dark">
            <tr>
            <th scope="col" style="color:goldenrod">Commande</th>
            <th scope="col" style="color:goldenrod">Date de la commande</th>
            <th scope="col" style="color:goldenrod">Date de livraison</th>
            <th scope="col" style="color:goldenrod">Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($orders as $order): ?>
                <tr>
                    <td scope=row style="color:goldenrod"> <a style="color:goldenrod" href="order-form.php?orderNumber=<?= $order['orderNumber'] ?>"><?= $order['orderNumber'] ?></a></td>
                    <td style="color:goldenrod"><?= $order['orderDate'] ?></td>
                    <td style="color:goldenrod"><?= $order['shippedDate'] ?></td>
                    <td style="color:goldenrod"><?= $order['status'] ?></td>
                </tr>
            <?php endforeach ?>    
        </tbody>
    </table>
    <br/>

</div>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
   $('#listeCommandes').DataTable({
        "pagingType": "full_numbers"
    });
    $('.dataTables_length').addClass('bs-select');
});
 </script>
