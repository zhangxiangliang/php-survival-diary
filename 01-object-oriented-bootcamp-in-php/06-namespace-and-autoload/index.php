<?php 
// 导入自动加载
require 'vendor/autoload.php';
// 调用类
use Acme\Staff;
use Acme\Business;
use Acme\Users\Person;

// Perfect !!! good job 

// 熊本基本成员
$lecat = new Person('叶猫猫');
$lazycat = new Person('懒猫');
$lionis = new Person('小二');
$four = new Person('小四');
$lina = new Person('零阿');
$member = [$lecat, $lionis, $four, $lazycat, $lina];

// 创建熊本战队人员组
$kumamon_staff = new Staff($member);
// 创建熊本战队
$kumamon_team = new Business($kumamon_staff);
// 创建新成员
$square = new Person('方方');
// 添加
$kumamon_team->hire($square);
var_dump($kumamon_team->getStaffMember());