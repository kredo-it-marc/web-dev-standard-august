<?php
    echo "Hello World";
    echo "<h1>Heading 1</h1>";
    echo "Tim","James";
    echo "<p>My name is". " John "."Smith</p>";

    print "Hello World";
    print "<h1>Heading 1</h1>";
    //print "Tim", "Aaron", "James";
    
    //inline comment
    
    /**
     * Multi-line comment
     * comment 1
     * comment 2
     */

     $first_name = "John";
     $last_name = "Smith";
     $age = 21;

     echo "<p>My name is $first_name $last_name. I am $age years old.</p>";
    
     $str = "I am a string."; //String
     $int = 11; // Integer
     $float_or_double = 16.09; //Float/Double
     $bool = TRUE; //BOOLEAN

     //var_dump(); displays the value and data type
     var_dump($str);
     echo "<br>";
     var_dump($int);
     echo "<br>";
     var_dump($float_or_double);
     echo "<br>";
     var_dump($bool);
     echo "<br>";

?>