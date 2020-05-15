<!DOCTYPE html>
<html>
<head>
  <title>Variables</title>
</head>

<body>

<?php

/*
    
  |---> dot(.) is used for cancatation in variables.
    
  |---> comma(,) is used for separation in btween two arguments.
    
  |---> we can enclose php code in HTML tags by respective opening and closing tags in inverted comma.
    
  |---> we can use print statement for   displaying as well but two drawback of print() statement:
        1) can't use comma(,) operate.
        2) slower as compared to echo() statement.

    */

    print "<h1> Hello"." World </h1>";
    echo "<h2>Welcome"," to the World of PHP</h2>";

    $characterName = "John";
    $characterAge = 35;
    echo "There once was a man named $characterName.<br>";
    echo "He was $characterAge years old. <br>";
    echo "He really liked the name $characterName. <br>";
    echo "But didn't like being $characterAge. <br>";


    
  ?>


</body>
</html>