<?php
	
	$str = "pakistan 12345678 ";
	$strShuffle = str_shuffle($str);
	echo $strShuffle ;

	$half = substr($strShuffle , 0);
	echo "$half";

	$half = substr($strShuffle, 0 , 2);
	echo "$half";



	$half = substr($strShuffle, 0 , strlen($str)/4);
	echo "$half";


	$stringReverse = strrev($str);
	echo $stringReverse;
?>