<?php

class Product
{
	private $name;
	private $price;
	private $category;

	public function __construct($name, $price, Category $category = null) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

	public function getNameProduct()
	{
		return $this->name;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function getCategory()
	{
		return $this->category;
	}
}
