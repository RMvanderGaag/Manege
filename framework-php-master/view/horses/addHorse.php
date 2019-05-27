<div class="container">
    <form action="<?=URL?>horses/createNewHorse" method="post">
        <div class="form-group">
            <label class="lead" for="">Naam</label>
            <input name="horseName" class="form-control" type="text" required>
        </div>
        <div class="form-group">
            <label class="lead" for="">Leeftijd</label>
            <input name="horseAge" class="form-control" type="number" required>
        </div>
        <div class="form-group">
           <label class="lead" for="">Ras</label>
           <select class="form-control" name="horseRace">
                <option disabled selected value> -- Selecteer een ras -- </option>
           <?php foreach(getAllRaces() as $race){ ?>
                <option value="<?php echo $race['id']; ?>"><?php echo $race["naam"]; ?></option>
           <?php } ?>
           </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Toevoegen">
    </form>
</div>