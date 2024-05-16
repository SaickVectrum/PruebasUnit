<?php

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
	
	public function testNameProduct()
	{
		$product = new Product("camiseta", 100);
		$this->assertEquals("camiseta",$product->getNameProduct());
	}

}
