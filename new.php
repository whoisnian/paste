<?php
    $Err = "";
    $success = 1;
    if(isset($_POST['submit'])) {
        $Time = floor(microtime(true)*1000);
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
            echo '<html><script>window.location.href="./view.php?file='.$Time.'";</script></html>';
        }
        else {
            echo '<html><script>window.history.back(-1);alert("'.$Err.'");</script></html>';
        }
    }
    else if(isset($_POST['content'])) {
        $Time = floor(microtime(true)*1000);
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
            $url = "\nhttp://".$_SERVER['SERVER_NAME']."/view.php?file=".$Time."\n\n";
            echo $url;
        }
        else {
            echo $Err;
        }
    }
    else {
        echo '<html><script>window.location.href="./index.php";</script></html>';
    }
?>
