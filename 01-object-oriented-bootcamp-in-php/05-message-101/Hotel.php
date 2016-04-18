<?php
class Person {
	protected $name;
	protected $gender;
	public function __construct($name, $gender) {
		$this->name = $name;
		$this->gender = $gender;
	}
	public function getName() {
		return $this->name;
	}
	public function getGender() {
		return $this->gender;
	}
}
class Female extends Person {
	protected $size;
	protected $price;
	protected $gender = 'female';
	protected $haveTime = true;
	public function __construct($name, $size, $price) {
		$this->name = $name;
		$this->size = $size;
		$this->price = $price;
	}
	public function setHaveTime($value) {
		$this->haveTime = $value;
	}
}
class Hotel {
	protected $member = [];
	public function __construct($member = []) {
		$this->member = $member;
	}
	public function add(Person $person) {
		$this->member[] = $person;
	}
	public function getMember() {
		return $this->member;
	}
	public function hire(Person $person) {
		foreach ($this->member as $i => $value) {
    		if($value == $person) {
    			$value->setHaveTime = false;
    			return 'success';
    		}
		}
		return 'false';
	}
}
$femaleA = new Female('femaleA', 'D', '￥1000.00');
$femaleB = new Female('femaleB', 'D', '￥1000.00');
$femaleC = new Female('femaleC', 'D', '￥1000.00');
$member  = [$femaleA, $femaleB];
// create Hotel
$ZZHotel = new Hotel($member);
var_dump($ZZHotel->hire($femaleA));
var_dump($ZZHotel->hire($femaleB));
var_dump($ZZHotel->hire($femaleC));