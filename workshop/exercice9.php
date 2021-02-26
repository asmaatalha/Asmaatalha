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
        $info = ["title" => "Booleans" , "due" => "22/6" , "assigned_to" => "Youssef" , "done" => true];
        echo "<ul>";
            foreach ($info as $key => $value){
               
                if ($key == "done" && $value) {
                    echo "<li>Done</li>" ;
                }
                elseif ($key == "done" && !$value){
                    echo "<li>Doing</li>" ;
                }
                else {
                    echo "<li> $key => $value </li>";
                }
            }
        echo "</ul>";
      
    ?>
</body>
</html>