<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <?php
            for ($i=0; $i < count($proposit); $i++) { ?>
                <div class="image">
                    <p> <img src="<?php echo site_url('assets/live/'.$proposit[$i]['image'][0]['LienPhoto']); ?>" width="200px" heigth="150px"></p>
                    
                    <p>Description :<?php echo $proposit[$i]['Description']; ?></p>
                    <p>Prix : <?php echo $proposit[$i]['Prix']; ?></p>
                    <p><a href="<?php echo base_url('ControlProposition/Allproposition')?>">Voir Proposition</a></p>
                    <p><a href="AfficherAccueil">Retour accueil</a></p>
                </div>
            <?php 
            } 
        ?>

    </div>
</body>
</html>