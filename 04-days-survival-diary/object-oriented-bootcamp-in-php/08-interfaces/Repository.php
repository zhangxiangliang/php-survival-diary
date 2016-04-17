<?php
$databaseName = 'blog';
interface Repository {
	public function connect();
	public function close();
	public function create($message);
	// public function destory();
	// public function edit();
	// public function select();
}

class MysqlRepository implements Repository {
	private $data;
	private $conn;
	public function connect(){
		echo '链接Mysql数据库成功' . "\n";
	}
	public function close() {
		echo '关闭Mysql数据库成功' . "\n";
	}
	public function create($message) {
		$this->connect();
		echo '创建SQL语句:' . $message . "\n";
		$this->close();
	}
}

class MangoRepository implements Repository {
	private $data;
	private $conn;
	public function connect(){
		echo '链接Mango数据库成功' . "\n";
	}
	public function close() {
		echo '关闭Mango数据库成功' . "\n";
	}
	public function create($message) {
		$this->connect();
		echo '创建SQL语句:' . $message . "\n";
		$this->close();
	}
}


class UserController {
	public $repo;
	public function __construct(Repository $repo) {
		$this->repo = $repo;
	}
}

$controller = new UserController(new MangoRepository);
$controller->repo->create("Create User");