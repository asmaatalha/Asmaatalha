 <!-- Premier code en PHP -->
 <?php 
    echo "Hello YouCoud<br>";
    ?>
    <!-- Assigner et utiliser des variables -->
    <?php
    $monNom = "Asmaa<br>";
    $monPrenom = "Talha<br>";
    $monAge = "23<br>";

    echo "$monNom";
    echo"$monPrenom";
    echo" $monAge";
    ?>
    <?php
    echo '$monNom<br>';
    echo '$monPrenom<br>';
    echo '$monAge<br>';
    ?>
   

    <?php
    $name = "Asmaa";
    $Heredoc = <<<text
    Hello $name! 
    This is a
    demo message
    with heredoc.<br>
    text;
    
    echo $Heredoc;
    ?>

    <?php
    $var=10;
     $Nowdoc= <<<'Sample'
    This is a nowdoc string and here we call the variable $var.
    But it we not take the value of the variable,
    And also Newlines and everything else is preserved.<br>
    Sample;

    echo $Nowdoc;
    ?>

    <!--  Conversions -->
    
   
   <?php
   
    $var1 = true;
    $var2 = var_dump(+$var1) . "<br>";
    echo $var2;
    $bool = 55;
    echo $bool  . "<br>";
    $convert = strval($bool);
    echo var_dump($convert) . "<br>";
    ?>
    <!-- PHP et HTML -->
   
    <?php

    $name1 = '';

    $name2 = null;

    echo 'checking $name1 : ';
    var_dump(isset($name1));

    echo '<br>';

    echo 'checking $name2: ';
    var_dump(isset($name2));

    echo '<br>';

    echo 'checking undeclared variable $name3: ';
    var_dump(isset($name3));

    ?>
        