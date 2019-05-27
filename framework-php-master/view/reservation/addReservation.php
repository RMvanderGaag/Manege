<div class="container">
    <form action="<?=URL?>reservation/createNewReservation" method="post">
        <div class="form-group">
            <label class="lead" for="">Naam</label>
            <select class="form-control" name="reservationName" id="" required>
                <option disabled selected value> -- Selecteer een klant -- </option>
            <?php foreach(getAllCustomers() as $customer){ ?>
                <option value="<?php echo $customer["id"]; ?>"><?php echo $customer["naam"]; ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label class="lead" for="">Paardnaam</label>
            <select class="form-control" name="reservationHorse" id="" required>
                <option disabled selected value> -- Selecteer een paard -- </option>
            <?php foreach(getAllHorses() as $horse){ ?>
                <option value="<?php echo $horse["id"]; ?>"><?php echo $horse["naam"]; ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label class="lead" for="">starttijd</label>
            <input class="form-control" type="time" name="reservationStartTime">
        </div>
        <input type="submit" class="btn btn-primary" value="Toevoegen">
    </form>
</div>