<?php

class App 
{

	protected $controller = 'home';

	protected $method = 'index';

	protected $params = [];

	public function __construct()
	{
		$url = $this->parseUrl();

		// 判断是否存在对应的控制器
		if(file_exists('../app/controllers/' . $url[0] . '.php'))
		{
			$this->controller = $url[0];
			unset($url[0]);
		}

		// 创建控制器
		require_once '../app/controllers/' . $this->controller . '.php'; 
		$this->controller = new $this->controller;

		// 判读控制器方法是否存在
		if(isset($url[1]))
		{
			if(method_exists($this->controller, $url[1]))
			{
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		// 剩余参数保存至 $this->params 中
		$this->params = $url ? array_values($url) : [];
		
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	public function parseUrl()
	{
		if(isset($_GET['url'])) 
		{
			return $url = explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}