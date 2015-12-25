<?php
/*
	Using PHP, have the function LetterChanges(str) take the str parameter being passed and modify it using the following algorithm. 
	Replace every letter in the string with the letter following it in the alphabet (ie. c becomes d, z becomes a).
	Then capitalize every vowel in this new string (a, e, i, o, u) and finally return this modified string. 
*/
function LetterChanges($str) { 

  $returnStr = '';
  $charTemp ='';
  for ($i = 0; $i < strlen($str); $i++) {
    if (preg_match("/^[a-zA-Z]+$/",$str[$i])) {
      $charTemp = chr(ord($str[$i])+1);	  
      if (     $charTemp == 'a' 
         	|| $charTemp == 'e' 
         	|| $charTemp == 'i' 
         	|| $charTemp == 'o' 
         	|| $charTemp == 'u' 
         ) 
	  {
        $charTemp = strtoupper($charTemp);
      }  
      	$returnStr = $returnStr.$charTemp;
    } else {
     	$returnStr = $returnStr.$str[$i]; 
    }    
  }
  return $returnStr;        
}
echo LetterChanges("mama mula ramu");
?>