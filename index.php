<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>올리브영</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="index.css">
    
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
  <style> .carousel-inner > .carousel-item > img{ /* width: 640px; height: 720px; */ } </style>









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
           echo "<li class='menu1' ><a href='login/logout.php' class='a1' >로그아웃</a></li>" ;
        }
?>
       
        <li class="menu1" ><a href="login/join.html" class="a1">회원가입</a></li>    
    </ul>
    <br>

        
   
        
          <div>
            <a href="index.php"><img id="logo" src="img/logo.png"></a>
          
            <input type="text" name="" id="search" style="padding-left : 20px;">

            <div class="tip_div">
              <a href="login/login.html" class="tip">
                최근 본 상품<span><br><br<br><br><br>최근 본 상품이 없습니다</span></a>
              <a href="#" class="tip" style="float: right;">
                관심매장 소식<span><br><br>로그인하시면 자주가는 매장을<br>관심매장으로 설정 할 수있습니다<button id="tipId">로그인</button></span></a>
           
            </div>
    
          </div>
          <br>   <br>
        
        <!-- 목록 -->    
    <hr style="margin :-10px;">
    
    <ul class="menu2_ul" style="margin-top : 20px; margin-left : 200px;" >
        <li class="menu2"><a href="item/item1_add.php" class="a2">아이</a></li>
        <li class="menu2"><a href="#" class="a2">립</a></li>
        <li class="menu2"><a href="#" class="a2">페이스</a></li>
        <li class="menu2"><a href="#" class="a2">스킨케어</a></li>
        <li class="menu2"><a href="#" class="a2">네일</a></li>
        <li class="menu2"><a href="#" class="a2">팩/마스크</a></li>
        <li class="menu2"><a href="#" class="a2">클렌징</a></li>
        <li class="menu2"><a href="#" class="a2">바디/헤어</a></li>
        <li class="menu2"><a href="#" class="a2">향수</a></li>
        <li class="menu2"><a href="#" class="a2">화장소품</a></li>
        <li class="menu2"><a href="#" class="a2">이벤트</a></li>
    </ul>
    <br> 


    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" style="margin-top : 10px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 7"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="img/carousel/c4.jpg" class="d-block w-150" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000" >
      <img src="img/carousel/c2.jpg" class="d-block w-150" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carousel/c1.jpg" class="d-block w-150" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/carousel/c3.jpg" class="d-block w-150" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/carousel/c5.jpg" class="d-block w-150" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/carousel/c6.jpg" class="d-block w-150" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


          <br><br>



          
          <p style="padding-left: 150px;">
            <img src="https://image.oliveyoung.co.kr/uploads/images/display/90000010001/138/462471315307755589.jpg" alt="">
            <img src="https://image.oliveyoung.co.kr/uploads/images/display/90000010001/138/5150525810858867733.jpg" alt=""></p>

            <br><br><br>
            <center><p style="font-weight: bold; font-size: 30px;">Weekly Special</p></center>
            <p style="padding-left: 300px;">
            <a href=""><img src="img/w1.jpg" width="40%"></a>
            <a href=""><img src="img/w2.jpg" width="40%"></p></a>
       
          <br><br>
     

      

         

           <br><br>
            <center><p style="font-weight: bold; font-size: 30px;">인기상품만 모았어요!</p></center>
            <div class="card-group"  style="width:60rem; margin-left: 300px;"  >
              <div class="card">
                <img src="https://image.oliveyoung.co.kr/uploads/images/goods/550/10/0000/0014/A00000014828505ko.jpg?l=ko" class="card-img-top" alt="...">
                <div >
                  <p style="font-size: 15px">마녀공장 비피다 바이옴 앰플 토너 400ml+100ml 기획<p>
                  <p style="color: red; font-size: 22px; font-weight: bold;">  17,500원</p>
                </p>
                <center><span class="badge rounded-pill bg-blue">증정</span>
                  <span class="bg rounded-pill bg-red">세일</span>
                  <span class="bg rounded-pill bg-pink">오늘드림</span></center>
                </div>
              </div>
              <div class="card">
                <img src="https://image.oliveyoung.co.kr/uploads/images/goods/550/10/0000/0014/A00000014861011ko.jpg?l=ko" class="card-img-top" alt="...">
                <div>
                  <h6 style="font-size: 15px;">[NEW기획] 에스쁘아 프로테일러 비파우더 쿠션 기획세트 (본품+리필+선크림 20ml)</h6>
                  <p style="color: red; font-size: 20px; font-weight: bold;">23,200원</p>
                </p>
                <center><span class="badge rounded-pill bg-blue">증정</span>
                  <span class="bg rounded-pill bg-green">쿠폰</span>
                  <span class="bg rounded-pill bg-red">세일</span>
                  <span class="bg rounded-pill bg-pink">오늘드림</span></center>
                </div>
              </div>
              <div class="card">
                <img src="https://image.oliveyoung.co.kr/uploads/images/goods/400/10/0000/0015/A00000015199104ko.jpg?l=ko" class="card-img-top" alt="...">
                <div >
                  <h6 style="font-size: 15px;">닥터지 레드블레미쉬 클리어 수딩 크림 1+1 기획세트 (70ml+70ml)</h6>
                  <br>
                  <p style="color: red; font-size: 20px; font-weight: bold;">  28,800원</p>
                <center><span class="badge rounded-pill bg-blue">증정</span>
                  <span class="bg rounded-pill bg-green">쿠폰</span>
                  <span class="bg rounded-pill bg-red">세일</span></center>
                </div>
              </div>
              <div class="card">
                <img src="https://image.oliveyoung.co.kr/uploads/images/goods/550/10/0000/0015/A00000015079903ko.jpg?l=ko" class="card-img-top" alt="...">
                <div >
                  <h6 style="font-size: 15px;">바비 브라운 엑스트라 립 틴트 베어 라즈베리 1+1기획</h6>
                  <br>
                  <p style="color: red; font-size: 20px; font-weight: bold;">  43,000원
                  </p>
                  <center><span class="badge rounded-pill bg-blue">증정</span>
                    <span class="bg rounded-pill bg-pink">오늘드림</span></center>
                </div>
              </div>
            </div>
            
            <br><br>
          
            <div class="card-group"  style="width:60rem; margin-left: 300px;"  >
              <div class="card">
                <img src="https://image.oliveyoung.co.kr/uploads/images/goods/400/10/0000/0000/A00000000688302ko.jpg?l=ko" class="card-img-top" alt="...">
                <div >
                  <p style="font-size: 15px">CJ 이너비 아쿠아뱅크 56캡슐 (4주분)<p>
                  <p style="color: red; font-size: 20px; font-weight: bold;">  19,800원</p>
                </p>
                <center>
                  <span class="bg rounded-pill bg-red">세일</span><span class="bg rounded-pill bg-green">쿠폰</span></center>
                </div>
              </div>
              <div class="card">
                <img src="https://image.oliveyoung.co.kr/uploads/images/goods/550/10/0000/0013/A00000013225801ko.jpg?l=ko" class="card-img-top" alt="...">
                <div>
                  <h6 style="font-size: 15px;">뉴트리원라이프 루테인지아잔틴164 30캡슐 (1개월분)</h6>   <br>
                  <p style="color: red; font-size: 20px; font-weight: bold;">16,900원</p>
                </p>
                <center>
                  <span class="bg rounded-pill bg-green">쿠폰</span>
                  <span class="bg rounded-pill bg-red">세일</span>
                  <span class="bg rounded-pill bg-pink">오늘드림</span></center>
                </div>
              </div>
              <div class="card">
                <img src="https://image.oliveyoung.co.kr/uploads/images/goods/550/10/0000/0015/A00000015038301ko.jpg?l=ko" class="card-img-top" alt="...">
                <div >
                  <h6 style="font-size: 15px;">니들리 데일리 토너 패드 60매 기획 (추가 5매 증정)</h6>
                  <br>
                  <p style="color: red; font-size: 20px; font-weight: bold;">  18,900원</p>
                <center>
                  <span class="bg rounded-pill bg-green">쿠폰</span>
                  <span class="bg rounded-pill bg-pink">오늘드림</span></center>
                </div>
              </div>

              <div class="card">
                <img src="https://image.oliveyoung.co.kr/uploads/images/goods/550/10/0000/0015/A00000015193506ko.jpg?l=ko class="card-img-top" alt="...">
                <div >
                  <h6 style="font-size: 15px;">★올영 단독★ 포렌코즈 타투 올프루프 아이라이너 1+1 기획세트</h6>
                  <br>
                  <p style="color: red; font-size: 20px; font-weight: bold;">  14,900원
                  </p>
                  <center><span class="badge rounded-pill bg-blue">증정</span>
                    <span class="bg rounded-pill bg-green">쿠폰</span>
                    <span class="bg rounded-pill bg-red">세일</span>
                    <span class="bg rounded-pill bg-pink">오늘드림</span></center>
                </div>
              </div>

            </div>
      
         
            <br>  <br>
                
             </div>

     
     
            <br><br>
             


            <br><br>
            <center><p style="font-weight: bold; font-size: 25px;">주목해야 할 브랜드</p></center>
            <ul id="menu3_ul">
              <li class="menu3"><a href="menu/menu1.html" target="frame" class="a3">아벤느</a></li>
              <li class="menu3"><a href="menu/menu2.html" target="frame" class="a3">아비브</a></li>
              <li class="menu3"><a href="menu/menu3.html" target="frame" class="a3">투쿨포스쿨</a></li>
              <li class="menu3"><a href="menu/menu4.html" target="frame" class="a3">이세이미야케</a></li>
              <li class="menu3"><a href="menu/menu5.html" target="frame" class="a3">세리박스</a></li>
            </ul>   
             <iframe src="menu/menu1.html" title="내용" name="frame" width="80%" height="600px"style="margin-left: 300px;"></iframe>
        
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
  

            <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
            <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
            <script type="text/javascript" src="slick/slick.min.js"></script>
            <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            <script>
              $('.slider').slick();
              $('.slider').slick({ 
                dots: true, //페이지 네비게이션 
                arrows:true, // next, prev 이동 버튼 
                autoplay:ture, // 자동 넘김 여부 
                infinite: false, //반복설정 
                speed: 300, //슬라이드 속도 
                autoplaySpeed : 10000, // 자동 넘김시 슬라이드 시간 
                pauseOnHover : true,// 마우스 hover시 슬라이드 멈춤 
                vertical : false, // 세로 방향 슬라이드 옵션 
                slidesToShow: 4, //보여질 슬라이드 수 
                slidesToScroll: 4, //넘겨질 슬라이드 수
                dotsClass : "slick-dots",     //아래 나오는 페이지네이션(점) css class 지정
                draggable : true,     //드래그 가능 여부 
            });
            </script>

</body>
</html>