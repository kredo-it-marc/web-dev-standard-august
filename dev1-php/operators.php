<h1>Arithmetic Operators</h1>
<?php
    $num1 = 11;
    $num2 = 16.07;
    $num3 = 55.1;
    $num4 = 30;

    $sum = $num1 + $num2; //Addition
    $difference= $num4 - $num2; //Subtraction
    $product = $num3 * $num1; //Multiplication
    $quotient = $num4 / $num1; //Division
    $remainder = $num4 % $num1; //Modulo => returns the remainder

    echo "<p>The sum of $num1 and $num2 is $sum.</p>";
    echo "<p>The difference of $num4 and $num2 is $difference.</p>";
    echo "<p>The product of $num3 and $num1 is $product.</p>";
    echo "<p>The quotient of $num4 divided by $num1 is $quotient.</p>";
    echo "<p>The remainder of $num4 divided by $num1 is $remainder.</p>";
?>
<h1>Assignment Operator</h1>
<?php
    $num1 = 22;
    $num2 = 15;
    $num3 = 72;
    $num4 = 97;
    $num5 = 37;
    $num6 = 11.01;
    $num7 = 9.01;
    $num8 = 22.9;
    $num9 = 88.88;
    $num10 = 1.02;

    echo "<p>Initial Value:</p>";
    echo "<p>num1 = $num1</p>";
    echo "<p>num2 = $num2</p>";
    echo "<p>num3 = $num3</p>";
    echo "<p>num4 = $num4</p>";
    echo "<p>num5 = $num5</p>";

    $num1 += $num10; //addition assignment operator => $num1 = $num1 + $num10;
    $num2 -= $num9; //subtraction assignment operator => $num2 = $num2 - $num9;
    $num3 *= $num8; //multiplication assignment operator => $num3 = $num3 * $num8;
    $num4 /= $num7; //division assignment operator => $num4 = $num4/$num7;
    $num5 %= $num6; //modulo assignment operator => $num5 = $num5 % $num6;

    echo "<p>Final Value:</p>";
    echo "<p>num1 = $num1</p>";
    echo "<p>num2 = $num2</p>";
    echo "<p>num3 = $num3</p>";
    echo "<p>num4 = $num4</p>";
    echo "<p>num5 = $num5</p>";
?>

<h1>Increment (++)</h1>
<?php
    $x = 235;

    echo "<p>Initial Value: $x</p>";
    echo "<p>pre-increment: ".++$x."</p>"; //Pre-increment => add 1 to the value first, then display the updated value. OUTPUT: 236
    echo "<p>post-increment: ".$x++."</p>"; //post-increment => displays the current value first, then add 1 to the value. OUTPUT: 236
    echo "<p>Final Value: $x</p>"; //OUTPUT: 237
?>

<h1>Decrement (--)</h1>
<?php
    $y = 774;

    echo "<p>Initial value: $y</p>";
    echo "<p>pre-decrement: ".--$y."</p>"; //pre-decrement, subtract 1 first from the value then display. OUTPUT: 773;
    echo "<p>post-decrement: ".$y--."</p>"; //post-decrement, display the value first then subtract 1 from the value. OUTPUT: 773
    echo "<p>Final value: $y</p>"; //OUTPUT: 772
?>

<h1>Comparison Operator</h1>
<?php
    $a = 5;
    $b = 5.0;
    $c = 11;
    $d = 15;

    $equal = ($a == $b); //TRUE
    $identical = ($a === $b); //FALSE
    $not_equal1 = ($b != $c); //TRUE
    $not_equal2 = ($a <> $d); //TRUE
    $greater_than = ($d > $c); //TRUE
    $less_than = ($a < $c); //TRUE
    $greater_than_or_equal = ($d >= $d); //TRUE
    $less_than_or_equal = ($b <= $b); //TRUE

    echo "<p>$a == $b is $equal</p>";
    echo "<p>$a === $b is $identical</p>";
    echo "<p>$b != $c is $not_equal1</p>";
    echo "<p>$a <> $d is $not_equal2</p>";
    echo "<p>$d > $c is $greater_than</p>";
    echo "<p>$a < $c is $less_than</p>";
    echo "<p>$d >= $d is $greater_than_or_equal</p>";
    echo "<p>$b <= $b is $less_than_or_equal</p>";
?>
<h1>Logical Operators</h1>
<?php

    $and = TRUE && TRUE; //TRUE
    $or = TRUE || FALSE; //TRUE
    $not = !FALSE; //TRUE

    echo "<p>TRUE && TRUE is $and</p>";
    echo "<p>TRUE || FALSE is $or</p>";
    echo "<p>!FALSE is $not</p>";
?>