<?php
  
session_start(); //세션시작
   $rowx=$_GET['rowx'];
   $cnt=$_POST['cnt'];
   include ("./db_conn.php");

   $sql="select * from item1 where num=$rowx";
   $id=$_SESSION['id'];

$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
for($i=0;$i<$num;$i++) {  
  $re=mysqli_fetch_array($result);
  echo $re['img'];
    echo $re['iname'];
    echo $re['price'];
}
$sql="insert into cart(id, img, bname, price, cnt) values('$id', '$re[img]', '$re[iname]', '$re[price]','$cnt')";
mysqli_query($conn,$sql);
mysqli_close($conn);
   ?>
<meta http-equiv='refresh' content='1;url=cart.php'>