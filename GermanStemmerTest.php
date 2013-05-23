<?php
/**
 *	A short PHPUnit test case.
 *
 *	You can alter the code (maybe to optimize it) but this test should always
 *	be validated.
 *
 *	@author Aris Buzachis <buzachis.aris@gmail.com>
 *  @version 1.1
 */

require_once 'PHPUnit.php';
require_once 'GermanStemmer.php';

class GermanStemmerTest extends PHPUnit_Framework_TestCase
{
	public function testStep1() {
		$words = array(
			'aufeinander' => 'aufeinand',
			'aufeinanderbiss' => 'aufeinanderbiss',
			'aufeinanderfolge' => 'aufeinanderfolg',
			'aufeinanderfolgen' => 'aufeinanderfolg',
			'aufeinanderfolgend' => 'aufeinanderfolg',
			'aufeinanderfolgende' => 'aufeinanderfolg',
			'aufeinanderfolgenden' => 'aufeinanderfolg',
			'aufeinanderfolgender' => 'aufeinanderfolg',
			'aufeinanderfolgt' => 'aufeinanderfolgt',
			'aufeinanderfolgten' => 'aufeinanderfolgt',
			'aufeinanderschlügen' => 'aufeinanderschlüg',
			'aufenthalt' => 'aufenthalt',
			'aufenthalten' => 'aufenthalt',
			'aufenthaltes' => 'aufenthalt',
			'auffassungsvermögen' => 'auffassungsvermög',
			'kategorie' => 'kategori',
			'kategorien' => 'kategori',
			'kategorisch' => 'kategor',
			'kategorische' => 'kategor',
			'kategorischen' => 'kategor',
			'kategorischer' => 'kategor',
			'kater' => 'kat',
			'katerliede' => 'katerlied',
			'katern' => 'kat',
			'katers' => 'kat',
			'kattunhalstücher' => 'kattunhalstüch',
			'katzensprung' => 'katzenspr',
			'auferstehung' => 'aufersteh',
			'kauen' => 'kau'
		);

		foreach ($words as $word => $expectedStem) {
			$this->assertEquals($expectedStem, GermanStemmer::stem($word));
		}
	}
}
?>