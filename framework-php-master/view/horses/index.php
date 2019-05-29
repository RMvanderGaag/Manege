<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Leeftijd</th>
                <th>Ras</th>
                <th>Kan springen(>147.5)</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($horses as $horse){ ?>
            <tr>
                    <td><?php echo $horse["naam"]; ?></td>
                    <td><?php echo $horse["leeftijd"]; ?></td>
                    <td><?php echo getRace($horse["race_id"])["naam"]?></td>
                    <td><?php 
                    if((getRace($horse["race_id"])["hoogte"]) <= 147.5){
                        echo "Nee";
                    }else{
                        echo "Ja";
                    }
                    ?></td>
                    <td><a class="btn" href="<?=URL?>horses/editHorse/<?php echo $horse['id']; ?>"><i class="far fa-edit"></i></a></td>
                    <td><a class="btn" href="<?=URL?>horses/deleteHorse/<?php echo $horse['id']; ?>"><i class="far fa-trash-alt"></i></a></td>
                    
            </tr>
            <?php } ?>
            </tbody>
    </table>
</div>
<div class="text-center">
    <a class="btn text-primary" href="<?=URL?>horses/addHorse">Paard toevoegen +</a>
</div>
    