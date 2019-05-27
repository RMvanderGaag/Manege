<div class="container">
    <form action="<?=URL?>races/createNewRace" method="post">
        <div class="form-group">
            <label class="lead" for="">Rasnaam</label>
            <input name="raceName" class="form-control" type="text" required>
        </div>
        <div class="form-group">
            <label class="lead" for="">Paardhoogte(cm)</label>
            <input name="raceHeight" class="form-control" type="number" min="0" max="200" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Toevoegen">
    </form>
</div>