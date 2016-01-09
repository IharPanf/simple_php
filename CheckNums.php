<?php
/*
	Using PHP, have the function CheckNums(num1,num2) take both parameters
	being passed and return the string true if num2 is greater than num1, otherwise return the string false. 
	If the parameter values are equal to each other then return the string -1. 
*/
function CheckNums($num1, $num2) { 
  $dif = $num2 - $num1;
  $returnStr = '';
  if ($dif > 0)  { $returnStr = "true";}
  if ($dif < 0)  { $returnStr = "false";}
  if ($dif == 0) { $returnStr = "-1";}
 return $returnStr;        
}

//Test
echo CheckNums(9,12);
echo CheckNums(30,15);

?>