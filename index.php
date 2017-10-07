<?php
$TITLE = 'Paste';
$OTHERSTYLE = '
	<style>
	.center {
		margin:0 auto;
	}
	.wide {
		width:100%;
	}
	</style>';
$MENU = '<a href="#history" class="mdl-layout__tab is-active">History</a>
		 <a href="#new" class="mdl-layout__tab">New</a>';
include './include/header.php';

	echo '
        <div class="wide mdl-layout__tab-panel is-active" id="history">
		  <section class="wide section--center mdl-grid mdl-grid--no-spacing">';
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
            <table class="center mdl-cell mdl-cell--12-col mdl-data-table mdl-js-data-table">';
				krsort($files);
				$index = count($files);
				foreach($files as $file){
					$Time = date("Y-m-d H:i", explode("_", $file)[0]);
					$Type = explode("_", $file)[1];
					$Poster = explode("_", $file)[2];
					$View = '<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary mdl-js-ripple-effect" href="./view.php?file='.$file.'">View</a>';
					echo'
			  <tr>
                <td class="mdl-data-table__cell--non-numeric">'.($index--).'</td>
                <td class="mdl-data-table__cell--non-numeric">'.$Time.'</td>
                <td class="mdl-data-table__cell--non-numeric">'.$Type.'</td>
				<td class="mdl-data-table__cell--non-numeric">'.$Poster.'</td>
				<td>'.$View.'</td>
              </tr>';
				}
				echo ' 
            </table>';
			}
			else {
				echo "Nothing!";
			}
			closedir($dh);
		}
	}
	echo '
		  </section>
		</div>
		<div class="wide mdl-layout__tab-panel" id="new">
          <section class="wide section--center mdl-grid mdl-grid--no-spacing"> 
			<form class="center mdl-cell--12-col" action="./new.php" method="post">

		      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="poster" id="poster">
				<label class="mdl-textfield__label" for="poster">&nbsp;Poster</label>
			  </div><br/>

			  <div class="mdl-textfield mdl-js-textfield">
				<select class="mdl-textfield__input" name="type">
				  <option value="auto" selected="selected">Auto</option>
				  <option value="bash">Bash</option>
				  <option value="c">C</option>
				  <option value="cpp">C++</option>
				  <option value="css">CSS</option>
				  <option value="html">HTML</option>
				  <option value="php">PHP</option>
				</select>
			  </div><br/>

			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
				<textarea class="mdl-textfield__input" type="text" name="content" rows= "20" id="content" ></textarea>
				<label class="mdl-textfield__label" for="content">&nbsp;Content</label>
			  </div><br/>
				
			  <input type="hidden" name="from_browser" value="1">
			  <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" type="submit" name="submit" value="Paste"><br/>

			</form>
          </section>
		</div>';
include './include/footer.php';
?>
