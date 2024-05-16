<?php

use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
	public function testNameCategory()
	{
		$category = new Category;
		$category->name = "Shirts";
		$result = $category->getNameCategory();
		$expected = "Shirts";
		$this->assertEquals($expected, $result);
	}

}