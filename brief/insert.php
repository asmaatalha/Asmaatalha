<?php

    include_once('connexion.php');
    if (!empty($_POST["username"]) && !empty($_POST["Enter"]) && !empty($_POST["comentaire"])) {
        $name = $_POST['username'];
        $comment = $_POST['comentaire'];
        $insert_req ="INSERT INTO comments(username, coment_mesag) VALUES ('$name ','$comment')";
        $query = mysqli_query($connx, $insert_req);
        if (!$query) {
            echo "erreur" . mysqli_error($connx);
        }
        header("Location: index.php");
    }else {
        header("Location: index.php?error= merci de rentrer des valeurs");
    }
    

?>