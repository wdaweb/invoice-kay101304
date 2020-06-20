<?php
include "./include/base.php";

$table="invoice";
$id=$_GET['id'];

if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $del="delete from `$table` where `id`= '$id' ";
        $resd=$pdo->exec($del);
    }
    
    $data=[
    'period'=>$_POST['period'],
    'year'=>$_POST['year'],
    'code'=>$_POST['code'],
    'number'=>$_POST['number'],
    'expend'=>$_POST['expend'],
    ];
    $res=save($table,$data);

to("list.php");
 ?>