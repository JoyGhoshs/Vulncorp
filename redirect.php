<?php
function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}

$url = $_GET['go'];
Redirect($url, false);
?>
