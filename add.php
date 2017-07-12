<?php
	$Err = "";
	$success = 1;
	
	if(isset($_POST['content'])) {
		$Time = time();
		$User = "anonymous";
		if(isset($_POST['user']))
			$User = $_POST['user'];
		$Type = "auto";
		if(isset($_POST['type']))
			$Type = $_POST['type'];
		$Content = $_POST['content'];
		if(empty($User)) {
			$Err = "User Required";
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
			$file = $Time.'_'.$Type.'_'.$User;
			$myfile = fopen('code/'.$file, "w");
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
		echo "Nothing Received!";
	}
?>
