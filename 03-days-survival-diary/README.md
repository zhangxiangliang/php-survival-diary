# DIY MVC 框架

### 为什么要写
对 MVC 的流程有个新的了解，该框架部分没有写完整，只是一个大概的思路。

### 目录结构
main
|- app
|	|- controllers
|   |- models
|   |- views
|	|— core
|   |- init.php
|
|- public
|	|- index.php

### 介绍
* public		用来存放对外可访问的资源
* app			用来存放主要代码
* controllers 	用来存放控制器代码
* models 		用来存放模型代码
* views			用来存放视图代码
* core			用来存放核心代码
* init.php 		加载核心代码

### 运行流程
假设用户访问的地址是: lionis.local/article/show/1
```
1. 先进入 public/index.php, 会加载 初始化函数 app/init.php
2. app/init.php 会加载 核心代码 core/Controller.php 、 core/App.php
3. core/App.php 会先对 $url 进行过滤，然后多 $url 进行分组，分为 array["article","show","1"]
4. core/App.php 根据数组进行分发 创建 article 控制器对象，并所要使用的方法 show()，参数数组 ["1"]，并使用回调函数
5. controllers/aritcle.php 控制器下的 show() 方法被调用，并接受参数 ["1"]
6. controllers/article.php 下的 show() 方法调用 models/Article.php，查询 id=1 的文章
7. controllers/article.php 下的 show() 方法调用 views/article/show.php 来渲染页面
8. 返回给用户
```