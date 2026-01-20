<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    .container{
        max-width: 80%;
        margin: auto;
        background-color: #54a1e0;
        padding: 20px;
        font-family: Arial, sans-serif;
        box-sizing: border-box;
    }
</style>
<body>
    <div class="container">
        This is my first PHP file.
        <?php
            echo "<br>Hello, World!";
            $variable1 = 50;
            $variable2 = 20;
            
            //PHP Operators
            echo"<h1>PHP Operators</h1>";
            // Arithmetic Operators
            echo "<br><h2>Arithmetic Operations</h2>";
            echo"<br>The value of variable1 + variable2 is : ";
            echo $variable1 + $variable2;
            echo"<br>The value of variable1 - variable2 is : ";
            echo $variable1 - $variable2;
            echo"<br>The value of variable1 * variable2 is : ";
            echo $variable1 * $variable2;
            echo"<br>The value of variable1 / variable2 is : ";
            echo $variable1 / $variable2;

            // Assignment Operators
            echo "<br><h2>Assignment Operators</h2>";
            $newVar = $variable1;
            $newVar += 10; // Equivalent to $newVar = $newVar + 10
            echo"<br>The value of newVar is : ";
            echo $newVar;
            $newVar1 = $variable1;
            $newVar1 -= 10; // Equivalent to $newVar1 = $newVar1 - 10
            echo"<br>The value of newVar1 is : ";
            echo $newVar1;
            $newVar2 = $variable1;
            $newVar2 *= 10; // Equivalent to $newVar2 = $newVar2 * 10
            echo"<br>The value of newVar2 is : ";
            echo $newVar2;
            $newVar3 = $variable1;
            $newVar3 /= 10; // Equivalent to $newVar3 = $newVar3 / 10
            echo"<br>The value of newVar3 is : ";
            echo $newVar3;

            // Comparison Operators
            echo "<br><h2>Comparison Operators</h2>";
            echo"<br>The value of variable1 == variable2 is : ";
            echo var_dump($variable1 == $variable2);
            echo"<br>The value of variable1 != variable2 is : ";
            echo var_dump($variable1 != $variable2);
            echo"<br>The value of variable1 >= variable2 is : ";
            echo var_dump($variable1 >= $variable2);
            echo"<br>The value of variable1 <= variable2 is : ";
            echo var_dump($variable1 <= $variable2);

            // Increment/Decrement Operators
            echo "<br><h2>Increment/Decrement Operators</h2>";
            // $variable1++;
            // $variable1--;
            // ++$variable1;
            // --$variable1;
            echo $variable1++;
            echo"<br>The value of variable1++ : ";
            echo $variable1;
            echo "<br>" . $variable1-- ;
            echo"<br>The value of variable1-- : ";
            echo $variable1;
            echo "<br>" . ++$variable1;
            echo"<br>The value of ++variable1 : ";
            echo $variable1;
            echo "<br>" . --$variable1;
            echo"<br>The value of --variable1 : ";
            echo $variable1;

            // Logical Operators
            /* AND -> && 
               OR -> || 
               Xor -> xor
               NOT -> ! 
            */
            echo "<br><h2>Logical Operators</h2>";
            $myVar = (true && true);
            echo "<br>The value of (true && true) is : ";
            echo var_dump($myVar);
            $myVar1 = (true && false);
            echo "<br>The value of (true && false) is : ";
            echo var_dump($myVar1);
            $myVar2 = (true || true);
            echo "<br>The value of (true || true) is : ";
            echo var_dump($myVar2);
            $myVar3 = (true || false);
            echo "<br>The value of (true || false) is : ";
            echo var_dump($myVar3);
            $myVar4 = (true xor true);
            echo "<br>The value of (true xor true) is : ";
            echo var_dump($myVar4);
            $myVar5 = (true xor false);
            echo "<br>The value of (true xor false) is : ";
            echo var_dump($myVar5);
            $myVar6 = (!true);
            echo "<br>The value of (!true) is : ";
            echo var_dump($myVar6);
        ?>
        <?php
            define('PI', 3.14);
            //Data Types in PHP
            echo "<br><h1>Data Types in PHP</h1>";
            // String
            $stringVar = "This is a string";
            echo "<br>The value of stringVar is : ";
            echo $stringVar;
            echo "<br>The data type of stringVar is : ";
            echo gettype($stringVar);
            // Integer
            $intVar = 42;
            echo "<br>The value of intVar is : ";
            echo $intVar;
            echo "<br>The data type of intVar is : ";
            echo gettype($intVar);
            // Float
            $floatVar = 3.14;
            echo "<br>The value of floatVar is : ";
            echo $floatVar;
            echo "<br>The data type of floatVar is : ";
            echo gettype($floatVar);
            // Boolean
            $boolVar = true;
            echo "<br>The value of boolVar is : ";
            echo var_dump($boolVar);
            echo "<br>The data type of boolVar is : ";
            echo gettype($boolVar);
            // Array
            $arrayVar = array("Apple", "Banana", "Cherry");
            echo "<br>The value of arrayVar is : ";
            print_r($arrayVar);
            echo "<br>The data type of arrayVar is : ";
            echo gettype($arrayVar);
            echo "<br>The length of arrayVar is : ";
            echo count($arrayVar);
            
            // Constant
            echo "<br>The value of constant PI * 3 is : ";
            echo PI * 3;
        ?>
    </div>
</body>
</html>