<hmtl>
<body>
<?php
$s = $_POST['eval'];
$len = strlen($s);
$result = 0;
if (strpos($s , '+'))
{
    $pos = strpos($s , '+');
    $num1 = substr($s , 0 , $pos);
    $num2 = substr($s , $pos+1 , $len - ($pos + 1));
    echo (int)$num1 + (int)($num2);
}
else if (strpos($s , '-'))
{
    $pos = strpos($s , '-');
    $num1 = substr($s , 0 , $pos);
    $num2 = substr($s , $pos+1 , $len - ($pos + 1));
    echo (int)$num1 - (int)$num2;
}
else if (strpos($s , '/'))
{
    $pos = strpos($s , '/');
    $num1 = substr($s , 0 , $pos);
    $num2 = substr($s , $pos+1 , $len - ($pos + 1));
    echo (int)$num1 / (int)$num2;
}
else if (strpos($s , '%'))
{
    $pos = strpos($s , '%');
    $num1 = substr($s , 0 , $pos);
    $num2 = substr($s , $pos+1 , $len - ($pos + 1));
    echo (int)$num1 % (int)$num2;
}
else if (strpos($s , '*'))
{
    $pos = strpos($s , '*');
    $num1 = substr($s , 0 , $pos);
    $num2 = substr($s , $pos+1 , $len - ($pos + 1));
    echo (int)$num1 * (int)$num2;
}
else
{
    echo "Please choose operation only from : '+' , '-' , '*' , '/' , '%' ";
}
?>
</body>
</html>