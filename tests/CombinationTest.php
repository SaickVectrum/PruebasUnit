<?php

use PHPUnit\Framework\TestCase;

include 'src/Category.php';
include 'src/Product.php';
include 'src/User.php';

class CombinationTest  extends TestCase
{

	public function testAddProductWithCategory()
	{
		//Category 1
		$categoryClothes = new Category;
		$categoryClothes->name = "Shoes";
		$productBoot = new Product("Boot", 100, $categoryClothes);

		//User 1
		$user = new User('Pepe', 'pepe@gmail.com');
		$user->addProduct($productBoot);

		$products = $user->getProducts();

		$this->assertNotEmpty($products);
		$this->assertCount(1, $products);

		$this->assertEquals("Boot", $products[0]->getNameProduct());
		$this->assertEquals("Shoes", $products[0]->getCategory()->getNameCategory());


		//Category 2
		$categoryClothes = new Category;
		$categoryClothes->name = "Shirts";
		$productBlack = new Product("Black Shirt", 50, $categoryClothes);
		$productWhite = new Product("White Shirt", 40, $categoryClothes);

		//User 2
		$user = new User('Jhon', 'jhon@gmail.com');
		$user->addProduct($productBlack);
		$user->addProduct($productWhite);

		$products = $user->getProducts();

		$this->assertNotEmpty($products);
		$this->assertCount(2, $products);

		//Product 1
		$this->assertEquals("Black Shirt", $products[0]->getNameProduct());
		$this->assertEquals("Shirts", $products[0]->getCategory()->getNameCategory());
		$this->assertEquals(50, $products[0]->getPrice());

		//Product 2
		$this->assertEquals("White Shirt", $products[1]->getNameProduct());
		$this->assertEquals("Shirts", $products[1]->getCategory()->getNameCategory());


		//Category 3
		$categoryClothes = new Category;
		$categoryClothes->name = "Pants";
		$productBlueJean = new Product("Blue jean", 70, $categoryClothes);
		$productBlackPant = new Product("Black pant", 60, $categoryClothes);
		$productWhitePant = new Product("White pant", 65, $categoryClothes);

		//User 3
		$user = new User('Jack', 'jack@gmail.com');
		$user->addProduct($productBlueJean);
		$user->addProduct($productBlackPant);
		$user->addProduct($productWhitePant);

		$products = $user->getProducts();

		$this->assertNotEmpty($products);
		$this->assertCount(3, $products);

		//Product 1
		$this->assertEquals("Blue jean", $products[0]->getNameProduct());
		$this->assertEquals("Pants", $products[0]->getCategory()->getNameCategory());
		$this->assertEquals(70, $products[0]->getPrice());

		//Product 2
		$this->assertEquals("Black pant", $products[1]->getNameProduct());
		$this->assertEquals("Pants", $products[1]->getCategory()->getNameCategory());
		$this->assertEquals(60, $products[1]->getPrice());

		//Product 3
		$this->assertEquals("White pant", $products[2]->getNameProduct());
		$this->assertEquals("Pants", $products[2]->getCategory()->getNameCategory());
		$this->assertEquals(65, $products[2]->getPrice());
	}
}
