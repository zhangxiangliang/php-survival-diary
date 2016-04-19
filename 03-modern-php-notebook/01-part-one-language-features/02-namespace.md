# 命名空间

### 前言
我相信很多人都会遇到重名的问题吧。说个在我身边就经常发生的事，我们班和兄弟班班上都有一个叫`王伟`的同学。在一起上课的时候，老师会突然说到“`王伟`你来回答一下这个问题。”伴随的就是全部同学的大笑，老师你说的是一班的王伟呢，还是二班的王伟。（宝宝我绝对没有参与）

在PHP的项目开发过程中也会出现这样类似的问题，一开始有人想到了解决方法了，就是把类名按照公司、路径等规则写完整。但是，这样会造成什么样的问题呢？我举个我舍长的外号的例子吧，我舍长叫做`英俊_潇洒_风流倜傥_男_女_老_少_学委_学妹_通吃_秃头_小四_鸡`。看起来好像也没什么吧也不过就是长点。那我来个伪代码吧。

```php
$person_one = new 英俊_潇洒_风流倜傥_男_女_老_少_学委_学妹_通吃_秃头_小四_鸡();

$person_two = new 英俊_潇洒_风流倜傥_男_女_老_少_学委_学妹_通吃_秃头_小四_鸡();
```
看得我自己都慌了。因为有这样的历史推动了`命名空间`的诞生。

### 基础


##### 命名空间的声明
这个命名空间声明语句后声明的所有PHP类、接口、函数或者常量都在 `Lionis`这个帅帅的命名空间下。
```php
<?php

namespace Lionis;

```
当然也可以拥有子命名空间。
```php
<?php

namespace Lionis\Is\Very\Cool;

```
顶层的命名空间必须有全局一致性，子命名空间没有那么重要，不过有利于组织项目的代码。


##### 导入
说完了怎么声明，如果要使用的时候怎么办呢？这时候就可以使用`use`来导入类、接口等等。
```php
<?php 

use Lionis;
```
有人可能会说那如果导入`Lionis\Is\Very\Cool`不也很长吗。这你就不懂了把，当然山人自有妙计，用`as`来指定别名。
```php
<?php

use Lionis\Is\Very\Cool as CoolBoy;

$lionis = new CoolBoy();
```


##### 多重导入
```php
<?php

use Lionis\Is\Very\Cool,
	Lionis\Is\Very\Clever,
	Lionis\Have\Very\Much\Momey;

```
虽然可以这样写没错，但是很容易让人困惑。推荐以下写法，使代码更容易理解。(其实我只是单纯的想多夸一次自己而已)
```php
<?php

use Lionis\Is\Very\Cool;
use	Lionis\Is\Very\Clever;
use	Lionis\Have\Very\Much\Momey;

```

##### 不导入的引用方法
如果不使用 `use` 导入命名空间的话，可以直接使用命名空间引用。
```
$person = new \Lionis\Is\Very\Cool();
```
这样写的原因是因为，PHP在解析的时候如果需要使用`Cool`类，PHP需要知道`Cool`才能使用。打个不怎么正确的比喻把，你总不能对着空气喊一个千里之外人的名字吧。 空气传递声音的时候，他会找不到要传递给谁呢。（T T，原谅我这个不正确的比喻哈）

### 使用
有的同学会说“Lionis 你坏坏，骗人家，人家这样写根本用不了”。

```php
<?php
// 文件路径：lionis/src/Person.php
namespace Lionis\Person;

class Person
{
	protected $name;
	public function __construct($name)
	{
		$this->name = $name;
	}
}
```
```php
<?php 
// 文件路径：lionis/public/index.php
use Lionis\Person;

$lionis = new Person();

// 运行输出找不到 Person 这个类
```
嘎嘎嘎，本宝宝没骗人。还是`王伟`同学的例子，假如两个`王伟`同学都没来上课。老师在教室大喊:“王伟~ 王伟~~ 王伟~~~”。根本不会有一点反应，原因就是王伟同学人不在。使用不了这个命名空间的原因也和这个一样，因为你没有把文件导入进来，当然找不到 Person 这个类咯。改成这样就可以用了
```php
<?php 
// 文件路径：lionis/public/index.php
require_once 'lionis/src/Person.php'
use Lionis\Person;

$lionis = new Person();
```
可是问题又来了，如果有非常多的引用怎么办呢。如果突然间想改文件的名字怎么办呢。难道一个个改吗？这时候可以使用 `composer` 这个工具来实现自动加载。简直好用到 cry !!!

怎么用呢?宝宝傲娇了不在这边细讲，下次有机会再写一篇。如果真的很想知道的话。[[传送门](http://docs.phpcomposer.com/01-basic-usage.html#Autoloading)]

### 拓展
《深入理解PHP内核》 [[传送门](http://www.php-internals.com/book/?p=chapt05/05-08-class-namespace)]
