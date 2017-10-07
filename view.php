<?php
$TITLE = 'View';
$OTHERSTYLE = '
	<style>
	body {
	  line-height: normal;
	}
	ol, li {
	  line-height: normal;
	}
	.wide {
		width:100%;
	}
	.center {
		position: absolute;
		margin: 0 auto;
	}
	</style>';
$MENU = '<a href="./" class="mdl-layout__tab">History</a>';
include './include/header.php';

	echo '
	    <div class = "center wide mdl-grid mdl-grid--no-spacing">
		  <div class="mdl-cell mdl-cell--12-col mdl-list__item mdl-list__item--two-line">';
	if(isset($_GET['file'])) {
		$file = $_GET['file'];
		$Time = date("Y-m-d H:i", explode("_", $file)[0]);
		$Type = explode("_", $file)[1];
		$Poster = explode("_", $file)[2];
		$Raw = '<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary mdl-js-ripple-effect" href="./raw.php?file='.$file.'">Raw</a>';
		$Download = '<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary mdl-js-ripple-effect" href="./code/'.$file.'" download="'.explode("_", $file)[0].'.'.$Type.'">Download</a>';
	}
	else {
		echo '<meta http-equiv="refresh" content="0;url=./index.php">';
		exit();
	}

	if($Type == "bash")
		$Lang = "lang-sh";
	else if($Type == "c")
		$Lang = "lang-c";
	else if($Type == "cpp")
		$Lang = "lang-cpp";
	else if($Type == "css")
		$Lang = "lang-css";
	else if($Type == "go")
		$Lang = "lang-go";
	else if($Type == "html")
		$Lang = "lang-html";
	else if($Type == "php")
		$Lang = "lang-php";
	else
		$Lang = "";
	
	if(file_exists('./code/'.$file)) {
		echo '
		    <span class="mdl-list__item-primary-content">
			  <i class="material-icons mdl-list__item-avatar">person</i>
			  <span>'.$Poster.'</span>
			  <span class="mdl-list__item-sub-title">'.$Time.'</span>
		    </span>
		    <span class="mdl-list__item-secondary-info">
		      '.$Raw.'
			  '.$Download.'
			</span>
		  </div>
		  <pre class="mdl-cell mdl-cell--12-col prettyprint '.$Lang.' linenums"><script type="text/html" style="display:block">';
		$myfile = file_get_contents('./code/'.$file);
		echo chop($myfile);
		echo '</script></pre>
		</div>';
	}
	else {
		echo '
			File Not Exists!
		</div>';
	}

include './include/footer.php';
?>
