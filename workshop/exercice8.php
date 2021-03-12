<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1> Les Tableaux associatifs:</h1>
        <?php
        
       $informations1 = [
            "nom:" => "Asmaa",
            "prénom:" => "Talha",
            "age:" => 23,
            "sexe:" => "Femme",
            "ville et origine:" => "Youssofia"
        ];
            $informations1 +=  ["formation:" => "dev web"];
         echo "<ul>";
        foreach ($informations1 as $key => $information ){
            echo '<li>' .$key.' '. $information .   '</li>';
        }
        echo "</ul>";

        

    /*    $inf = [
            "T1" => [ "nom:" => "Asmaa", "prénom:" => "TALHA", "age:" => 23, "sexe:" => "Femme", "ville et origine:" => "Youssofia" ],
            "T2" => [ "nom:" => "Youssef" , "prénom:" => "BOUHALLA", "age:" => 20, "sexe:" => "Homme", "ville et origine:" => "Youssofia"],
            "T3" => [ "nom:" => "Douaa" , "prénom:" => "LARIF", "age:" => 20, "sexe:" => "Fomme", "ville et origine:" => "Youssofia"],
            "T4" => [ "nom:" => "Yassine" , "prénom:" => "???", "age:" => 20, "sexe:" => "Homme", "ville et origine:" => "Youssofia"],
            "T5" => [ "nom:" => "Mohammed" , "prénom:" => "ABBOUDI", "age:" => 20, "sexe:" => "Homme", "ville et origine:" => "Youssofia"]
            ];
        echo "<ul>";
                foreach ($inf as $key => $value) {
                    echo "<li style='list-style-type:none'> <h2>$key </h2></li>";
                    foreach ($value as $n => $iv) {
                        echo "<li> $n  $iv </li>";
                    }

                }
        echo "</ul>";*/
        ?>
</body>
</html>