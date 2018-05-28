<?php
$content = file('file.csv');
foreach ($content as $string) {
	$exp = explode(",", $string);
}
$num = $exp[2];
$buzz = $exp[1];
$fizz = $exp[0];
function fizzBuzz($num, $fizz, $buzz){
	$func = function($num) use ($fizz, $buzz){
		if(($num % $fizz == 0) && ($num % $buzz == 0)){
			echo 'FB ';
		}elseif($num % $buzz == 0){
			echo 'B ';
		}elseif($num % $fizz == 0){
			echo 'F ';
		}else{
			echo "$num ";
		}
	};
	$fizzBuzz = array_map($func, range(1, $num));
}
fizzBuzz($num, $fizz, $buzz);