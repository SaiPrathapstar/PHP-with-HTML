<html>
<head>
<title> Choose List Cookies </title>
</head>
<body>
    <form action = "dispcookie.php" method = "POST">
    <input type = "submit" name = "submit" value = "List Cookies">
    </form>
    <?php
    setcookie("Name" , "Mantra");
    setcookie("Age","21");
    setcookie("Address","Delhi");
    ?>
</body>
</html>