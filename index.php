<?php
$TITLE = "Home";
include './Includes/header.php';

	$dir = 'code';
	if(is_dir($dir)){
		if($dh = opendir($dir)){
			while(($file = readdir($dh))){
				if($file == "."||$file == ".."||$file == "index.html")continue;
				$key = explode("_", $file)[0];
				$files[$key] = $file; 
			}
			if(!empty($files)){
				echo '
			<br/>	
			<table class="table">
				<tr>
					<th>#</th>
					<th>Time</th>
					<th>Type</th>
					<th>User</th>
					<th>Other</th>
				</tr>';
				krsort($files);
				$index = count($files);
				foreach($files as $file){
					$Time = date("Y-m-d H:i", explode("_", $file)[0]);
					$Type = explode("_", $file)[1];
					$User = explode("_", $file)[2];
					$View = '<a class="button" href="view.php?file='.$file.'">View</a>';
					echo'
				<tr>
					<td>'.($index--).'</td>
					<td>'.$Time.'</td>
					<td>'.$Type.'</td>
					<td>'.$User.'</td>
					<td>'.$View.'</td>
				</tr>';
				}
				echo '
			</table>
			<br/>';
			}
			closedir($dh);
		}
	}

include './Includes/footer.php';
?>
