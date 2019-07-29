<?php


    namespace app\index\controller;

    use think\Db;

    class Database
    {
        public function index()
        {
            // $res = DB::execute("INSERT INTO student(name,sex,age) VALUES('Grace',0,16)");
            // $res = Db::execute("DELETE FROM student WHERE name = 'Grace'");
            // $res = Db::query("SELECT * FROM student WHERE age > 18");


            // 查询构造器

            // 插入
            /*$res = Db::table('student')
                ->insert([
                    'name' => '猪悟能',
                    'age' => 222,
                    'sex' => 1
                ]);*/

            // 更新
            /*$res = Db::table('student')
            ->where(['name' => '猪悟能','sex' => 1])
            ->where('name' , '猪悟能')
            ->update(['name' => '孙猴子','sex' => 2]);*/

            // 删除
            /*$res = Db::table('student')
                ->where('number','>',53)
                ->delete();*/

            // 查找
            /*$res = Db::table('student')
                ->where('name','小黑')
                ->select();
            dump($res);*/

            $stu = Db::name('student')
                ->where('sex',0)
                ->order('number','DESC')
                ->select();
            dump($stu);

        }
    }
