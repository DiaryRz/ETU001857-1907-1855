<?php 
    $IdObjet = $IdObj;
    $Liste = $Liste;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(count($Liste) > 0) { ?>
        <?php for($i = 0 ; $i < count($Liste) ; $i++) { ?>
            <p> 
                <?php echo $Liste[$i]['NomObjet'] ?>
                <a href="Proposer?IdObjet=<?php echo $IdObjet ?>&&IdEchange=<?php echo $Liste[$i]['IdObjet'] ?>">Valider</a>
            </p>
        <?php } ?>
    <?php }else{ ?>
        Aucune objet disponible
    <?php } ?>
    <p><a href="AfficherAccueil">Retour accueil</a></p>
    
</body>
</html>