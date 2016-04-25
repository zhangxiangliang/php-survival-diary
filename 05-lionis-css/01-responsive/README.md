# Lionis 响应式
### 简介
一个简单十二栏布局的响应式。制作的起因是，和学长做一个网站导入了外部样式。看文档看得郁闷加上只是为了使用响应式布局，无需引入一个巨大的样式框架。最主要的原因是，我突然想造个轮子装逼了。

### 特点
使用语义化的样式，使得代码的阅读起来更加愉快，而且可以练习英语。

### 导入CSS样式
```html
<link rel="stylesheet" href="./xxx/responsive.css">
```

#### 使用方法
##### PC端
```html
<div class="lionis six computer">
	<h1>Lionis</h1>
</div>
<div class="lionis six computer">
	<h1>CSS</h1>
</div>
```

##### 手机端
```
<div class="lionis six phone">
	<h1>Lionis</h1>
</div>
<div class="lionis six phone">
	<h1>CSS</h1>
</div>
```