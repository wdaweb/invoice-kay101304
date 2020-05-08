<?php include_once "./include/base.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include "./include/title.php" ;?> </title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include "./include/header.php"; ?>

<form action="save_invoice.php" method="post">
期別：
<select name="period" >
    <option value="1">1．2</option>
    <option value="2">3．4</option>
    <option value="3">5．6</option>
    <option value="4">7．8</option>
    <option value="5">9．10</option>
    <option value="6">11．12</option>
</select>
<br>
年份：
<select name="year">
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
</select>
<br>
獎號：
    <input type="text" name="code">
    <input type="text" name="number">
    <br>
花費：
    <input type="number" name="expend">
    <input type="submit" value="儲存">
    <br>
</form>
</body>
</html>