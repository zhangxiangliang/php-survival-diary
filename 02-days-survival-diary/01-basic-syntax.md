# 基本语法

### PHP 标记
起始标记：`<?php`,结束标记`?>`。如果使用结束标签，可能会意外引入空格或者换行。
##### Example
```php
<?php //please input something ?>
```
### 使用条件的高级分离术
##### Example
```php
<?php if ($expression == true) : ?>
	if true show this
<?php else : ?>
	otherwise show this
<?php endif ;?>
```

### 注释
##### Example
```php
// this is comment
/* this is comment */
#  this is comment
```
