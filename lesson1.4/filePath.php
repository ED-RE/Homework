<?php

$path = __DIR__. "\data.txt";

//$fh = fopen($path, 'r');
//$line = fgets ($fh);
//echo $line;
//$line = fgets ($fh);
//echo $line;
//$line = fgets ($fh);
//echo $line;
//$line = fgets ($fh);
//echo $line;
//fclose($fh);

$fh = fopen($path, 'r');
while (!feof($fh)) {
    $line = fgets($fh);
    echo $line;
}
fclose($fh);

//$fh = fopen($path, 'r');
//while (false !== ($line = fgets($fh))) {
//    echo $line;
//}
//fclose($fh);

$fh = fopen($path,'w');
fwrite($fh, 'Hello, world!');
fclose($fh);

file_put_contents($path, 'Hello, new world');