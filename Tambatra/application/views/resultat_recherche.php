<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php for($i=0 ; $i<count($les_resultat) ; $i++){ ?>
    <div>
           <p> description : <?php echo $les_resultat[$i]['Description'] ?></p>
            <p>prix : <?php echo $les_resultat[$i]['Prix'] ?></p>
            <p>nom de l'objet : <?php echo $les_resultat[$i]['NomObjet'] ?></p>
            <?php  echo "assets/image/".$les_resultat[$i]['image'] ; ?>
            <p> image : <img src="  <?php echo base_url( "assets/image/".$les_resultat[$i]['image'] )?>" width="200" alt="Pas d'image"> </p>
       
    </div>
    <?php } ?>
    
</body>
</html>