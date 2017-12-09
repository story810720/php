<!DOCTYPE HTML>
<HTML>
<body>




	<form action='<?php htmlspecialchars($_SERVER['PHP_SELF']);?>' method='POST' >
		請輸入內容<input type="text" name='name' >
		<input type='submit'>
		<?php $name; ?>


	</form>
		<?php
		$name;
		$a="沈怡青大笨蛋";
		if($_SERVER['REQUEST_METHOD']=='POST'){
			echo $name=$a;
		}
	?>


</body>
</html>