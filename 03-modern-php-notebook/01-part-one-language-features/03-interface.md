# 接口
### 前言

##### 上课的世界
>lionis：“小四君，我手机没电了。你有没有带充电宝”

>小四君： “嘿嘿嘿，叫你不买充电宝，快叫哥哥，叫了就把充电宝借你”

>lionis：“信不信我过去就是一脚，快拿来”

>被lionis压迫下的小四君拿出了充电宝

>lionis：“线呢”

>小四君： “嘿嘿嘿，是Android的线，不是iphone的哦”

>lionis：“.....”

如果能把Android和iphone的数据线都统一了就没这个问题了，想想生活中有很多这种类似的情况，如果灯泡坏了，买了新的灯泡结果型号不对；如果水龙头坏了，买了新的水龙头结果不匹配。那这个世界是有多让人暴躁，其实在PHP的世界也有这样的情况。

##### PHP的世界
>lionis：“小四君，你写的什么代码，为什么 `setLionisCool()` 这个函数用不了”

>小四君：“你个丑比，宝宝不开心把函数名变成了`setLionisUgly()`了”

>lionis：“......”

看吧，如果没有一个合适的规范，不管在哪个世界都行不通呢。俗话说`见人说人话，见鬼说鬼话`，我们在PHP的世界里通过使用`接口`就可以更加愉快的撸代码了，可以更加愉快的使用第三方的组件、代码等等。而我们只需要知道接口怎么用就好了，不用去考虑代码是怎么实现的。

### 基础
##### 接口的定义
```php
interface LionisInterface
{
	public function setCool();
	public function setMoney();
	public function setClever();
}
```
##### 接口的实现
```
class Lionis implements LionisInterface {
	public function setCool()
	{
		return "Lionis is very cool.";		
	}
	public function setMoney()
	{
		return "Lionis have much money";
	}
	public function setClever()
	{
		return "Lionis is very clever";
	}
}
```

##### 注意
接口里的方法都应该实现，不然会报错，如果不想实现的话可以把函数设置为抽象函数。一个类可以有多个接口，但是只能有一个抽象类。

### 例子
我们平时在使用数据库进行增删改查等功能，但是数据库的种类有很多比如`MySql`、`Postgres` `SQLite`等等。各个数据库具体的使用方式是有不同的，如果我们单独为每一个数据库都写一个类，在调用的时候还得知道是使用的是什么数据库。这时候`接口`就派上用场了。让各个数据库的类都实现这个接口。
```php
interface ConnectionInterface 
{
	public function select($query);
	public function insert($query);
	public function update($query);
	public function delete($query);
	// ... more code
}
```
```php
class MySqlConnection implements ConnectionInterface
{
	// ... more code 
}
```
```php
class SQLiteConnection implements ConnectionInterface
{
	// ... more code 
}
```
当调用的时候只要传入接口就可以了。
```php
class Model
{
	public function useDataBase(ConnectionInterface $connection) {
		// 比如 $connection->create($query);
		// ... more code
	}
	// ... more code
}
```
通过使用接口，就可以把多个功能相同，实现不同的类，用同样的方式来调用。

### 扩展
可以看看框架或组件的数据库类的实现。比如 `Illuminate Database`。 [传送门](https://github.com/illuminate/database)


