<?php

echo string_transformer("Example string selaMANKO bromanko");

function string_transformer($s){

	$splitarray=str_split($s);
	$arr2=array();
	for ($i=0; $i <count($splitarray); $i++) { 
		if (ctype_lower($splitarray[$i])) {
			array_push($arr2, strtoupper($splitarray[$i]));
		}else{
			array_push($arr2,strtolower($splitarray[$i]));
		}
	}
	$str = implode("", $arr2);
	$arr=explode(" ", $str);
	$result=array_reverse($arr);
	return implode(" ", $result);
}