<html>
<body>
<?php
$uname = $_POST['uname'];
$age = $_POST["age"];
if($age < 18)
{
echo "Hello ".$uname.".<font color = red size = 5> you are not authorised to visit this site </font>";
}
else
{
echo "Hello ".$uname."<font color = green size = 5>Welcome to this site </font>";
}
?>
</body>
</html>