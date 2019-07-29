<?php


    namespace app\admin\model;


    use think\Model;
    use traits\model\SoftDelete;

    class User extends Model
    {
        use SoftDelete;
        protected $deleteTime = 'delete_time';

        // 规定自动完成的字段
        protected $auto = ['ip','password','repassword'];

        protected function setIpAttr()
        {
            return request()->ip();     // 通过助手函数获取ip
        }

        public function setPasswordAttr($value){
            return md5($value);
        }

        public function setRepasswordAttr($value){
            return md5($value);
        }

    }