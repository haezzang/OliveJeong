<link rel="stylesheet" href="index.css?after">
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
           echo "<li class='menu1' ><a href='login/logout.php' class='a' >로그아웃</a></li>" ;
        }
?>
       
        <li class="menu1" ><a href="login/join.html" class="a1">회원가입</a></li>    
    </ul>
 

        
    <br>
          <div>
            <a href="../index.php"><img id="logo" src="../img/logo.png"></a>
          
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
        <li class="menu2"><a href="item1_add.php" class="a2">아이</a></li>
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