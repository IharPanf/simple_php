<?php
/*
	Using PHP, have the function LetterCapitalize(str) take the str parameter being passed
	and capitalize the first letter of each word. Words will be separated by only one space. 
*/
function LetterCapitalize($str) { 
  $returnStr = '';	
  $massWords = explode(' ', $str);
  for ($i = 0; $i < count($massWords); $i++) {
    $returnStr .= strtoupper($massWords[$i][0]).substr($massWords[$i],1).' ';
  }
  return $returnStr;        
}

echo  LetterCapitalize("i can do it");
?>