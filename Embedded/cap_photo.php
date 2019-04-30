<?php
exec("C:\Users\sunil\Anaconda3\python.exe testcap.py", $output, $return);

print_r($output);
print_r($return);
echo $return;

echo $output[0];
?>