
<?php  
echo  $idCategorie;
    // $idCategorie=null;
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
    <form action="modifier" get="get"> 
        <input type="hidden" name="idCategorie" value="<?php echo $idCategorie ?>" >
        <p><input type="text" name="nouveau_nom_categorie" >  
        <input type="submit" value="modifier" ></p>  
        <p><a href="AfficherAccueil">Retour accueil</a></p>
    </form>
</body>
</html>