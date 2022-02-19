<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>올리브영</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="index.css?after">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
   <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>










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
           echo  "<li class='menu1' ><a href='login/login.html' class='a1' >로그인</a></li>";
        }
        else{
           echo "<li class='menu1' ><a href='login/logout.php' class='a' >로그아웃</a></li>" ;
        }
?>
       
        <li class="menu1" ><a href="login/join.html" class="a1">회원가입</a></li>    
    </ul>
    <br> 

        
    <br>
          <div>
            <a href="index.php"><img id="logo" src="img/logo.png"></a>
          
            <!-- 검색 -->
            <input type="text" name="" id="search" style="padding-left : 20px;">

            <div class="tip_div">
    
              <a href="" class="tip">
                | &nbsp 최근 본 상품<span><br><br<br><br><br>최근 본 상품이 없습니다</span></a>
              <a href="" class="tip" style="float: right;">
                | &nbsp  관심매장 소식<span><br><br>로그인하시면 자주가는 매장을<br>관심매장으로 설정 할 수있습니다<button id="tipId">로그인</button></span></a>
                <a href="" class="tip">
                 오늘드림<span><br><br<br><br><br>배송지를 등록하고 오늘드림으로<br>구매 가능한 상품을 확인 하세요!</span></a>
            </div>
    
          </div>
          <br>   <br>
        
        <!-- 목록 -->    
    <hr style="margin :-10px;">
    
    <ul class="menu2_ul" style="margin-top :25px; margin-left: 250px; " >
        <li class="menu2"><a href="item/item1_add.php" class="a2">아이</a></li>
        <li class="menu2"><a href="" class="a2">립</a></li>
        <li class="menu2"><a href="" class="a2">페이스</a></li>
        <li class="menu2"><a href="" class="a2">스킨케어</a></li>
        <li class="menu2"><a href="" class="a2">네일</a></li>
        <li class="menu2"><a href="" class="a2">팩/마스크</a></li>
        <li class="menu2"><a href="" class="a2">클렌징</a></li>
        <li class="menu2"><a href="" class="a2">바디/헤어</a></li>
        <li class="menu2"><a href="" class="a2">향수</a></li>
        <li class="menu2"><a href="" class="a2">화장소품</a></li>
        <li class="menu2"><a href="" class="a2">이벤트</a></li>
    </ul>

    <!-- 캐러셀 -->
    <?php
          include ("./carousel.php");
    ?>
   
   
   <!-- 배너광고 -->
      <br><br>
     <p style="margin-left:250px;">
      <img src="img/banner/b1.jpg"  style="width:500px">
      <img src="img/banner/b2.jpg" style="width:500px"></p>

      <br><br>


  

        <!-- 상품1 -->
        <iframe src="iframe/item1.html" title="내용" name="frame2" width="80%" height="500px"style="margin-left: 250px;"></iframe>
       
        <!-- Weekly Special -->
 
            <center><p style="font-weight: bold; font-size: 30px;">Weekly Special</p></center>
            <p style="padding-left: 300px;">
            <a href=""><img src="img/w1.jpg" width="40%"></a>
            <a href=""><img src="img/w2.jpg" width="40%"></p></a>
       
          <br><br>
     

      

          <center><p style="font-weight: bold; font-size: 25px;">BEST ITEM만 모았어요!</p></center>
     
     
            <br><br>
             


            <br><br>
            <center><p style="font-weight: bold; font-size: 25px;">주목해야 할 브랜드</p></center>


            <table class="table table-bordered"
            style="width: 960px; height: 50px; margin-left:300px; table-layout:fixed;">
            <tbody>
              <tr>
                <td class="brand"><a href="iframe/menu1.html" target="frame" class="a3" >아벤느</a></td>
                <td class="brand"><a href="iframe/menu2.html" target="frame" class="a3" >아비브</a></td>
                <td class="brand"><a href="iframe/menu3.html" target="frame" class="a3">투쿨포스쿨</a></td>
                <td class="brand"><a href="iframe/menu4.html" target="frame" class="a3">이세이미야케</a></td>
                <td class="brand"><a href="iframe/menu5.html" target="frame" class="a3">세리박스</a></td>
              </tr>
          <tbody>

          </table>
          <iframe src="iframe/menu1.html" title="내용" name="frame" width="80%" height="600px"style="margin-left: 300px;"></iframe>
        
          <br>
       


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