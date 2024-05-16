<?php

class User
{
	public $name;
	public $email;
	public $products;

	public function __construct($name, $email)
	{
		$this->name = $name;
		$this->email = $email;
		$this->products = [];
	}

	public function getNameUser()
	{
		return $this->name;
	}
	public function getEmail()
	{
		return $this->email;
	}

	public function addProduct(Product $product)
	{
		$this->products[] = $product;
	}

	public function getProducts()
	{
		return $this->products;
	}
}
