<?php

class UserTest extends PHPunit_Framework_TestCase{

	public function testGetPrenom(){
		$user=new Entity\user("JJ","Polotre",87);
		$this->assertEquals("Polotre",$user->getPrenom());
	}

	public function testGetNom(){
		$user=new Entity\user("JJ","Polotre",87);
		$this->assertEquals("JJ",$user->getNom());
	}
	
	public function testGetAge(){
		$user=new Entity\user("JJ","Polotre",87);
		$this->assertEquals(87,$user->getAge());
	}
}
