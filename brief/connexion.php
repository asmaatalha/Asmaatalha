<?php
    $connx = mysqli_connect('localhost', 'root', '', 'comentaires');
    if (!$connx) {
        echo "Erreur";
        die();
    }

    // $var = [
    //     "nom:" => "talha" , 
    //     "prenom:" => "asmaa" , 
    //     "age:" => 22
    // ];
    // echo "<ul>";
    // foreach ($var as $key => $value) {
    //     echo "<li>" . $key . ' ' . $value . "</li>";
    // }
    // echo "</ul>";
?>

