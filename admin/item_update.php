<?php

$idx=$_GET["idx"];
$bname=$_POST['bname'];
$iname=$_POST['iname'];
$price=$_POST['price'];
$itemdesc=$_POST['itemdesc'];


include ("./db_conn.php");


$sql="update item1 set num='$idx', bname='$bname', iname='$iname', price='$price', itemdesc='$itemdesc' where num=$idx";
mysqli_query($conn, $sql);
mysqli_close($conn);


echo "<script>alert('수정 되었습니다');</script>"
?>

<meta http-equiv="refresh" content="1;url=item_list.php">