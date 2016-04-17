<?php
namespace Acme\Users;
// 人类，用于创建一个人。
class Person {
	protected $name;
	// 构造函数
	public function __construct($name = 'anonymity') {
		$this->name = $name;
	}
	// 名字只读不可改
	public function getName() {
		return $this->name;
	}
}