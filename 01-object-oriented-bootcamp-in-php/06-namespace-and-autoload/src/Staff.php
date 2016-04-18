<?php
namespace Acme;
use Acme\Users\Person;

class Staff {
	protected $member = [];

	public function __construct($member = []) {
		// 因为可能一开始就有一个员工集合
		$this->member = $member;
	}
	// 添加人员
	public function add(Person $person) {
		$this->member[] = $person;
	}
	// 获取成员
	public function getMember() {
		return $this->member;
	}
}