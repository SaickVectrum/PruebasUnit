<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	public function testUser()
	{
		$user = new User("Pepe", "pepe@gmail.com");
		$this->assertEquals("Pepe", $user->getNameUser());
		$this->assertEquals("pepe@gmail.com", $user->getEmail());
	}

}
