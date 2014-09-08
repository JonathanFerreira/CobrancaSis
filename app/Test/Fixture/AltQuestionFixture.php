<?php
class AltQuestionFixture extends CakeTestFixture {
    public $import = 'AltQuestion';

    var $records = array(

        array(
        	'id' => 1,
            'user_id' => 2,
            'category_id' => 1,
        	'question_text' => '', 
            'area_id' => null,
            'course_id' => null,
            'answer_id' => 1,
            'answerA' => '',
            'answerB' => 'teste',
            'answerC' => 'teste',
            'answerD' => 'teste',
            'answerE' => 'teste', 
        ),

        /*array(
            'id' => 2, 
            'username' => '000222', 
            'name' => 'teste2',
            'password' => '222',
            'email' => 'teste2@teste', 
        )*/
    );
}
?>    	