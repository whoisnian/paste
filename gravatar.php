<?php
if(isset($_GET["user"])&&isset($_GET["s"])&&isset($_GET["d"])) {
    $url = "http://www.gravatar.com/avatar/".md5($_GET["user"])."?s=".$_GET["s"]."&d=".$_GET["d"];
}
else {
    $url = "http://www.gravatar.com/avatar/1f2bf2e032a11fec0ea5d7f9d6a5aa1d?s=48&d=retro";
}
$content = file_get_contents($url);
foreach($http_response_header as $i) {
    header($i);
}
echo $content;
?>
