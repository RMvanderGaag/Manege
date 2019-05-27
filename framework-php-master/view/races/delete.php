<div class="container">  
    <h3>Weet u zeker dat u <?php echo $race["naam"]; ?> wilt verwijderen?</h3>

    <a class="btn btn-primary" href="<?=URL?>races/destroyRace/<?php echo $race["id"]; ?>">verwijderen</a>
</div>