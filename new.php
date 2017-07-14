<?php
	$Err = "";
	$success = 1;
	if(isset($_POST['submit'])) {
		$Time = time();
		$Poster = $_POST['poster'];
		$Type = $_POST['type'];
		$Content = $_POST['content'];
		if(empty($Poster)) {
			$Err = "Poster Required";
			$success = 0;
		}
		else if(empty($Type)) {
			$Err = "Type Required";
			$success = 0;
		}
		else if(empty($Content)) {
			$Err = "Content Required";
			$success = 0;
		}

		if($success) {
			$file = $Time.'_'.$Type.'_'.$Poster;
			$myfile = fopen('./code/'.$file, "w");
			fwrite($myfile, $Content);
			fclose($myfile);
			echo '<meta http-equiv="refresh" content="0;url=./view.php?file='.$file.'">';
		}
		else {
			echo '<script>window.history.back(-1);alert("'.$Err.'");</script>';
		}
	}
	else if(isset($_POST['content'])) {
		$Time = time();
		$Poster = "anonymous";
		if(isset($_POST['poster']))
			$Poster = $_POST['poster'];
		$Type = "auto";
		if(isset($_POST['type']))
			$Type = $_POST['type'];
		$Content = $_POST['content'];
		if(empty($Poster)) {
			$Err = "Poster Required";
			$success = 0;
		}
		else if(empty($Type)) {
			$Err = "Type Required";
			$success = 0;
		}
		else if(empty($Content)) {
			$Err = "Content Required";
			$success = 0;
		}

		if($success) {
			$file = $Time.'_'.$Type.'_'.$Poster;
			$myfile = fopen('./code/'.$file, "w");
			fwrite($myfile, $Content);
			fclose($myfile);
			$url = "\nhttp://".$_SERVER['SERVER_NAME']."/view.php?file=".$file."\n\n";
			echo $url;
		}
		else {
			echo $Err;
		}
	}
	else {
		echo '<meta http-equiv="refresh" content="0;url=./index.php">';
	}
?>
