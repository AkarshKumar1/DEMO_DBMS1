<?php
     $str = "First String Project";
     echo "The given string is: ", $str;
     $lenn = strlen($str);
     echo "<br>The length of the string is: ", $lenn;
     $word = str_word_count($str);
     echo"<br>The number of words in the string is: ", $word;
     $reverse = strrev($str);
     echo "<br>The reversed string is: ", $reverse;
     $search = strpos($str, "Project");
     echo "<br>The position of the word 'Project' in the string is: ", $search;
     $replace = str_replace("First", "Second", $str);
     echo "<br>The replaced string is: ", $replace;
?>