<?php 
	
	$check = 'this is simple ch3cking of string u$ing bulit in function';


	//these all are using string function

	$stringWordCount = str_word_count($check , 0);
	print_r($stringWordCount);

	$stringWordCount = str_word_count($check , 1);
	print_r($stringWordCount);

	$stringWordCount = str_word_count($check , 2);
	print_r($stringWordCount);

	$stringWordCount = str_word_count($check , 1 , '3' );
	$stringWordCount = str_word_count($check , 2 , '3' );
	$stringWordCount = str_word_count($check ,1, '3$' );
	print_r($stringWordCount);





 ?>