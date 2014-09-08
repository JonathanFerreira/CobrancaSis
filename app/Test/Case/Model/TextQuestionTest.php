<?php
App::uses("TextQuestion", "Model");

class TextQuestionTest extends CakeTestCase {

	//public $fixtures = array('app.text_question');

	public function setUp() {
		parent::setUp();
        $this->TextQuestion = ClassRegistry::init('TextQuestion');
    }
	
	public function testQuestionTextCannotBeEmpty(){
		$this->TextQuestion->set(array('TextQuestion' => array('question_text' => '')));
		$this->assertFalse($this->TextQuestion->validates());
	}
	public function testCourseIdShouldBeDifferentOfZeroIfCategoryIdEqualToTwo(){
		$this->TextQuestion->set(array('TextQuestion' => array('category_id' => '2', 'course_id' => '1', 'answer_text' => '')));
		$this->assertTrue($this->TextQuestion->verificaIndices());
	}
	public function testCourseIdCannotBeZeroIfCategoryIdEqualToTwo(){
		$this->TextQuestion->set(array('TextQuestion' => array('category_id' => '2', 'course_id' => '0', 'answer_text' => '')));
		$this->assertFalse($this->TextQuestion->verificaIndices());
	}
}
?>