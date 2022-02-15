<?php
   session_start(); //세션시작

include ('./db_conn.php');

$id=$_POST["id"];
$pass=$_POST["pass"];

if($id=="admin" && $pass=="1111"){
    echo "<script>alert('관리자 로그인');</script>";
    echo "<script>location.href='../admin/admin.html'</script>";
        //세션설정
        $_SESSION["id"] = $id;
        $_SESSION["pass"] = $pass;
}





$sql="select * from user where id='$id'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);




if($sql){
for($i=0;$i<$num;$i++){
    $re=mysqli_fetch_array($result);
        if($pass==$re['pass']){
            echo "<script>alert('로그인 성공');</script>";
            echo "<script>location.href='../index.php'</script>";
            //세션설정
            $_SESSION["id"] = $id;
            $_SESSION["pass"] = $pass;
        
        }
        else{
            echo "<script>alert('가입되지 않는 계정이거나 비밀번호 또는 아이디가 틀렸습니다.');</script>";
            echo "<script>location.href='iogin.html'</script>";
        }
    }

}
echo "<script>alert('가입되지 않는 계정이거나 비밀번호 또는 아이디가 틀렸습니다.');</script>";
echo "<script>location.href='iogin.html'</script>";
  
   
mysqli_query($conn,$sql);
mysqli_close($conn);
?>

