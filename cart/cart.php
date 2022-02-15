<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>장바구니</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="item1_add.css">

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
    
    <ul id="menu1_ul"> 
        <li class="menu1"><a href="" class="a1">고객센터</a></li>
        <li class="menu1"><a href="" class="a1">매장안내</a></li>
        <li class="menu1"><a href="" class="a1">주문배송</a></li>
        <li class="menu1" ><a href=""class="a1">장바구니</a></li>
        <?php
         session_start(); //세션시작
        if(!isset( $_SESSION["id"]) || !isset($_SESSION['pass']) ){
           echo  "<li class='menu1' ><a href='../login/login.html' class='a1' >로그인</a></li>";
        }
        else{
           echo "<li class='menu1' ><a href='../login/logout.php' class='a1' >로그아웃</a></li>" ;
        }
?>
        <li class="menu1" ><a href="" class="a1">회원가입</a></li>    
    </ul>
    <br>

        
   
        
          <div>
            <a href="../index.php"><img id="logo" src="../img/logo.jpg"></a>
          
            <input type="text" name="" id="search">

            <div class="tip_div">
              <a href="#" class="tip">
                최근 본 상품<span style="font-size : 15px;"><br><br<br><br><br>최근 본 상품이 없습니다</span></a>
              <a href="#" class="tip" style="float: right;">
                관심매장 소식<span style="font-size : 15px;"><br><br>로그인하시면 자주가는 매장을<br>관심매장으로 설정 할 수있습니다<button id="tipId">로그인</button></span></a>
           
            </div>
    
          </div>
          <br>
        
        <!-- 목록 -->    
    <hr>
        <ul id="menu2_ul">
        <li class="menu2">
         <a href="#" class="tip2">
            카테고리<span><br>
              <p style="text-align: left; color: white; font-size: 20px;">
              기초화장품<br>
              더모 코스메틱<br>
              메이크업 네일<br>
              바디케어<br>
              헤어케어<br>
              향수/디퓨저<br>
              미용소품<br>
              남성<br>
              건강/위생용품<br>
              건강식품<br>
              일반식품<br>
              반려동물<br>
              베이비<br>
              리빙/홀
              <p>
            </span></a></li>
        <li class="menu2"><a href="item1_add.php" class="a2">오특</a></li>
        <li class="menu2"><a href="#" class="a2">신상</a></li>
        <li class="menu2"><a href="#" class="a2">베스트</a></li>
        <li class="menu2"><a href="#" class="a2">프리미엄관</a></li>
        <li class="menu2"><a href="#" class="a2">오늘드림</a></li>
        <li class="menu2"><a href="#" class="a2">세일</a></li>
        <li class="menu2"><a href="#" class="a2">기프트카드</a></li>
        <li class="menu2"><a href="#" class="a2">멤버십/쿠폰</a></li>
        <li class="menu2"><a href="#" class="a2">이벤트</a></li>
    </ul><br><br>
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

<div style="margin-top:800px;">

</div>
             <hr width = "100%" color = "blue" size = "3">
         
              <div class="foo_div">
                <table style="text-align: center;" >
                  <tr>
                    <td rowspan="2">
                      <p style="font-weight: bold; font-size: 20px;">고객센터<br>이용안내</p></td>
                    <td>온라인몰 고객센터<br><p style="color: yellowgreen; font-size: 30px; font-weight: bold;">1522-0082</p></td>
                    <td><p style="font-weight:bold; font-size: 13px;">고객센터 운영시간 [평일 09:00 - 18:00]</p></td>
                    <td rowspan="2"> <img id="foot" src="https://image.oliveyoung.co.kr/pc-static-root/image/main/img_mobile_app.png"></td>
                  </tr>
                  <tr>
                    <td>매장 고객센터<br><p  style="color: yellowgreen; font-size: 30px; font-weight: bold;">1577-4487</p></td>
                    <td><p style="font-size: 12px; color: rgb(168, 164, 164);">주말 및 공휴일은 1:1문의하기를 이용해주세요.<br>
                      업무가 시작되면 바로 처리해드립니다.</p> <br>
                      <div id=footbtndiv>
                        <Button id=footbtn>1:1문의하기</Button> <Button id=footbtn>자주하는 질문</Button> </div> </td>
                     
                  </tr>
             
                </table>
       
               </div>
               <br>
            <br>
      
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
          
            <footer>
      
            <br>
            <br>
              <div class="foo_div2">
                <table>
                    <td><p style="font-size:13px;">
                      씨제이올리브영 주식회사<br>
                      대표이사 : 구창근 | 사업자등록번호 : 809-81-01574<br>      
                      주소 : (04323) 서울특별시 용산구 한강대로 366, 6층(동자동, 트윈시티)<br>
                      호스팅사업자 : CJ 올리브네트웍스<br>                     
                      통신판매업신고번호 : 2019-서울용산-1428<br>             
                      이메일 : oliveweb@cj.net<br>
                    </p></td>
                    <td>
                      <p style="font-size:13px;">
                        이용약관법적고지<br>   
                        개인정보처리방침<br>   
                        청소년보호방침<br>   
                        영상정보처리기기운영/관리방침<br>   
                        이메일무단수집거부</p>
                 
                    </td>
                    <td>
                      <p style="font-weight: bold;">LG U+ 매매보호(에스크로) 서비스</p>
                      <p style="font-size:13px;">
                        고객님은 안전거래를 위해 모든거래 결제시<br>   
                        저희 쇼핑몰에서 가입한 LG U+ 전자 결제의<br>   
                        매매보호(에스크로) 서비스를 이용하실 수<br>   
                        있습니다.
                      </p>
                     
                    </td>
                  </tr>
            
                </table>  
               </div>
               <br>
    
            </footer>
   

</body>
</html>