<?php
class TextQuestionFixture extends CakeTestFixture {
    public $import = 'TextQuestion';

    var $records = array(

        array(
        	'id' => 1,
            'user_id' => 2,
            'category_id' => 1,
        	'question_text' => 'teste', 
            'area_id' => null,
            'course_id' => null,
            'answer_id' => 1,
            'answer_text' => 'teste',
        ),
    );
}
?>    	