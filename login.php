<?php
	
	$account="";
	$password="";
	$Erraccount="";
	$Errpassword="";


	
		if($_SERVER['REQUEST_METHOD'] =="POST")	{
			$account=emp($_POST['account']);
			$password=emp($_POST['password']);
		}
	



		function emp($date){
			if(empty($date )){
				return $date="帳號或密碼請勿空白";
				//return $Errpassword="帳號請勿空白";   //要分開	
			}else{
				return $date;
			}
		}
	

?>

<html>
<body>
	<form action='<?php  echo htmlspecialchars($_SERVER['PHP_SELF']);    ?>' method='POST' >
		請輸入帳號：<input type='text' name='account' value="<?php //echo $account;?>"><?php echo $account;?><br>
		請輸入密碼：<input type='password' name='password' value="<?php //echo $password;?>"><?php echo $password;?><br>
		<input type='submit' name='submit'>
		<input type='reset' value='清除重填'>
	</form>

<?php echo "帳號輸入的是：$account <br>";
 	  echo "密碼是：$password<br>";
?>

	<a href="/project/index.php">返回首頁</a>
</body>
</html>


