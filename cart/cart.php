<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>장바구니</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="../index.css?after">
    <link rel="stylesheet" href="item1_add.css?after">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>



</head>
<br>
<body>
    
<?php
            include ("../header.php");
            ?><br><br>
<hr style="margin:-10px;">




<div class="back1">

           
<br>
        <h1>
            장바구니
        </h1>
      
        <div class="back2" style=' float : left;' >
        
        <div style="margin-left:10px;">
        
        <p style="font-size:30px; margin-top :10px"><?php echo $_SESSION['id']?> 님 안녕하세요</p>
        <hr style="margin-bottom:10px;">
        </div>
       
<div class="list">
<table class="table">
  <tr>
    <th scope="col">사진</th>
    <th scope="col">상품명</th>
    <th scope="col">가격</th>
    <th scope="col">갯수</th>
    <th scope="col">총가격</th>
    <th scope="col">비고</th>
  
  </tr>
<tr>

  

<?php

include ("./db_conn.php");
$id=$_SESSION['id'];
$sql=" select * from cart where id='$id'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
$sum=0;
for($i=0;$i<$num;$i++) {
    $re=mysqli_fetch_array($result);
    $sum+=$re['cnt']*$re['price'];
    ?>
 <td><img src="<?php echo $re['img']?>" onclick="imageView('<?php echo $re['img']?>')" id="img1" width="100px" height="100px">
  </td>
  <?php
    echo "<td><br><br>$re[bname]</td>";
    echo "<td><br><br>$re[price]원</td>";
    echo "<td><br><br>$re[cnt]개</td>";
   
    echo "<td><br><br>";
    echo $re['cnt']*$re['price'];
    echo "원</td>";
?>
<td><br><br><a href='cart_delete.php?idx=<?php echo $re['num']?>'>삭제</a></td>
</tr>

  <?php
  }
  ?>
  </table>
</form>
</div>


<div>

  <p style="color : red; font-weight : bold; font-size: 25px; text-align : right">총 결제 금액 배송비(2500원)+<?php echo $sum."원 = ".(2500+$sum)."원"; ?></p>
</div>


   
</div>
<?php
            include ("../footer.php");
            ?>

</body>
</html>