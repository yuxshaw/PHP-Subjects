<?php


    class StudentsModel
    {

        public function all(){
            return array(
                array(
                    'name' => 'Alan',
                    'age' => '18',
                    'sex' => '男',
                    'number' => '1001'
                ),array(
                    'name' => 'Jack',
                    'age' => '19',
                    'sex' => '男',
                    'number' => '1002'
                ),array(
                    'name' => 'Rose',
                    'age' => '7',
                    'sex' => '女',
                    'number' => '1003'
                )
            );
        }

    }