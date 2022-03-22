<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>아이</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <link rel="stylesheet" href="item1_add.css?after">
    <link rel="stylesheet" href="../index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


<style>
  .back1{
    
    margin-top: 10px;
    background: #ffb774;
    background: linear-gradient( to left, #ffb774,yellow  );
    height: 120px;


}
</style>
</head>
<br>
<body>
    
<?php
            include ("../header.php");
            ?>
    
    <br><br>
<hr style="margin:-10px;">




<div class="back1">

           
<br><br>
        <h1>
            아이
            <span>꼭 갖고 싶은 그 상품들!</span>
        </h1>

        <br><br>
          
        <table style="margin-left:230px;">
        <tr>
        <div class="card-group" style="width: 250px;  border: none; " >
            <?php
            include ("./db_conn.php");
            
            $sql="select * from item";
            $result=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            
            for($i=0;$i<$num;$i++) {
             
                $re=mysqli_fetch_array($result);
                ?>
                <td>

                <?php
                echo "<a href='item_info.php?rowx=$re[num]'><img src='$re[img]'style='width: 250px;'  class='card-img-top'></a>";
                 echo "<div class='card' style='border: none; width: 250px;'>";
                  echo "<p style='font-size: 15px'><b>$re[bname]<br></b>$re[iname]
                  <br><a style='color : red; font-size:15px'><b>$re[price]원</b></a></p>";

                  echo "</div></td>";
            ?>         
              <?php
               if(($i+1)%4==0){ echo "</tr>";}
              }
             
              ?>
              
            </div>
           
            </table>
<?php
            include ("../footer.php");
            ?>
</div>
           
   

</body>
</html>