<?php

include ('./db_conn.php');

$bname=$_POST['bname'];
$iname=$_POST['iname'];
$price=$_POST['price'];
$itemdesc=$_POST['itemdesc'];

//이미지 저장
$uploads_dir='../img/';
$upload_file=$uploads_dir.basename($_FILES['img']['name']);

if(move_uploaded_file($_FILES['img']['tmp_name'],$upload_file)){
    echo "<script>alert('데이터 삽입 성공');</script> <meta http-equiv='refresh' content='1;url=item_list.php'>";}
else{ echo "<script>alert('데이터 삽입 실패');</script>";} 


$sql="insert into item1(bname, iname, price, img, itemdesc) values('$bname', '$iname','$price','$upload_file' ,'$itemdesc')";

mysqli_query($conn,$sql);
mysqli_close($conn);
?>