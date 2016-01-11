<?php
/*
	Using PHP, have the function WordCount(str) take the str string parameter
	being passed and return the number of words the string contains (ie.
	"Never eat shredded wheat" would return 4). Words will be separated by single spaces. 
*/
function WordCount($str) { 
  $countWords = 0;	
  $massWords = explode(" ", $str);
  for ($i = 0; $i < count($massWords) ; $i++) {
    if ($massWords[$i] != "") {
     	$countWords++; 
    }
  }
  return $countWords;        
}

//Test
echo WordCount('Hello World');   

?>