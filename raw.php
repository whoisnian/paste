<?php
    header("Content-Type: text/plain; charset=utf-8");

    if(isset($_GET['file'])) {
        $file = basename($_GET['file']);
    }
    else {
        echo '<meta http-equiv="refresh" content="0;url=index.php">';
        exit();
    }
    
    if(file_exists('./code/'.$file.'.txt')) {
        $myfile = file_get_contents('./code/'.$file.'.txt');
        echo chop($myfile);
    }
    else {
        echo 'File Not Exists!';
    }
?>
