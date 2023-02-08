<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="modifier_objet" method="get">
        <p>nom <input type="text" name="nom"  value="<?php echo $information_objet[0]['NomObjet'];?>"> </p> 
        <p> description <input type="text" name="description" value="<?php echo $information_objet[0]['Description']; ?>" > </p> 
        <p> prix <input type="text" name="prix"  value="<?php echo $information_objet[0]['Prix'];  ?>"> </p> 
        <p> categorie <select name="categorie" >
            <option value="">selectionner </option>
            <?php for($i=0 ; $i<count($les_categories) ; $i++) {
                if($les_categories[$i]['IdCategorie']== $information_objet[0]['IdCategorie']) { ?>
                    <option value="<?php echo $les_categories[$i]['IdCategorie'];  ?>" selected><?php echo $les_categories[$i]['NomCategorie']  ?></option>
            <?php }  else{ ?>
                    <option value="<?php echo $les_categories[$i]['IdCategorie'];   ?>"><?php echo $les_categories[$i]['NomCategorie'];  ?></option>
            <?php } } ?>
            
        </select></p> 
        <p> <input type="hidden" name="idObjet" value="<?php  echo $idObjet; ?>"> </p>
        <p> <input type="submit" value="modifier"></p>
        <p><a href="AfficherAccueil">Retour accueil</a></p>
    
    </form>
    
</body>
</html>