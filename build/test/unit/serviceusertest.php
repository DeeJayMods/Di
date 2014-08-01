<?php
class serviceUserTest extends PHPunit_Framework_TestCase{

	public function testFullName(){
		$mock=$this->GetMockBuilder("DAO\DAOUserSession")->getMock();
		$mock->method("get")->will($this->returnValue("John"));
		$service = new Service\ServiceUser($mock);
		$this->assertEquals("John John",$service->fullName());
	}

}	