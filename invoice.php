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
<?php 
include "./include/header.php";
$pageheader= "INSTER AWARD NUMBER";
include "./layout/topbar.php"; 
?>

<form action="save_number.php" method="post">
<table class="text-white bg-dark table table-striped table-dark shadow-lg p-3 mb-5 rounded">


    <tr>
        <td>年月</td>
        <td>
        <select class="bg-dark text-white" name="year">
    <option value="108">108</option>
    <option value="109" selected="true">109</option>
    <option value="110">110</option>
</select>
            <select class="text-white bg-dark" name="period">
                <option value="1">第1期＜1/2月＞</option>
                <option value="2">第2期＜3/4月＞</option>
                <option value="3">第3期＜5/6月＞</option>
                <option value="4">第4期＜7/8月＞</option>
                <option value="5">第5期＜9/10月＞</option>
                <option value="6">第6期＜11/12月＞</option>
            </select>
            
        </td>
    </tr>
    <tr>
        <td>特別獎</td>
        <td>
        <input type="text" onkeyup="value=value.replace(/[^\d]/g,'') "
　　        onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
　　        name="num1" maxlength="8"><br>
        同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元</td>
    </tr>
    <tr>
        <td>特獎</td>
        <td>
        <input type="text" onkeyup="value=value.replace(/[^\d]/g,'') "
　　        onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
　　        name="num2" maxlength="8"><br>
        同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元</td>
        
    </tr>
    <tr>
        <td>頭獎</td>
        <td>
        <input type="text" onkeyup="value=value.replace(/[^\d]/g,'') "
　　        onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
　　        name="num3[]" maxlength="8"><br>
        <input type="text" onkeyup="value=value.replace(/[^\d]/g,'') "
　　        onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
　　        name="num3[]" maxlength="8"><br>
        <input type="text" onkeyup="value=value.replace(/[^\d]/g,'') "
　　        onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
　　        name="num3[]" maxlength="8"><br>
            同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元
        </td>
    </tr>
    <tr>
        <td>二獎</td>
        <td>同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元</td>
    </tr>
    <tr>
        <td>三獎</td>
        <td>同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元</td>
    </tr>
    <tr>
        <td>四獎</td>
        <td>同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元</td>
    </tr>
    <tr>
        <td>五獎</td>
        <td>同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元</td>
    </tr>
    <tr>
        <td>六獎</td>
        <td>同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元</td>
    </tr>
    <tr>
        <td>增開六獎</td>
        <td>
        <input type="text" onkeyup="value=value.replace(/[^\d]/g,'') "
　　     onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
　　     name="num4[]" maxlength="3"><br>
        <input type="text" onkeyup="value=value.replace(/[^\d]/g,'') "
　　     onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
　　     name="num4[]" maxlength="3"><br>
        <input type="text" onkeyup="value=value.replace(/[^\d]/g,'') "
　　     onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
　　     name="num4[]" maxlength="3"><br>
        </td>
    </tr>
</table>
<div>
<input class="text-white bg-dark" type="reset" value="重置">
<input class="text-white bg-dark" type="submit" value="送出">
</div>
</form>


</body>
</html>