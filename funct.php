<?php

function getMultiValues($val , $color) {
    
    echo "<h1 style='color:$color'>" . $val . "</h1>";
//    echo $val . "<br>";
}

getMultiValues('abc', 'green');
getMultiValues('cde' , 'red');
getMultiValues('EVS' , 'blue');

?>				