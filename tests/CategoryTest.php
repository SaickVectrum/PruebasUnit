<?php

use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
	public function testNameCategory()
	{
		$category = new Category;
		$category->name = "Camisetas";
		$result = $category->getNameCategory();
		$expected = "Camisetas";
		$this->assertEquals($expected, $result);
	}

}