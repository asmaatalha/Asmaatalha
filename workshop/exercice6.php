<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercice6.php" method="get">
        <input type="text"  name="nom" placeholder="name">
        <input type="number"  name="poids" placeholder="poids en kg" >
        <input type="number"  name="taille" placeholder="taille en cm">
        <input type="submit" value="entre">
    </form>
    <?php
        $name      =  $_GET["nom"];
        $poidsKg =  $_GET["poids"];
        $tailleCm =  $_GET["taille"];

        $taillem  = (int) $tailleCm / 100;
        $tailleC = $taillem * $taillem;
        $IMC = (int) $poidsKg / $tailleC;

        echo 'nom est '. $name . '<br>';
        echo 'IMC est'. $IMC ;

 
    
    ?>
</body>
</html>