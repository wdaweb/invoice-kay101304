<?php include_once "include/base.php";

$id=$_GET['id'];

del("invoice",$id);

to("list.php");



?>