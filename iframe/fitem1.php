<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>올리브영</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="../index.css?after" />

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous"
  />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"
  ></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
  />
  <script
    type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
  ></script>
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />

<style>
    .item {
  width: 300px;
  height: 35px;
  background-color: white;
  border: solid 1px darkgray;
  border-radius: 3px;
  margin-top: 20px;
  margin-left: 80px;
  font-size: 15px;
}

</style>

  
  <div style="width: 500px; float: left;">
    <p style="font-weight: bold; font-size: 25px; ">
      유사한 고객님이 <br />
      많이 구매했어요
    </p>

    <table>
        <tr>

        <div class="card-group" style="width: 220px;  border: none; " >
            <?php
            include ("./db_conn.php");
            
            $sql="select * from item1";
            $result=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            
            for($i=0;$i<$num;$i++) {
             
                $re=mysqli_fetch_array($result);
                ?>
                <td>

                <?php
                echo "<a href='../item/item_info.php?rowx=$re[num]'><img src='$re[img]'style='width: 220px;'  class='card-img-top'></a>";
                 echo "<div class='card' style='border: none; width: 220px;'>";
                  echo "<p style='font-size: 15px'><b>$re[bname]<br></b>$re[iname]
                  <br><a style='color : red; font-size:15px'><b>$re[price]원</b></a></p>";
                  echo "</div></td>";
                 
            ?>         
              <?php
               if(($i+1)==2){ break; echo "</tr>";}
       
              }
             
              ?>
              
            </table>
            <button class="item">다른상품 추천 해드릴게요</button>
      </div>
     
   
  </div>


  
  <div style="width: 500px; float: left; margin-left: 10px;">
    <p style="font-weight: bold; font-size: 25px; ">
        최근 본 상품과 <br />
        연관 상품 추천해드려요
    </p>

    <table>
        <tr>

        <div class="card-group" style="width: 220px;  border: none; " >
            <?php
            include ("./db_conn.php");
            
            $sql="select * from item1";
            $result=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            
            for($i=0;$i<$num;$i++) {
             
                $re=mysqli_fetch_array($result);
                ?>
                <td>

                <?php
                echo "<a href='item_info.php?rowx=$re[num]'><img src='$re[img]'style='width: 220px;'  class='card-img-top'></a>";
                 echo "<div class='card' style='border: none; width: 220px;'>";
                  echo "<p style='font-size: 15px'><b>$re[bname]<br></b>$re[iname]
                  <br><a style='color : red; font-size:15px'><b>$re[price]원</b></a></p>";
                  echo "</div></td>";
                 
            ?>         
              <?php
               if(($i+1)==2){ break; echo "</tr>";}
       
              }
             
              ?>
              
            </table>
            <button class="item">다른상품 추천 해드릴게요</button>
      </div>
     
   
  </div>
</head>

</body>
</html>
</head>

</body>
</html>