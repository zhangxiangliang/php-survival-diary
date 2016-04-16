<?php
class Person {
	protected $name;
	protected $age;

	public function __construct($name , $age){
		$this->name = $name;
		$this->age  = $age;
	}

	public function getName() {
		return $this->name;
	}

	public function setName ($name) {
		if($name === '') {
			throw new Exception("Error Name Can't Be Null");
		}
		$this->name = $name;
	}

	public function getAge() {
		return $this->age;
	}

	public function setAge($age) {
		if($age < 0) {
			throw new Exception("Error Age");
		}
		$this->age = $age;
	}
}

$person = new Person('lionis', 18);
//$person->setName('');
//$person->setAge(-10);
echo $person->getName();
echo '<br>';
echo $person->getAge();