<?php
/*
	����� �� ���������� ������� ������ ������, �������� ������� ������ ������. 
	P.S.  ������� � ������ ����� ����������.
*/

// ������ ���-�� ��������� �������
function getArrValue($str) 
{
	$arrValue = array();
	for ($i = 0; $i < strlen($str); $i++) 
	{
		if (isset($arrValue["$str[$i]"])) 
		{
			$arrValue["$str[$i]"] += 1;
		} else 
		{
			$arrValue["$str[$i]"] = 1;
		}	
	}		
	return $arrValue;
}

// ��������� �����
function compareString($str1, $str2) 
{
	$arrStr1 = getArrValue($str1);
	$arrStr2 = getArrValue($str2);
	return $arrStr1 == $arrStr2 ? "�����" : "������"; 
}


echo compareString("abbacbba","aaabbbbc");

?>


