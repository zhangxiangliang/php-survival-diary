<?php
namespace Acme;
use Acme\Users\Person;
// 公司可以有一个员工名单 staffs
class Business {
	// 存放人员名单
	protected $staff;
	// 构造函数
	public function __construct(Staff $staff) {
		$this->staff = $staff;
	}
	// 雇佣员工
	public function hire(Person $person) {
		$this->staff->add($person);
	}
	// 获取员工名单
	public function getStaffMember(){
		return $this->staff->getMember();
	}
}