<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial Part 2</title>
</head>
<style>
    .container{
        max-width: 80%;
        margin: auto;
        background-color: #e8c5c5;
        padding: 20px;
        font-family: Arial, sans-serif;
        box-sizing: border-box;
    }
</style>
<body>
    <div class="container">
        <h1>PHP Tutorial Part 2</h1>
        <p>Conditional Statements in PHP</p>
        <?php
            $age = 25;
            if ($age < 18) {
                echo "You are a minor.";
            } else if ($age >= 18 && $age < 65) {
                echo "You are an adult.";
            } else {
                echo "You are a senior citizen.";
            }
       ?>
       <p>Loops in PHP</p>
       <?php
            $a = 0;
            while ($a <= 10) {
                echo "<br>The value of a from the while loop is: ",  $a;
                $a++;
            }
            // for arrays
            $languages = array("Python", "JavaScript", "PHP", "Java", "C++");
            echo "<br>List of Programming Languages: ";
            echo count($languages);
            // Iterating Arrays for while loop
            $a = 0;
            while ($a < count($languages)) {
                echo "<br>The value of language is: ",  $languages[$a];
                $a++; 
            }
            // Iterating Arrays for do-while loop
            $a = 1000;  /* to demonstrate do-while runs at least once even if if the given 
                           conditions written in the while loop is not satisfied with
                           the  do-while value.
                           As we can see here that the value $a should be less than 10 but 
                           it prints the first condition ($a = 1000) even though it doesn't 
                           meet the while loop's condition  */
            do {
                echo "<br>The value of a from the do-while loop is: ",  $a;
                $a++;
            } while ($a < 10);
            // Iterating Arrays for  for-loop
            for ($a = 0; $a < 10; $a++) {
                echo "<br>The value of a from the for loop is: ", $a;
            }
            // foreach loop
            foreach ($languages as $values) {
                echo"<br>The value from foreach loop is: ", $values;
            }

       ?>
    </div>
</body>
</html>