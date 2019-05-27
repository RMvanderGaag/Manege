<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Adres</th>
                <th>Postcode</th>
                <th>Woonplaats</th>
                <th>telefoonnummer</th>
                <th>email</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($customers as $customer){ ?>
            <tr>
                <td><?php echo $customer["naam"]; ?></td>
                <td><?php echo $customer["adres"]; ?></td>
                <td><?php echo $customer["postcode"]; ?></td>
                <td><?php echo $customer["stad"]; ?></td>
                <td><?php echo $customer["telefoon"]; ?></td>
                <td><?php echo $customer["email"]; ?></td>
                <td><a class="btn" href="<?=URL?>customers/editCustomer/<?php echo $customer['id']; ?>"><i class="far fa-edit"></i></a></td>
                <td><a class="btn" href="<?=URL?>customers/deleteCustomer/<?php echo $customer['id']; ?>"><i class="far fa-trash-alt"></i></a></td>    
            </tr>
            <?php } ?>
            </tbody>
    </table>
</div>
<div class="text-center">
    <a class="btn text-primary" href="<?=URL?>customers/addCustomer">Klant toevoegen +</a>
</div>
    