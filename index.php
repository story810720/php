<doctype html>
<html>
<head>
	<title>首頁</title>
	<meta http-equiv="keywords" content="關鍵字" />
  	<meta http-equiv="description" content="網站描述" />
  	<style type="text/css">
    .wrap{
     width: 1200px;
     margin: 0 auto;
    }
    .leftbox{
     float: left;
     background-color: yellow;
     width: 400px;
     height: 300px;
    }
    .rightbox{
     float: left;
     background-color: orange;
     width: 800px;
     height: 300px;
    }
   </style>
</head>


</head>




<body>

<div class="top">
   <h1>我們的網站</h1>
   <p>這是我跟你用來練習網站網頁設計以及後台系統的網站Blog。</p>
   <?php include 'menu.php';	?>
  </div>

<div class="wrap">
	<div class="leftbox">
   		<?php include 'login.php'; ?>
  	</div>
 	

 	<div class="rightbox">
 		<?php include 'main.php'?>

 	</div>
 	<div style='clear:both;'></div>
 </div>


<?php 
	include 'footer.php';		
?>

<a href='/project/login.php'>登入</a>



</body>
</html>