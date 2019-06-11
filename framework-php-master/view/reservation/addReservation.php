<div class="container">
    <p class="mt-2 mb-1 lead" style="color: red;"><?php echo $error; ?></p>
    <form action="<?=URL?>reservation/createNewReservation" method="post">
        <div class="form-group">
            <label class="lead" for="">Naam</label>
            <select class="form-control" name="reservationName" id="" required>
                <option disabled selected value> -- Selecteer een klant -- </option>
            <?php foreach(getAllCustomers() as $customer){ ?>
                <option value="<?php echo $customer["id"]; ?>" <?php if($customer["id"] === $reservation["customer_id"]){ echo "selected";} ?>><?php echo $customer["naam"]; ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label class="lead" for="">Paardnaam</label>
            <select class="form-control" name="reservationHorse" id="" required>
                <option disabled selected value> -- Selecteer een paard -- </option>
            <?php foreach(getAllHorses() as $horse){ ?>
                <option value="<?php echo $horse["id"]; ?>" <?php if($horse["id"] === $reservation["horse_id"]){ echo "selected";} ?>><?php echo $horse["naam"]; ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
                <label for="">Ritten</label>
                <input type="number" class="form-control" name="reservationRide" max="10" value="<?php echo $reservation['ride'] ?>" required>
        </div>
        <div class="form-group">
            <label class="lead" for="">Startdatum en tijd</label>
            <input class="form-control" type="datetime-local" name="reservationStartTime" value="<?php echo $reservation['start_time'] ?>"  required>
        </div>
        <input type="submit" class="btn btn-primary" value="Toevoegen">
    </form>
</div>