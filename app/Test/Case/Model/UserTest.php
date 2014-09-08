<?php
App::uses("User", "Model");

class UserTest extends CakeTestCase {

	public $fixtures = array('app.user');

	public function setUp() {
		parent::setUp();
        $this->User = ClassRegistry::init('User');
    }
	
	public function testNameCannotBeEmpty(){
		$this->User->set(array('User' => array('name' => '')));
		$this->assertFalse($this->User->validates());
	}

	public function testNameCannotBeSpecialCharacter(){
		$this->User->set(array('User' => array('name' => 'Jo@o!@#@"$%$?/')));
		$this->assertFalse($this->User->validates());
	}

	public function testRdCannotBeEmpty() {
		$this->User->set(array('User' => array('username' => '')));
		$this->assertFalse($this->User->validates());
	}

	public function testRdCannotHasLetter() {
		$this->User->set(array('User' => array('username' => 'ed')));
		$this->assertFalse($this->User->validates());
	}

	public function testPasswordsShouldBeEquals() {
		$senhas = array('password' => '333', 'confirm_password'=> '3333');
		$this->User->set(array('User' => $senhas));
		$this->assertFalse($this->User->matchPasswords());
	}


}
?>