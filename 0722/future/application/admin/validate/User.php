<?php


    namespace app\admin\validate;


    use think\Validate;

    class User extends Validate
    {
        protected $rule = [
            'name|用户名' => 'require|min:3',
            'password|密码' => 'require|min:6|max:18|confirm:repassword',
            'email|邮箱' => 'require|email',
        ];

        protected $message = [
            'name.require' => '用户名必须填写',
            'name.min' => '用户名长度不小于3个字符',
            'password.require' => '密码必须填写',
            'password.min' => '密码长度不小于6个字符',
            'password.confirm' => '两次密码必须一致',
            'email.require' => '邮箱必须填写',
        ];

    }