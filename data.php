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
<h2><center>Save Your Text To Our Storage<a href="data/data">[Show Text]</a></h2></center>
<hr><center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Your Text: <input type="text" name="fname"><input type="submit">
  <a href="data/data"><button>Show Text</button></a>
</form>
<center>
<?php
function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Your Input Field is Empty";
  } else {
    Redirect('backup.php?file=data&&content='.$name, false);
  }
}
?>
</hr>
<center>@Vulncorp</center>
<hr>
</body>
</html>
