<div class="container">
    <form action="<?=URL?>customers/createNewCustomer" method="post">
        <div class="form-group">
            <label class="lead" for="">Naam</label>
            <input name="customerName" class="form-control" type="text" required>
        </div>
        <div class="form-group">
            <label class="lead" for="">Adres</label>
            <input name="customerAdres" class="form-control" type="text" required>
        </div>
        <div class="form-group">
           <label class="lead" for="">Postcode</label>
           <input name="customerZipcode" class="form-control" type="text" min="6" max="6" required>
        </div>
        <div class="form-group">
            <label class="lead" for="">Woonplaats</label>
            <input name="customerCity" class="form-control" type="text" required>
        </div>
        <div class="form-group">
            <label class="lead" for="">Telefoonnummer</label>
            <input name="customerPhonenumber" class="form-control" type="phonenumber" max="10" required>
        </div>
        <div class="form-group">
            <label class="lead" for="">email</label>
            <input name="customerEmail" class="form-control" type="email" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Toevoegen">
    </form>
</div>