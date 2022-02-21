<?php

include ("./db_conn.php");
$idx = $_GET['idx']; 

$sql="select * from item1 where num=$idx";
$result=mysqli_query($conn,$sql);
$re = mysqli_fetch_row($result);



?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>상품 수정</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    

   <!--font-->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">





</head>

<body>
     
              <br><br>

              <div>         
            <form action="item_update.php?idx=<?php echo $re[0]?>" method="post" class="login_form" enctype="multipart/form-data">
              <br><br>
              <p class="login_title">상품 수정</p>
              <p class="login_desc">상품을 수정 해주세요</p>
              <input type="text" placeholder="브랜드" class="login_id" name="bname" value="<?php echo $re[1]?>"><br>
                <input type="text" placeholder="품명" class="login_id" name="iname" value="<?php echo $re[2]?>"><br>
                <input type="text" placeholder="상세정보" class="login_id" name="itemdesc" value="<?php echo $re[5]?>"><br>
                <input type="text" placeholder="가격"  class="login_pw"  name="price" value="<?php echo $re[3]?>"><br><br>
                <button type="submit"  class="login_btn">상품수정</button><br><br>
              

            </form>
         
              </div>
            
    

</body>
</html>