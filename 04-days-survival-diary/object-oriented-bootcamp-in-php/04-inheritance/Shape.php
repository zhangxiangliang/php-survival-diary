<?php
abstract class Shape {
	protected $color;
	public function __construct($color = 'red')
	{
		$this->color = $color;
	}
	abstract public function getArea();
}
class Square extends Shape {
	protected $length = 4;
	public function getArea() {
		return pow($this->length, 2);
	}
}
echo ((new Square)->getArea());