<div class="container">
    <form action="<?=URL?>horses/updateHorse/<?php echo $horse['id'] ?>" method="post">
        <div class="form-group">
            <label class="lead" for="">Naam</label>
            <input name="horseName" class="form-control" type="text" required value="<?php echo $horse["naam"]; ?>">
        </div>
        <div class="form-group">
            <label class="lead" for="">Leeftijd</label>
            <input name="horseAge" class="form-control" type="number" required value="<?php echo $horse["leeftijd"]; ?>">
        </div>
        <div class="form-group">
           <label class="lead" for="">Ras</label>
           <select class="form-control" name="horseRace" required>
           <?php foreach(getAllRaces() as $race){ ?>
                <option value="<?php echo $race['id']; ?>" <?php if($race["id"] === $horse["race_id"]){ echo "selected";} ?>><?php echo $race["naam"]; ?></option>
           <?php } ?>
           </select>
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Update">
    </form>
</div>