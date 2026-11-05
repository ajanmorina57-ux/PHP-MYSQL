<?php

$file = fopen('task.txt' , 'r');

$header = fgetcsv($file , 0 , "\t");

echo implode("\t" , $header) . "\n";

while(($row = fgetcsv($file , 0 , "\t")) == true) {
    echo implode("\t" , $row) . "\n";
}

fclose($file);

$my_file = fopen("task.txt" , "a");

$added_text = "llapi vs drenica 4-2";

fwrite($my_file , $added_text);

fclose($my_file);

?>