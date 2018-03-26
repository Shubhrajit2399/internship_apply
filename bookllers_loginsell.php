<?php
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sellers Login</title>
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>

  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form" name="bookllers_loginsell" id="bookllers_loginsell" action="bookllers_loginprocess.php" method="POST">
			<input type="text" placeholder="Whatsapp No." name="whtsap">
			<input type="Password" placeholder="Password" name="Password">
			<input type="text" name="captcha" placeholder="Enter the captcha">
			<img src="bookllers_captcha.php" width="95" height="50"><br>
			<button type="submit" id="login-button">Login</button>
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
  
</body>

</html>
