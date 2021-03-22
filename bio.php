<html>
<head>
<title>Vulncorp-Bio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Vulncorp-Vulnerable Web-Applications">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">

	<title>VulnCorp Security</title>
	<link href='https://fonts.googleapis.com/css?family=Oswald|Montserrat:400,700|Droid+Sans+Mono' rel='stylesheet' type='text/css'>
</head>
<body>
<pre>

<b><a STYLE="text-decoration:none" href="index.php">
<font color="1482A7">

█░█ █░█ █░░ █▄░█ █▀▀ █▀█ █▀█ █▀█
▀▄▀ █▄█ █▄▄ █░▀█ █▄▄ █▄█ █▀▄ █▀▀                                                
</font></b>
</a>
<b><a style="text-decoration:none" href="index.php"> <font color="1482A7">&lt;-- BACK TO Home</font> </a></b>
<br>
<hr>
<h2><center>Simple Bio Creator</h2></center>
<hr><center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter Your Name: <input type="text" name="fname"><input type="submit">
</form>
<center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Your Name Field is Empty";
  } else {
    echo '<font color="red">Hi i am '.$name. ' , i am an bug bounty hunter my user handle is @'.$name.'</font>';
  }
}
?>
</hr>
<center>@Vulncorp</center>
<hr>
</body>
</html>
