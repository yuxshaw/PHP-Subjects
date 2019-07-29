<?php


    class Employee
    {
        protected $name;
        protected $age;
        protected $sex;
        protected $num;

        public function check_in(){
            echo '指纹打卡！';
        }


    }

    class Engineer extends Employee{

        // 重写
        public function check_in()
        {
            return $this->engineer_check();
        }

        private function engineer_check(){
            echo '刷脸打卡！';
        }

    }

    $e1 = new Employee;
    $e1->check_in();

//    $e2 = new Engineer();
//    $e2->check_in();

    class Demo{
        public function work(Employee $empObj){
            $empObj->check_in();
        }
    }

    $employeer = new Demo;
    $employeer->work(new Engineer());