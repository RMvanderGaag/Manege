<div class="container">
    <form action="<?=URL?>reservation/updateRes/<?php echo $reservation['id']; ?>" method="post">
        <div class="form-group">
            <label class="lead" for="">Naam</label>
            <select class="form-control" name="reservationName" id="" required>
            <?php foreach(getAllCustomers() as $customer){ ?>
                <option value="<?php echo $customer["id"]; ?>" <?php if($customer["id"] === $reservation["customer_id"]){ echo "selected";} ?>><?php echo $customer["naam"]; ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label class="lead" for="">Naam</label>
            <select class="form-control" name="reservationHorse" id="" required>
            <?php foreach(getAllHorses() as $horse){ ?>
                <option value="<?php echo $horse["id"]; ?> "  <?php if($horse["id"] === $reservation["horse_id"]){ echo "selected";} ?>><?php echo $horse["naam"]; ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label class="lead" for="">starttijd</label>
            <input class="form-control" type="time" name="reservationStartTime" value="<?php echo $reservation['start_time']; ?>">
        </div>
        <input type="submit" class="btn btn-primary" value="Update">
    </form>
</div>