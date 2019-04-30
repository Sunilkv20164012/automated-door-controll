<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
/*
$files = glob('C:\\Users\\DELL\\Pictures\\Camera Roll\\*'); // get all file names
    foreach($files as $file){ // iterate files
        if(is_file($file))
        	echo '<img src="'.$file.'" alt="Smiley face" height="42" width="42">';
            
    }
*/ ?>
<?php

$newfile = 'C:\\xamp\\htdocs\\Embedded\\';
$i=0;
$files = glob('C:\\Users\\sunil\\Pictures\\Camera Roll\\*'); // get all file names
foreach($files as $file){ // iterate files
if(is_file($file)){
	 $p =$newfile;
	 $p.=''.$i.'.jpg';
if (!copy($file, $p)) {
    echo 'failed to copy $file...\n';
}else{
    echo 'copied \n<img src="'.$i.'.jpg'.'" alt="Smiley face" height="42" width="42">';
    $i++;
}
}
}
?> 

 <!-- <img src="1.jpg" alt="Smiley face" height="42" width="42">
 -->

<form action="open_door.php" method="get">
  <input type="submit" value="Open door">
</form>

 <form action="cap_photo.php" method="get">
  <input type="submit" value="Capture">
</form>

</body>
</html>
