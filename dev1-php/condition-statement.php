<h1>If Statement</h1>
<?php

    
    // if( condition )
    // {
    //     //if-block
    //     //the code here runs if the condition evaluates to TRUE.
    // }

    if( FALSE )
    {
        echo "<p>I am printed because the condition is TRUE.</p>";
    }

    $num = 4000;

    if( $num > 1000)
    {
        echo "<p>$num is greater than 1000</p>";
    }
?>

<h1>Greatest Number</h1>
<?php
    $num1 = 10;
    $num2 = 15;
    $num3 = 100;

    if($num1 > $num2 && $num1>$num3)
    {
        echo "<p>$num1 is the largest value</p>";
    }

    if($num2>$num1 && $num2> $num3)
    {
        echo "<p>$num2 is the largest value</p>";
    }

    if($num3>$num1 && $num3>$num2)
    {
        echo "<p>$num3 is the largest value</p>";
    }
?>

<h1>if-else</h1>
<?php
    if( FALSE )
    {
        //if-block
        //runs the code if the condition is TRUE
        echo "<p>The condition is TRUE</p>";
    }
    else
    {
        //else-block
        //runs the code if the condition is FALSE
        echo "<p>The condition is FALSE</p>";
    }

    //determine if the number is odd or even

    $num = 23;

    if($num%2 == 1) //check if ODD
    {
        echo "<p>$num is ODD</p>";
    }
    else //if the condition is FALSE, then the number must be EVEN
    {
        echo "<p>$num is EVEN</p>";
    }

?>

<h1>if-elseif-else</h1>
<?php
    if( FALSE )
    {
        //if-block
        //runs the code if the condition is TRUE
        echo "<p>The condition for the if-block is TRUE</p>";
    }
    elseif( FALSE )
    {
        //elseif-block
        //runs the code if the condition is TRUE
        echo "<p>The condition for the elseif-block is TRUE</p>";
    }
    else
    {
        //else-block
        //runs the code if ALL of the conditions are FALSE
        echo "<p>all of the conditions are FALSE</p>";

    }

    //pH Level
    // 0-6 =>Acidic
    // 7 => Neutral
    // 8-14 =>Alkaline /Basic

    $pH_level = 30;

    if(0<$pH_level && $pH_level < 6) //check if the ph level is acidic
    {
        echo "<p>$pH_level is acidic.</p>";
    }
    elseif($pH_level == 7) //check if the ph level is neutral
    {
        echo "<p>$pH_level is neutral.</p>";
    }
    elseif(8<$pH_level && $pH_level<= 14) //check if ph level is alkaline/basic
    {
        echo "<p>$pH_level is alkaline/basic.</p>";
    }
    else
    {
        echo "<p>$pH_level is INVALID.</p>";
    }
?>