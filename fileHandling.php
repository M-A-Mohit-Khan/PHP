<?php
$file="newfile.txt";
if(file_exists($file))
{
    $handle=fopen($file,"r");
    $content=fread($handle,filesize($file));
    fclose($handle);
    echo $content;
}
else
{
    $handle=fopen($file,"w");
    $content="hello".PHP_EOL."world";
    fwrite($handle,$content);
    fclose($handle);
}
?>
