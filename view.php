<?php
$TITLE = "View";
include './Includes/header.php';

	if(isset($_GET['file'])) {
		$file = $_GET['file'];
		$Time = date("Y-m-d H:i", explode("_", $file)[0]);
		$Type = explode("_", $file)[1];
		$User = explode("_", $file)[2];
		$Raw = '<a class="button" style="color:#FFFFFF;margin:10px 0 0 5px;border-width:1px;border-radius:0;padding:0 10px;box-shadow:0 0 5px 2px #666666;" href="/raw.php?file='.$file.'">Raw</a> ';
		$Download = '<a class="button" style="color:#FFFFFF;margin:10px 0 0 5px;border-width:1px;border-radius:0;padding:0 10px;box-shadow:0 0 5px 2px #666666;" href="/code/'.$file.'" download="'.explode("_", $file)[0].'.'.$Type.'">Download</a>';
	}
	else {
		echo '<meta http-equiv="refresh" content="0;url=index.php">';
	}

	if($Type == "bash")
		$Lang = "lang-sh";
	else if($Type == "c")
		$Lang = "lang-c";
	else if($Type == "cpp")
		$Lang = "lang-cpp";
	else if($Type == "css")
		$Lang = "lang-css";
	else if($Type == "html")
		$Lang = "lang-html";
	else if($Type == "php")
		$Lang = "lang-php";
	else
		$Lang = "";
	
	if(file_exists('code/'.$file)) {
		echo '
		<br/>
		<div style="width:95%;margin:0 auto;border-left:solid 10px #BB0000;padding-left:5px">'.$User.' @ '.$Time.'</div>
		<div style="width:95%;margin:0 auto">'.$Raw.$Download.'</div>
		<pre class="prettyprint '.$Lang.' linenums"><script type="text/html" style="display:block">';	
		$myfile = fopen('code/'.$file, "r");
		echo fread($myfile, filesize('code/'.$file));
		fclose($myfile);
		echo '</script></pre>';
	}
	else {
		echo '<div class="table" style="border-left:solid 10px #BB0000;padding-left:5px">File Not Exists!</div>';
	}

include './Includes/footer.php';
?>
