<?php
/*
	Using PHP, have the function AlphabetSoup(str) take the str string parameter being passed
	and return the string with the letters in alphabetical order (ie. hello becomes ehllo). 
	Assume numbers and punctuation symbols will not be included in the string. 
*/

function AlphabetSoup($str) {	
  $returnStr = str_split($str);
  sort($returnStr);
  $returnStr =  implode('',$returnStr);
  return $returnStr;        
}

//Test
echo AlphabetSoup('hello');

?>