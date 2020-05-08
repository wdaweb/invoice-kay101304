<?php
include "./include/base.php";

$sql="insert into invoice (`period`,`year`,`code`,`number`,`expend`) values('".$_POST['period']."','".$_POST['year']."','".$_POST['code']."','".$_POST['number']."','".$_POST['expend']."')";

echo "period=".$_POST['period']."<br>";
echo "year=".$_POST['year']."<br>";
echo "code=".$_POST['code']."<br>";
echo "number=".$_POST['number']."<br>";
echo "expend=".$_POST['expend']."<br>";

$res=$pdo->exec($sql);

if($res==1){
header("location:list.php");
}else{
    header("location:invoice.php");
}

?>