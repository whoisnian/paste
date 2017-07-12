<?php
	header("Content-Type: text/plain; charset=utf-8");

	if(isset($_GET['file'])) {
		$file = $_GET['file'];
	}
	else {
		echo '<meta http-equiv="refresh" content="0;url=index.php">';
	}
	
	if(file_exists('code/'.$file)) {
		$myfile = fopen('code/'.$file, "r");
		echo fread($myfile, filesize('code/'.$file));
		fclose($myfile);
	}
	else {
		echo 'File Not Exists!';
	}
?>
