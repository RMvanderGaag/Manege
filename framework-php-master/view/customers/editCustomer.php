<div class="container">
    <form action="<?=URL?>customers/updateCustomer/<?php echo $customer['id']; ?>" method="post">
        <div class="form-group">
            <label class="lead" for="">Naam</label>
            <input name="customerName" class="form-control" type="text" value="<?php echo $customer['naam']; ?>" required>
        </div>
        <div class="form-group">
            <label class="lead" for="">Adres</label>
            <input name="customerAdres" class="form-control" type="text" value="<?php echo $customer['adres']; ?>" required>
        </div>
        <div class="form-group">
           <label class="lead" for="">Postcode</label>
           <input name="customerZipcode" class="form-control" type="text" min="6" max="6" value="<?php echo $customer['postcode']; ?>" required>
        </div>
        <div class="form-group">
            <label class="lead" for="">Woonplaats</label>
            <input name="customerCity" class="form-control" type="text" value="<?php echo $customer['stad']; ?>" required>
        </div>
        <div class="form-group">
            <label class="lead" for="">Telefoonnummer</label>
            <input name="customerPhonenumber" class="form-control" type="phonenumber" value="<?php echo $customer['telefoon']; ?>" required>
        </div>
        <div class="form-group">
            <label class="lead" for="">Email</label>
            <input name="customerEmail" class="form-control" type="email" value="<?php echo $customer['email']; ?>" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Update">
    </form>
</div>