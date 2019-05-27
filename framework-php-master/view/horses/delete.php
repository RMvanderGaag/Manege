<div class="container">  
    <h3>Weet u zeker dat u <?php echo $horse["naam"]; ?> wilt verwijderen?</h3>

    <a class="btn btn-primary" href="<?=URL?>horses/destroyHorse/<?php echo $horse["id"]; ?>">verwijderen</a>
</div>