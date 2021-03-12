<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Typing animation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
            if (isset($_GET["monnom"]) && isset($_GET["monprenom"]) ){
                echo '<h1 class="tapper">Bonjour, je m\'appelle ' .$_GET['monnom']. ' '.  $_GET['monprenom'] .'</h1>';
            }
            else {
                echo '<h1 class="tapper">Bonjour, je m\'appelle khadija lahmar </h1>';
            }
        ?>

        
            
    </div>
</body>
</html>
