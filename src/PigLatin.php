<?php

/**
* 
*/
class PigLatin
{
	/*
	This function will remove first letter from its parameter 
	*/
	public function convert($word)
	{
		//return $word;
		$new_word = substr($word, 1, strlen($word));
		return $new_word;
	}
	/*
	This function will adds the input by 1
	*/
	public function counts($number){
		$new_number = (int)$number + 1;
		return $new_number;
	}
}