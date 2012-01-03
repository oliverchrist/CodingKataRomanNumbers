<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of arabicToRoman
 *
 * @author christ
 */
class ArabicToRoman {
	public function getArabicToRoman($arabicNumber){
		$arabicToRomanMapping[1000] = 'M';
		$arabicToRomanMapping[900] = 'CM';
		$arabicToRomanMapping[500] = 'D';
		$arabicToRomanMapping[400] = 'CD';
		$arabicToRomanMapping[100] = 'C';
		$arabicToRomanMapping[90] = 'XC';
		$arabicToRomanMapping[50] = 'L';
		$arabicToRomanMapping[40] = 'XL';
		$arabicToRomanMapping[10] = 'X';
		$arabicToRomanMapping[9] = 'IX';
		$arabicToRomanMapping[5] = 'V';
		$arabicToRomanMapping[4] = 'IV';
		$arabicToRomanMapping[1] = 'I';
		
		$romanString = '';
		
		foreach($arabicToRomanMapping as $arabicValue => $romanValue){
			$division = floor($arabicNumber / $arabicValue);
			$rest = $arabicNumber % $arabicValue;
			
			if($division > 0){
				for($i = 0; $i < $division; $i++){
					$romanString .= $romanValue;
				}
				$arabicNumber = $rest;
			}
		}
		return $romanString;
	}
}

?>
