<div class="container">  
    <h3>Weet u zeker dat u <?php echo $customer["naam"]; ?> wilt verwijderen?</h3>

    <a class="btn btn-primary" href="<?=URL?>customers/destroy/<?php echo $customer["id"]; ?>">verwijderen</a>
</div>