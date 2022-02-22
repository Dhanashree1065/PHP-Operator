<?php
    $a=62;
    $b=24;
    echo "a = $a<br>";
    echo "b = $b<br><br>";
    echo "1. Arithmetic Operator<br><br>";
    $c = $a+$b;
    echo "Addition Operation Result: $c<br>";
    $c = $a-$b;
    echo "Subtraction Operation Result: $c<br>";
    $c = $a*$b;
    echo "Multiplication Operation Result: $c<br>";
    $c = $a/$b;
    echo "Division Operation Result: $c<br>";
    $c = $a%$b;
    echo "Modulus Operation Result: $c<br>";

    echo "<br>2. Comparison Operator<br><br>";

    if($a==$b){
        echo "$a is equal to $b<br>";
    }else{
        echo "$a is not equal to $b<br>";
    }

    if($a>$b){
        echo "$a is greater than $b<br>";
    }else{
        echo "$a is not greater than $b<br>";
    }

    if($a<$b){
        echo "$a is less than $b<br>";
    }else{
        echo "$a is not less than $b<br>";
    }

    if($a!=$b){
        echo "$a is not equal to $b<br>";
    }else{
        echo "$a is equal to $b<br>";
    }

    if($a>=$b){
        echo "$a is either greater than or equal to $b<br>";
    }else{
        echo "$a is neither greater than nor equal t $b<br>";
    }

    if($a<=$b){
        echo "$a is either less than or equal to $b<br>";
    }else{
        echo "$a is neither greater than nor equal to $b<br>";
    }  

    echo "<br>3. Increment Operator<br><br>";
    echo "a = ".++$a."<br>";    //63        //Pre-Increment
    echo "a = ".$a++."<br>";    //63        //Post-Increment
    echo "a = ".$a."<br>";      //64        //New Value of a is 64

    echo "<br>4. Decrement Operator<br><br>";
    echo "a = ".--$a."<br>";    //63        //Pre-Decrement
    echo "a = ".$a--."<br>";    //63        //Post-Decrement
    echo "a = ".$a."<br>";      //62

    echo "<br>Interview Questions<br><br>";
    $x=2;
    echo "x = $x<br>";
    $c = ++$x + $x-- - $x++ - --$x;     
        //= 3  + 3    - 2    -   2 
        //= 6 - 2 - 2 
        //= 4 - 2 = 2
    echo "x = $c";



?>