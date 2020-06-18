<?php


include_once "./include/base.php";

echo "<pre>";
print_r($_POST);
echo "</pre>";
/**
 * 年份 ->year
 * 期數 ->period
 * 特別獎 ->num1
 * 特獎 ->num2
 * 頭奬 ->num3  可能有多筆
 * 增開六奬 ->num4  可能有多筆 ,而且只有三碼
 * 
 */
$table="award_number";

$year=$_POST['year'];
$period=$_POST['period'];

//儲存特別獎
if(!empty($_POST['num1'])){
$num1=$_POST['num1'];
$del="delete from `$table` where `year`='$year' && `period`='$period' && `type`='1' ";
    $resd=$pdo->exec($del);
}else{
    $num1=$_POST['num1'];
}
 $data=[
    
     "year"=>$year,
     "period"=>$period,
     "number"=>$num1,
     "type"=>1,
 ];

 save($table,$data);


if(!empty($_POST['num2'])){
$num2=$_POST['num2'];
$del="delete from `$table` where `year`='$year' && `period`='$period' && `type`='2' ";
$resd=$pdo->exec($del);
}else{
    $num2=$_POST['num2'];
}
$data=[
    
    "year"=>$year,
    "period"=>$period,
    "number"=>$num2,
    "type"=>2,
];
save($table,$data);


if(!empty($_POST['num3'])){
    $num3=$_POST['num3'];
    $del="delete from `$table` where `year`='$year' && `period`='$period' && `type`='3' ";
    $resd=$pdo->exec($del);
}else{   
$num3=$_POST['num3'];
} 
foreach($num3 as $num){
    $data=[
        
        "year"=>$year,
        "period"=>$period,
        "number"=>$num,
        "type"=>3,
    ];  
    save($table,$data);
}


if(!empty($_POST['num4'])){
    $num4=$_POST['num4'];
    $del="delete from `$table` where `year`='$year' && `period`='$period' && `type`='4' ";
    $resd=$pdo->exec($del);
}else{
$num4=$_POST['num4'];
}
foreach($num4 as $num){
    $data=[
        
        "year"=>$year,
        "period"=>$period,
        "number"=>$num,
        "type"=>4,
    ];  
    save($table,$data);
}

to("query.php?period=$period");

?>