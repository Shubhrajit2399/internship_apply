<?php
session_start();
if(isset($_REQUEST["b1"]))
{$bid=$_REQUEST["b1"];
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sellers Login</title>
  
  
  
      <link rel="stylesheet" href="css/style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>

<body>

  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form" name="bookllers_loginbuy" id="bookllers_loginbuy" action="bookllers_loginbuyprocess1.php" method="POST">
			<input type="text" placeholder="Username" name="usr">
			<input type="Password" placeholder="Password" name="Password">
			<input type="text" name="captcha" placeholder="Enter the code below">
			<img src="bookllers_captcha.php" width="95" height="50"><br>
			<button type="submit" id="login-button">Login</button>
			<input type="hidden" name="hbookid" value="<?php echo $bid; ?>">
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <?php
 $_SESSION["ss_bid"]=$bid;
 ?>
</body>

</html>
