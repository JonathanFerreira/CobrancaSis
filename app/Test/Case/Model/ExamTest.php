<?php
App::uses("Exam", "Model");

class ExamTest extends CakeTestCase {

	public function setUp() {
		parent::setUp();
        $this->Exam = ClassRegistry::init('Exam');
    }
	
	public function testCourseIdCannotBeZero(){
		$this->Exam->set(array('Exam' => array('course_id' => '0')));
		$this->assertFalse($this->Exam->validates());
	}

	public function testCourseIdIsDifferentOfZero(){
		$this->Exam->set(array('Exam' => array('course_id' => '1')));
		$this->assertTrue($this->Exam->validates());
	}

}
?>