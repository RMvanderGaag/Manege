<div class="container mt-3">  
    <h3>Weet u zeker dat u de reservering van <?php echo getCustomer($reservation["customer_id"])["naam"]; ?> wilt verwijderen?</h3>

    <a class="btn btn-primary" href="<?=URL?>reservation/destroyReservation/<?php echo $reservation["id"]; ?>">verwijderen</a>
</div>