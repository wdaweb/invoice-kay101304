<?php include_once "./include/base.php"; ?>
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
$year=date("Y")-1911;
$period=ceil(date("n")/2);

$period=$period-1;

if($period<1){
    $year-1;
    $period=6;
}
if($period>6){
    $year+1;
    $period=1;
}

$pageheader= "QUERY AWARD NUMBER PAGE";
include "./layout/topbar.php"; 
 
?>
選擇期別

<nav class="navbar navbar-dark bg-dark justify-content-center">
  <ul class="pagination pagination-sm">
  <li class="page-item"><a class="page-link" href="query.php?period=1" style="background:#343a40">第1期(1/2月)</a></li>
    <li class="page-item active"><a class="page-link" href="query.php?period=2" style="background:#343a40">第2期(3/4月)</a></li>
    <li class="page-item"><a class="page-link" href="query.php?period=3" style="background:#343a40">第3期(5/6月)</a></li>
    <li class="page-item"><a class="page-link" href="query.php?period=4" style="background:#343a40">第4期(7/8月)</a></li>
    <li class="page-item"><a class="page-link" href="query.php?period=5" style="background:#343a40">第5期(9/10月)</a></li>
    <li class="page-item"><a class="page-link" href="query.php?period=6" style="background:#343a40">第6期(11/12月)</a></li>
  </ul>
</nav>

<?php 



$monthStr=[
    '1'=>"1/2月",
    '2'=>"3/4月",
    '3'=>"5/6月",
    '4'=>"7/8月",
    '5'=>"9/10月",
    '6'=>"11/12月",
];

if(isset($_GET['period'])){
    $period=$_GET['period'];
}

$year=date("Y")-1911;

?>   

<body>

<div class="container">

<?php

$num1=find('award_number',['period'=>$period,'year'=>$year,'type'=>1]); //單筆
$num2=find('award_number',['period'=>$period,'year'=>$year,'type'=>2]);//單筆
$num3=all('award_number',['period'=>$period,'year'=>$year,'type'=>3]);//多筆
$num4=all('award_number',['period'=>$period,'year'=>$year,'type'=>4]);//多筆

?>

<form action="invoice.php?year=<?=$year;?>&period=<?=$period;?>" method="post">

<table class="invoice-table table table-striped table-dark shadow-lg p-3 mb-5 rounded ">
    <tr>
    <td>年月</td>
        <td><?=$year;?>年 <?=$monthStr[$period];?></td>
        <td><input type="submit" value="編輯" >
    </td>
    </tr>
    <tr>
        <td>特別獎</td>
        <td>
        <?php
        if(!empty($num1['number'])){
            echo $num1['number'];
        }
        ?>
        </td>
        <input type="hidden" name="num1['id']" value="">
        <td><a href="award.php?aw=1&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>特獎</td>
        <td>
        <?php
        if(!empty($num2['number'])){
            echo $num2['number'];
        };
        
        ?>
        </td>
        <input type="hidden" name="num2['id']" value="">
        <td><a href="award.php?aw=2&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>頭獎</td>
        <td>
            <?php
                foreach($num3 as $num){
                    echo $num['number'] . "<br>";
                }
            
            ?>

        </td>
        <input type="hidden" name="num3['id']" value="">
        <td><a href="award.php?aw=3&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>二獎</td>
        <td>同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元</td>
        <td><a href="award.php?aw=4&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>三獎</td>
        <td>同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元</td>
        <td><a href="award.php?aw=5&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>四獎</td>
        <td>同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元</td>
        <td><a href="award.php?aw=6&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>五獎</td>
        <td>同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元</td>
        <td><a href="award.php?aw=7&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>六獎</td>
        <td>同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元</td>
        <td><a href="award.php?aw=8&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>增開六獎</td>
        <td> 
        <?php
                foreach($num4 as $num){
                    echo $num['number'] . "<br>";
                }
            
            ?>
        </td>
        <input type="hidden" name="num4['id']" value="">
        <td><a href="award.php?aw=9&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
</table>
</form>
</div>
</div>
    <script src=".css/jquery-3.5.0.min.js"></script>
    <script src=".css/bootstrap.bundle.min.js"></script>
</body>

</html>