<?php
$file = $_GET['file'];
$content = $_GET['content'];
file_put_contents("data/$file",$content);
fclose($fh);
?>
