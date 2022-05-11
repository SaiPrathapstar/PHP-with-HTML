<?php
$a = $_GET['val1'];
$b = $_GET['val2'];
$o = $_GET['op'];
$error = "";
if(isset($_GET['op']))
{
    if(is_numeric($a) && is_numeric($b))
    {
    switch($o)
    {
        case '+':
            $res = $a + $b;
            break;
        case '-':
            $res = $a - $b;
            break;
        case 'X':
            $res = $a * $b;
            break;
        case '/':
            $res = $a / $b;
            break;
        case '%':
            $res = $a % $b;
            break;
    }
    }
    else
    {
        $error = "Enter the number first!";
    }
}
?>
<html>
    <head>
        <title> Calculator </title>
</head>
<body>
    <h2>
        <?= $error?>
    </h2>
    <form action = "<?= $_SERVER['PHP_SELF']?>" method = "GET">
    <div>
        <label for = "val1">Enter first number   </label>  
        <input type = "number" name = "val1" id = "val1" value = "<?=$a?>">
    </div>
    <br>
    <div>
        <label for = "val2" > Enter second number </label>
        <input type = "number" name = "val2" id = "val2" value = "<?=$b?>">
    </div>
    <br>
    <div>
        <label for = "result" > Result </label>
        <input type = "number" id = "result" value = "<?= $res ?>" disabled>
    </div>
    <br>
    <div>
        <input type = "submit" name = "op" value = "+"/>  
        <input type = "submit" name = "op" value = "-"/>  
        <input type = "submit" name = "op" value = "X"/>  
        <input type = "submit" name = "op" value = "/"/>  
        <input type = "submit" name = "op" value = "%" />
    </div>
</form>
</body>
</html>