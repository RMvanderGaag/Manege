<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Paard naam</th>
                <th>Startdatum en tijd</th>
                <th>Ritten</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($reservations as $reservation){ ?>
                <tr>
                    <td><?php echo getCustomer($reservation["customer_id"])["naam"]; ?></td>
                    <td><?php echo getHorse($reservation["horse_id"])["naam"]; ?></td>
                    <td><?php echo $reservation["start_time"]; ?></td>
                    <td><?php echo $reservation["ride"]; ?></td>
                    <td><a class="btn" href="<?=URL?>reservation/editRes/<?php echo $reservation['id']; ?>"><i class="far fa-edit"></i></a></td>
                    <td><a class="btn" href="<?=URL?>reservation/deleteReservation/<?php echo $reservation['id']; ?>"><i class="far fa-trash-alt"></i></a></td>    
                </tr>
            <?php } ?>
            </tbody>
    </table>
</div>
<div class="text-center">
    <a class="btn text-primary" href="<?=URL?>reservation/addReservation">Reservering toevoegen +</a>
</div>
    