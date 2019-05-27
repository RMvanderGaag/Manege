<div class="container">  
    <table class="table">
        <thead>
            <tr>
                <th>Rasnaam</th>
                <th>Hoogte(cm)</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($races as $race){ ?>
                <tr>
                    <td><?php echo $race["naam"]; ?></td>
                    <td><?php echo $race["hoogte"]; ?></td>
                    <td><a class="btn" href="<?=URL?>races/editRace/<?php echo $race['id']; ?>"><i class="far fa-edit"></i></a></td>
                    <td><a class="btn" href="<?=URL?>races/deleteRace/<?php echo $race['id']; ?>"><i class="far fa-trash-alt"></i></a></td>
                </tr>
            <?php } ?>
            </tbody>
    </table>
</div>
<div class="text-center">
    <a class="btn text-primary" href="<?=URL?>races/inputNewRace">Ras toevoegen +</a>
</div>
    