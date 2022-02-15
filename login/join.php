<?php

include ('./db_conn.php');

$id=$_POST["id"];
$pass=$_POST["pass1"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
 

$sql="insert into user(id, pass, name,phone, email) values('$id', '$pass','$name','$phone','$email')";

echo "<script>alert('가입을 축하합니다.');</script>";

mysqli_query($conn,$sql);
mysqli_close($conn);
?>
<meta http-equiv="refresh" content="1;url=login.html">