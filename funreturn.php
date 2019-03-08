<?php

function add($number1 , $number2){

	$result = $number1 + $number2;

	return $result;

}
// echo add($number1 , $number2);

function divide($numberone , $numbertwo){

	$result = $numberone / $numbertwo;
	return $result;

}
echo divide (add(10 , 20) , 15);





?>