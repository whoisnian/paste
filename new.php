<?php
$TITLE = "New";
include "./Includes/header.php";

	$userErr = $typeErr = $contentErr = "";
	$success = 1;
	if(isset($_POST['submit'])) {
		$Time = time();
		$User = $_POST['user'];
		$Type = $_POST['type'];
		$Content = $_POST['content'];
		if(empty($User)) {
			$userErr = "-----Required";
			$success = 0;
		}
		else if(empty($Type)) {
			$typeErr = "-----Required";
			$success = 0;
		}
		else if(empty($Content)) {
			$contentErr = "-----Required";
			$success = 0;
		}

		if($success) {
			$file = $Time.'_'.$Type.'_'.$User;
			$myfile = fopen('code/'.$file, "w");
			fwrite($myfile, $Content);
			fclose($myfile);
			echo '<meta http-equiv="refresh" content="0;url=/view.php?file='.$file.'">';
		}
	}

	echo '
	<br/>
	<form class="card" action="new.php" method="post">
		User<span class="error">'.$userErr.'</span><br/>
			<input class="input" type="text" name="user">
		<br/><br/>
		
		Type<span class="error">'.$typeErr.'</span><br/>
		<select class="select" name="type">
			<option value="auto" selected="selected">Auto</option>
			<option valur="bash">Bash</option>
			<option value="c">C</option>
			<option value="cpp">C++</option>
			<option value="css">CSS</option>
			<option value="html">HTML</option>
			<option value="php">PHP</option>
		</select>
		<br/><br/>

		Content<span class="error">'.$contentErr.'</span><br/>
			<textarea class="text" style="width:98%" name="content"></textarea>
		<br/><br/>

		<label class="button">Submit<input style="display:none" type="submit" name="submit"></label>
		<br/>
	</form>';

include "./Includes/footer.php";
?>
