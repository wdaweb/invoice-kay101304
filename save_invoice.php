<?php
include "./include/base.php";

$sql="insert into invoice (`period`,`year`,`code`,`number`,`expend`) values('".$_POST['period']."','".$_POST['year']."','".strtoupper($_POST['code'])."','".$_POST['number']."','".$_POST['expend']."')";

$res=$pdo->exec($sql);

to("list.php");

?>