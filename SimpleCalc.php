<html>
<body>
<?php
$num1 = $_POST["fnum"];
$num2 = $_POST['snum'];
$op = $_POST['op'];
if($num1 == "" or $num2 == "")
{
    echo "Please enter two numbers.....";
}
else
{
    echo "First number is  : ".$num1."<br>";
    echo "Second number is : ".$num2."<br>";
    echo "Operation is     : ".$op."<br>";
    switch ($op) {
        case '+':
            echo $num1 + $num2;
            break;
        case '-':
            echo $num1 - $num2;
            break;
        case '*':
            echo $num1 * $num2;
            break;
        case '/':
            echo $num1 / $num2;
            break;
        case '%':
            echo $num1 % $num2;
    }
}
?>