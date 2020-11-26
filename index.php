<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php

    // arithmetic operator
    $var1 = 5;
    $var2 = 10;

    echo "The sum of two vars is ";
    echo $var1 + $var2;
    echo "<br>";
    echo " Hello World";
    echo "<br>";

    // assignment operator
    $newVar = $var1;
    echo $newVar;
    echo "<br>";
    $newVar *= 2;
    echo $newVar;
    echo "<br>";
    echo "<br>";
    

    // comparision operator
    // echo var_dump(1<=7);
    $var3 = 500;
    $var4 = 499;

    if($var3==$var4){
        echo "both are equal";
    }elseif($var3<=$var4){
        echo "var3 is smaller";
    }else{
        echo "something went wrong";
    }
?>
</body>
</html>