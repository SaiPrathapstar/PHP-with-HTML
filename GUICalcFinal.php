<?php
$s = $_POST['eval'];
$len = strlen($s);
$result = 0;
if (strpos($s , '+'))
{
    $pos = strpos($s , '+');
    $num1 = substr($s , 0 , $pos);
    $num2 = substr($s , $pos+1 , $len - ($pos + 1));
    $result = (int)$num1 + (int)($num2);
}
else if (strpos($s , '-'))
{
    $pos = strpos($s , '-');
    $num1 = substr($s , 0 , $pos);
    $num2 = substr($s , $pos+1 , $len - ($pos + 1));
    $result = (int)$num1 - (int)$num2;
}
else if (strpos($s , '/'))
{
    $pos = strpos($s , '/');
    $num1 = substr($s , 0 , $pos);
    $num2 = substr($s , $pos+1 , $len - ($pos + 1));
    $result = (int)$num1 / (int)$num2;
}
else if (strpos($s , '%'))
{
    $pos = strpos($s , '%');
    $num1 = substr($s , 0 , $pos);
    $num2 = substr($s , $pos+1 , $len - ($pos + 1));
    $result = (int)$num1 % (int)$num2;
}
else if (strpos($s , '*'))
{
    $pos = strpos($s , '*');
    $num1 = substr($s , 0 , $pos);
    $num2 = substr($s , $pos+1 , $len - ($pos + 1));
    $result = (int)$num1 * (int)$num2;
}
else
{
    $result = "Please choose operation only from : '+' , '-' , '*' , '/' , '%' ";
}
?>
<html>
    <head>
        <title>GUI Calculator</title>
    </head>
    <form action = "<?= $_SERVER['PHP_SELF']?>" Name="calc" method = "post">
        <br> <br> <br> <br> <br> <br> <br> <br>
        <center>
        <input type="text" name = "eval" value="<?=$s?>"> </input>
        <br>
        <br>
        <input type="text" name="result" value="<?=$result?>" disabled> </input>
        </center>
        <br>
        <br>
        <table id="calc" align="center" border=2>
        <tr>
        </tr>
        <tr>
        <td><input id="btn" type=button value="0" OnClick="calc.eval.value+='0'"></td>
        <td><input id="btn" type=button value="1" OnClick="calc.eval.value+='1'"></td>
        <td><input id="btn" type=button value="2" OnClick="calc.eval.value+='2'"></td>
        <td><input id="btn" type=button value="+" OnClick="calc.eval.value+='+'"></td>
        </tr>
        <tr>
        <td><input id="btn" type=button value="3" OnClick="calc.eval.value+='3'"></td>
        <td><input id="btn" type=button value="4" OnClick="calc.eval.value+='4'"></td>
        <td><input id="btn" type=button value="5" OnClick="calc.eval.value+='5'"></td>
        <td><input id="btn" type=button value="-" OnClick="calc.eval.value+='-'"></td>
        </tr>
        <tr>
        <td><input id="btn" type=button value="6" OnClick="calc.eval.value+='6'"></td>
        <td><input id="btn" type=button value="7" OnClick="calc.eval.value+='7'"></td>
        <td><input id="btn" type=button value="8" OnClick="calc.eval.value+='8'"></td>
        <td><input id="btn" type=button value="x" OnClick="calc.eval.value+='*'"></td>
        </tr>
        <tr>
        <td><input id="btn" type=button value="9" OnClick="calc.eval.value+='9'"></td>
        <td><input id="btn" type=button value="/" OnClick="calc.eval.value+='/'"></td>
        <td><input type="button" value="C" onclick= "calc.eval.value=''" > </input> </td>
        <td><input id="btn" type="submit" value="="></td>
        </tr>
        </table>
        </form>
</html>