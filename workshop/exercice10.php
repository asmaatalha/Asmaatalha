<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            for ($i=1  ;  $i  <= 10  ;  $i++){ 
                if ($i != 4 && $i != 9){
                    echo $i ;
                    echo "   ";
                }
                
            }
            echo "<hr>";

            for ($i=1  ;  $i  <= 10  ;  $i ++) { 
                echo $i *6 ;
                echo "  ";
            }
            echo "<hr>";
            for ($i=1; $i <=100 ; $i++) { 
                if ($i%3 == 0 && $i%5 == 0) {
                    echo "fizzbuzz<br>";
                }
                elseif ($i%3 == 0){
                    echo "fizz<br>";
                }
                elseif ($i%5 == 0) {
                    echo "buzz<br>";
                }
                else {
                    echo "$i<br>";
                }
            }


        
        ?>
</body>
</html>