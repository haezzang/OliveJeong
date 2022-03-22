<?php
   $rowx=$_GET['rowx'];
   include ("./db_conn.php");
   
   $sql="select * from item where num=$rowx";

   ?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>상세정보</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="item_info.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">



</head>
<br>
<body>
<?php
            include ("../header.php");
            ?><br><br>
<hr style="margin:-10px;">





     <div class="login_back" style="float: left; ">
         <div class="login_part">
             <br>

             <?php
                $result=mysqli_query($conn,$sql);
                $num=mysqli_num_rows($result);
                for($i=0;$i<$num;$i++) {  
                  $re=mysqli_fetch_array($result);
                  echo " <img src=$re[img] class='userimg'>";
              }


?>
           
            <div class="info" ></div>
    
           
         </div>
     </div>
&nbsp;
     <div style="float: left; margin-left: 50px; width : 400px;">
      <br><br>



      <?php
    
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
            
            for($i=0;$i<$num;$i++) {  
                $re=mysqli_fetch_array($result);
                echo "<p style='color: rgb(20, 20, 20);'><b>$re[bname]</p>";
                echo "<p style='font-size: 30px;'>$re[iname]</p>";
                echo "<p style='font-size : 30px; color: rgb(255, 38, 0);'><b>$re[price]원</p>";
            }
                ?>

    




      <p><b>배송정보</p>
      <p><b>일반배송</b> | 2,500원 ( 20,000 원 이상 무료배송 ) <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        올리브영 배송 | 평균 3일 이내 배송</p>
      <p><b>오늘드림</b> |	2,500원 또는 5,000원</p>

      <hr>
      <p><b>결제혜택</p>
      <p>THE CJ 카드 추가 10%할인 카드혜택가 안내 <br>
        CJ ONE 포인트 최대 2% 적립 예상</p>

        <hr>

        <form action="../cart/cart_add.php?rowx=<?php echo $re['num']?>" method="post">
        <p><b>구매수량 <input type="number" name="cnt" class="buycount"><br></p>
        <button class="infobtn"id="cart">바로구매</button>
      <button  class='infobtn' id='buy' type='submit'>장바구니</button>
        </form>
    
        
          <hr>

    
     </div>
      

<br><br>
     <div style="margin-top: 600px; margin-left: 250px; height: 200px;"> 
      <p style="font-size: 30px;"><b>상세정보</p>


      <?php
   $result=mysqli_query($conn,$sql);
   $num=mysqli_num_rows($result);
   for($i=0;$i<$num;$i++) {  
    $re=mysqli_fetch_array($result);
    echo "<p style='font-size : 20px;'>$re[itemdesc]</p>";

}
      ?>

  </div>
       

  <?php
            include ("../footer.php");
            ?>

          

</body>
</html>