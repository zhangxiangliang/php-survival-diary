<?php 
class Person {
	private static $age = 1;
	const BELONG = 'earth';
	public function haveBirthday()
	{
		static::$age++;
	}
	public function age() {
		return static::$age;
	}
}
$lionis = new Person();
$lionis->haveBirthday();
var_dump($lionis->age());

$nuo = new Person();
$nuo->haveBirthday();
var_dump($nuo->age());

var_dump($lionis::BELONG);