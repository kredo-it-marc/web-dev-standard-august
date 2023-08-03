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