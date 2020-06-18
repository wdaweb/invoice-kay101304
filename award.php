<?php include_once "include/base.php";?>
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
<?php include "./include/header.php";?>   

<?php
$pageheader= "AWARD PAGE";
include "./layout/topbar.php"; 
if(empty($_GET)){
    echo "<br>"."請選擇要對獎的項目<a href='query.php'>各期獎號</a><br>";
    
    $period=ceil(date("n")/2);

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
    
    $num1=find('award_number',['period'=>$period,'year'=>$year,'type'=>1]); //單筆
    $num2=find('award_number',['period'=>$period,'year'=>$year,'type'=>2]);//單筆
    $num3=all('award_number',['period'=>$period,'year'=>$year,'type'=>3]);//多筆
    $num4=all('award_number',['period'=>$period,'year'=>$year,'type'=>4]);//多筆
    
    ?>
    <table class="table table-striped table-dark shadow-lg p-3 mb-5 rounded">
    
        <tr>
            <td>年月</td>
            <td><?=$year;?>年 <?=$monthStr[$period];?></td>
            <td></td>
        </tr>
        <tr>
            <td>特別獎</td>
            <td><?php
            if(!empty($num1['number'])){
                echo $num1['number'];
            };
            
            ?></td>
            <td><a href="award.php?aw=1&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        </tr>
        <tr>
            <td>特獎</td>
            <td><?php
            if(!empty($num2['number'])){
                echo $num2['number'];
            };
            
            ?></td>
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
            <td><a href="award.php?aw=9&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        </tr>
    </table>
<?
    exit();
}
?>
<?
$i=0;
$award_type=[
    1=>["特別獎",1,8],
    2=>["特獎",2,8],
    3=>["頭獎",3,8],
    4=>["二獎",3,7],
    5=>["三獎",3,6],
    6=>["四獎",3,5],
    7=>["五獎",3,4],
    8=>["六獎",3,3],
    9=>["增開六獎",4,3],
];
$aw=$_GET['aw'];
$year=$_GET['year'];
$period=$_GET['period'];
echo "獎別:".$award_type[$aw][0]."<br>";
echo "年份:".$year ."<br>";
echo "期別:".$period."<br>";

$award_nums=nums("award_number",[
    "year"=>$year,
    "period"=>$period,
    "type"=>$award_type[$aw][1]
]);

echo "獎號數量:".$award_nums;
$award_numbers=all("award_number",[
    "year"=>$year,
    "period"=>$period,
    "type"=>$award_type[$aw][1]
]) ;
echo "<br>";

echo "<br>"."<h5>對獎獎號</h5>";
$t_num=[];
foreach($award_numbers as $num){
    echo $num['number']."<br>";
    $t_num[]=$num['number'];
}
echo "<br>";
echo "<h5>該期中獎號碼</h5>";

$invoices=all("invoice",[
    "year"=>$year,
    "period"=>$period,]);

foreach ($invoices as $ins) {

    foreach($t_num as $tn){

        $len=$award_type[$aw][2];

        
        $start=8-$len;
        
        
        //針對增開六獎號特別處理
        if($aw!=9){
            $target_num=mb_substr($tn,$start,$len);
        }else{
            $target_num=$tn;
        }

        if(mb_substr($ins['number'],$start,$len) == $target_num ){
            $i=$i+1;
            echo "<span style='color:red;font-size:20px'>".$ins['number']."中獎了</span>";
            echo "<br>";
            }
        }
    }   
    echo "共計中獎筆數：". $i ."<br>"; 
    // print_r($invoices);

    // foreach($invoices as $awd){
    //     print_r($awd);
    // }
    if($i>0){
        foreach($invoices as $awd){
            if($awd['number']==$ins['number']){
                foreach($awd as $row){
                    $sql="insert into `reward_record` (`period`,`year`,`code`,`number`,`expend`) values ('".$awd['period']."','".$awd['year']."','".strtoupper($awd['code'])."','".$awd['number']."','".$awd['expend']."')";
                    }
                $res=$pdo->exec($sql);
            }
        }     
}
    ?>



</body>
</html>