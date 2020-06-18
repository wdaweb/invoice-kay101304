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

<?php 
include "./include/header.php";
$pageheader= "INVOICE LIST";
include "./layout/topbar.php"; 
$period=ceil(date("n")/2);

if(isset($_GET['period'])){
    $period=$_GET['period'];
}

$year=date("Y")-1911;
?>

<div class="containe">

<!-- <div class="card-header card text-white bg-dark mb-3">INVOICE LIST</div> -->
<thead>
<ul class="nav">
<li><a href="list.php?year=<?=$year=$year;?>"><?echo $year;?> Invoice list</a></li>
</ul>

<nav class="navbar navbar-dark bg-dark justify-content-center">
  <ul class="pagination pagination-sm">
  <li class="page-item"><a class="page-link" href="list.php?period=1" style="background:#343a40">第1期(1/2月)</a></li>
    <li class="page-item active"><a class="page-link" href="list.php?period=2" style="background:#343a40">第2期(3/4月)</a></li>
    <li class="page-item"><a class="page-link" href="list.php?period=3" style="background:#343a40">第3期(5/6月)</a></li>
    <li class="page-item"><a class="page-link" href="list.php?period=4" style="background:#343a40">第4期(7/8月)</a></li>
    <li class="page-item"><a class="page-link" href="list.php?period=5" style="background:#343a40">第5期(9/10月)</a></li>
    <li class="page-item"><a class="page-link" href="list.php?period=6" style="background:#343a40">第6期(11/12月)</a></li>
  </ul>
</nav>


<?php
$period=$period-1;
if(!empty($_GET['year'])){
    $rows=all('invoice',['year'=>$year]);
}else{
$rows=all('invoice',['period'=>$period]);
}
?>
<table class="table table-striped table-dark shadow-lg p-3 mb-5 rounded">
    <tr>
      <th scope="col">#</th>
      <th scope="col">期數</th>
      <th scope="col">年份</th>
      <th scope="col">英文流水號</th>
      <th scope="col">發票號碼</th>
      <th scope="col">花費</th>
      <th scope="col">操作</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($rows as $row){
        echo "<tr>";
        echo "    <th scope='row'>".$row['id']."</th>";
        echo "    <td>".$row['period']."</td>";
        echo "    <td>".$row['year']."</td>";
        echo "    <td>".$row['code']."</td>";
        echo "    <td>".$row['number']."</td>";
        echo "    <td>".$row['expend']."</td>";
        echo "    <td>";
        echo "<a href='invoice.php?id=".$row['id']."'><button type='button' class='btn btn-outline-light'>編輯</button></a>";
        echo "<a href='list.php?id=".$row['id']."'><button type='button' class='btn btn-outline-light'>刪除</button></a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>
</div>
    <script src=".css/jquery-3.5.0.min.js"></script>
    <script src=".css/bootstrap.bundle.min.js"></script>
</body>
</html>