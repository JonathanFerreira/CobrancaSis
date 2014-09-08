<?php
class UserFixture extends CakeTestFixture {
    public $import = 'User';

    var $records = array(

        array(
        	'id' => 1, 
        	'username' => '000111', 
            'name' => 'teste',
            'password' => '111',
        	'email' => 'teste@teste', 
        ),

        array(
            'id' => 2, 
            'username' => '000222', 
            'name' => 'teste2',
            'password' => '222',
            'email' => 'teste2@teste', 
        )
    );
}
?>    	