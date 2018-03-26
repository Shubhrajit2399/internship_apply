<?php
session_start();
if(isset($_REQUEST["t1"]))
{$bid=$_REQUEST["t1"];

//$usr=$_SESSION["ssuid"];
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
		<h1>Update Book</h1>
		
		<form class="form" name="bookllers_updatelogin" id="bookllers_updatelogin" action="bookllers_updateloginprocess1.php" method="POST">
			<input type="text" placeholder="Whatsapp No." name="whtsap">
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