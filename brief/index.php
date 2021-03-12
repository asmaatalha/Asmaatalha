<?php
     include_once('connexion.php');
   
   
    $select = "SELECT * FROM comments";
    $var = mysqli_query($connx, $select);

     
    

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>"/> 
    <title>Document</title>
</head>
<body>
    <main>
        <div class="titleBar container">
            <h1>Welcome Asmaa</h1>
        </div>
        <div class="messages container">
            <?php
                foreach($var as $row):
            ?>
            <div class="message">
                <?php   
                    echo $row["coment_date"];
                    echo " / ";
                    echo $row["username"];
                    echo " : ";
                    echo $row["coment_mesag"];
                ?>
            </div>
            <?php
                endforeach
            ?>
        </div>
        <div class=" container">
            <?php
                if(isset($_GET['error'])){
                    echo $_GET['error'];
                }
            ?>
            <form class="comment" action="insert.php" method="post">
                <input type="text" id="utilisateur" name="username" placeholder="Enter the username">
                <input type="text" id="message" name="comentaire">
                <input type="submit" class="envoyer" name="Enter" value="Send">
            </form>
        </div>
    </main>
</body>
</html>