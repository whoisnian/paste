<?php
$url = "http://www.gravatar.com/avatar/".md5($_GET["user"])."?s=".$_GET["s"]."&d=".$_GET["d"];
header("Content-Type: image/jpeg");
echo file_get_contents($url);
?>
