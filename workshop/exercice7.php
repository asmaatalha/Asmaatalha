<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <p>Les Tableaux et boucle foreach</p>
    <?php

       $langs =array("Html" , "Css" , "php" , "JavaScript");

        echo "<ul>";

            foreach ($langs as $i ) {

                echo "<li>" . $i . "</li>";
                
            }

        echo "</ul>"
    ?>
    </body>
</html>