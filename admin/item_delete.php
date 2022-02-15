<?php

include ("./db_conn.php");
$idx=$_GET["idx"];

$sql="delete from item1 where num=$idx";
mysqli_query($conn, $sql);
mysqli_close($conn);

echo "<script>alert('삭제 되었습니다');</script>"
?>

<meta http-equiv="refresh" content="1;url=item_list.php">