<?php
/*
	Using the JavaScript language, have the function LongestWord(sen) take the sen parameter being passed
	and return the largest word in the string. If there are two or more words that are the same length, 
	return the first word from the string with that length. Ignore punctuation and assume sen will not be empty. 
*/

function LongestWord($sen) { 
  $masWords = preg_split("/([.,&!?:… ])/",$sen);
  $longWord = $masWords[0];	
  for ($i = 1; $i < count($masWords); $i++) {
    if (strlen($masWords[$i])> strlen($longWord)) {
    	$longWord = $masWords[$i]; 
    }
  }
  return $longWord;      
} 

echo LongestWord("Long longer.? longest long");
?>