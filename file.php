<?php


//echo readfile('info.txt');

//$file = fopen('info.txt','r')or die("unable to open file");


//$file = fopen('info.txt','w')or die("unable to open file");
$file = fopen('info.txt','a')or die("unable to open file");
$text = "I am learning Php";
$text1 = "I am learning Php 2";
echo fwrite($file,$text1);


//echo fread($file, filesize('info.txt'));
//echo fgets($file, filesize('info.txt')); //for single line read we used fgets();

/*while(!feof($file)){
	
	echo fgets($file). " <br> ";
	
}*/

fclose($file);

?>