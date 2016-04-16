<?php
class Person {
	protected $name;
	public function __construct($name = 'anonymity') {
		$this->name = $name;
	}
}
class Business {
	protected $staff;
	public function __construct(Staff $staff) {
		$this->staff = $staff;
	}
	public function hire(Person $person) {
		$this->staff->add($person);
	}
	public function getStaffMember(){
		return $this->staff->getMember();
	}
}
class Staff {
	protected $member = [];
	public function __construct($member = []) {
		$this->member = $member;
	}
	public function add(Person $person) {
		$this->member[] = $person;
	}
	public function getMember(){
		return $this->member;
	}
}

// 创建用户
$voler = new Person('voler');
$lionis = new Person('lionis');
$shubiao = new Person('shubiao');
$persons = [$voler, $lionis, $shubiao];
// 创建 ITDailyer 用户
$ITDailyer = new Staff($persons);
// 创建 ITDaily 组
$ITDaily = new Business($ITDailyer);
var_dump($ITDaily->getStaffMember());
