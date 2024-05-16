<?php

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
	
	public function testNameProduct()
	{
		$product = new Product("black shirt", 100);
		$this->assertEquals("black shirt",$product->getNameProduct());
	}

}
