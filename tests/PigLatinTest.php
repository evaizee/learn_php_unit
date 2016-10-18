<?php

require 'vendor/autoload.php';
require 'src/PigLatin.php';

/**
* 
*/
class PigLatinTest extends PHPUnit_Framework_Testcase
{
	
	public function testPigLatinTest()
	{
		//$this->assertTrue(false);
		$word = 'test';
		$expectedResult = 'est';
		$PigLatin = new PigLatin();
		$result = $PigLatin->convert($word);

		$this->assertEquals(
			$expectedResult,
			$result,
			"Bad move baby"
		);
	}

	public function testAnotherLatin(){
		$num = 4;
		$expectedResult = 5;
		$PigLatin = new PigLatin();
		$result = $PigLatin->counts($num);
		$this->assertEquals(
			$expectedResult,
			$result,
			"Bad number baby"
		);
	}
}