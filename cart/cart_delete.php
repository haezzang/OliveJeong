<?php

include ("./db_conn.php");
$idx=$_GET["idx"];

$sql="delete from cart where num=$idx";
mysqli_query($conn, $sql);
mysqli_close($conn);


?>

<meta http-equiv="refresh" content="1;url=cart.php">