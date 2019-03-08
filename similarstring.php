<?php 

	$string1 = 'i am pakistani';
	$string2 = 'i am pakistanfdlkfjerw;lfjerwl;gjerkljerwk;lgjerwk;gjerwk;gjk;lgjerk;gjer;li';

	 $similerty = similar_text($string1, $string2, $result);

	 echo 'similerty in the given strings are :' . $result;


 ?>