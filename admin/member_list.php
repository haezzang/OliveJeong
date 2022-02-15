
<head>
     <!-- Bootstrap CSS -->
     <title>회원 리스트</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
 
<style>
  .list{
    margin-left:250px;
  }
h1{
  padding-top:20px;
}

  div{
 
  }
    table{
      font-size:15px;
      text-align: center;
      font-family: 'NanumSquare', sans-serif !important;
  
    }
    td{
     width: 200px;
    }
    img:hover{
      cursor:pointer;
    }
    .table{
      width:1000px;
      height:100px;
    }
    button{

    font-family: 'NanumSquare', sans-serif !important;
    width:100px;
    height:30px;
    background-color:  rgb(172, 226, 63);
    border-radius: 40px;
    border:none;
    font-size: 15px;
    }
 
</style>
</head>


<script>
  
function imageView(url) {
	if(url) {
    //alert(url);
		var imgW = document.getElementById('img1').naturalWidth;

		var imgH = document.getElementById('img1').naturalHeight;

		var imgWindow = window.open("", "_image_view_", "width="+imgW+", height="+imgH);

		imgWindow.document.write("<img src='"+url+"'>");

	}
}
</script>


<div class="list">
  <div>
  <h1>
  회원정보
  <span>
  <a href='admin.html'><button >관리자 홈</button></a>
  </span>
  </h1>

  </div>



<table class="table">
  <tr>
    <th scope="col">아이디</th>
    <th scope="col">비밀번호</th>
    <th scope="col">이름</th>
    <th scope="col">전화번호</th>
    <th scope="col">이메일</th>
    <th scope="col">비고</th>
  
  </tr>
<tr>

  

<?php

include ("./db_conn.php");

$sql="select * from user";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

for($i=0;$i<$num;$i++) {
    $re=mysqli_fetch_array($result);
    ?>

  <?php
    echo "<td>$re[id]</td>";
    echo "<td>$re[pass]</td>";
    echo "<td>$re[name]</td>";
    echo "<td>$re[phone]</td>";
    echo "<td>$re[email]</td>";
?>
<td><a href='item_updateform.php?idx=<?php echo $re['num']?>'>수정</a>/<a href='item_delete.php?idx=<?php echo $re['num']?>'>삭제</a></td>
</tr>

  <?php
  }
  ?>


  </table>
</form>

</div>
