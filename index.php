<?php include_once "./include/base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include "./include/title.php" ;?> </title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include "./include/header.php";
$pageheader= "INSTER INVOICE";
include "./layout/topbar.php"; 

$year=date("Y")-1911;
$period=ceil(date("n")/2);
echo "現在是 " . $year . "年" . date("n") . "月 第 " . $period . " 期";
?>
<br>
<br>
<form action="save_invoice.php" method="post" >

<th scope="col">期別：</th>
<select class=" bg-dark" name="period" >
    <option value="1">1/2月</option>
    <option value="2" selected="true">3/4月</option>
    <option value="3" >5/6月</option>
    <option value="4">7/8月</option>
    <option value="5">9/10月</option>
    <option value="6">11/12月</option>
</select>

<br>
<th scope="col">年份：</th>
<select class="bg-dark text-white" name="year">
    <option value="108">108</option>
    <option value="109" selected="true">109</option>
    <option value="110">110</option>
</select>
<br>
<th scope="col">發票號碼：</th>
    <input  type="text" name="code" maxlength="2"> 
    <input onkeyup="value=value.replace(/[^\d]/g,'') "
　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
　　 name="number" maxlength="8">
    <br>
<th scope="col">花費：</th>
    <input type="number" name="expend" >
    <br>
    <br>
<input class="text-white bg-dark" type="reset" value="重置">
<input class="text-white bg-dark" type="submit" value="儲存">
    <br>
    </form>
    </div>
    </div>
    </div>
</div>


    <script src=".css/jquery-3.5.0.min.js"></script>
    <script src=".css/bootstrap.bundle.min.js"></script>
</body>
</html>