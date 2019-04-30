<?php
exec("C:\Users\sunil\Anaconda3\python.exe open.py", $output, $return);

$files = glob('C:\\Users\\sunil\\Pictures\\Camera Roll\\*'); // get all file names
    foreach($files as $file){ // iterate files
        if(is_file($file))
        	// echo '<img src="$file" alt="Smiley face" height="42" width="42">';
            unlink($file);
    }
?>