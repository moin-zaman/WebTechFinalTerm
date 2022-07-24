<?php

$name = array('moin','zaman','khan');

$count = count($name);

for($i=0; $i<$count; $i++){
	echo $name[$i];
}

echo "<br>";

//echo $name[1];

/*$name = array();
$name[0]='moin';
$name[1]='zaman';
$name[2]='khan';

echo $name[2];*/

//$name = array("Moin"=>10, "Zaman"=>20, "Khan"=>30);

//echo $name["Zaman"];

/*foreach ($name as $v){

	echo $v . " ";
}*/

/*foreach ($name as $key=> $v){

	echo $key . ' ' . $v . " ";
}*/


$info = array(

	array("Moin", 10 , "Khan"),
	array("Tansen", 20 , "Asia"),
	array("Zaman", 30 , "Dhaka")

);

//echo $info[1][2];

for($x=0; $x<3; $x++){

		for($y=0; $y<3; $y++){
			
			echo $info[$x][$y] . " ";
		}
		
		echo "<br>";

}





?>