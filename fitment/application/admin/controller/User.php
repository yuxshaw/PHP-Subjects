<?php


    namespace app\admin\controller;


    use think\Controller;
    use app\admin\model\User as UserModel;

    class User extends Controller
    {

        // 用户列表
        public function userIndex()
        {
            $users = UserModel::all();
            $this->assign('users',$users);
            return $this->fetch();
        }

        // 添加用户页面
        public function userAdd()
        {
            return $this->fetch();
        }

        // 添加用户
        public function userInsert()
        {
            $user_info = input('post.');

            $user = new UserModel($user_info);

            $res = $user->allowField(true)->save();
            if (!$res){
                $this->error('添加失败！');
            }else{
                $this->success('添加成功','User/userIndex');
            }
        }

        // 删除用户
        public function userDelete()
        {
            return $this->fetch();
        }

        // 编辑用户页面
        public function userEdit($id)
        {
            $info = UserModel::where('u_id',$id)->find();
            $this->assign('info',$info);
            return $this->fetch();
        }

        // 修改密码页面
        public function changePassword($id)
        {
            $info = UserModel::where('u_id',$id)->find();
            $this->assign('info',$info);
            return $this->fetch();
        }

        // 登录页面
        public function login()
        {
            return $this->fetch();
        }

        // 登录验证
        public function checkLogin()
        {
            // 验证码
            $code = input('post.code');
            if(!captcha_check($code)){
                //验证失败
                $this->error('验证码错误！');
                exit;
            }
            $data = input('post.');
            $user = UserModel::where('name',$data['name'])->find();
            if (!$user){
                $this->error('用户名不存在！');
            }else{
                session('name',$user);
                if ($user['password'] == md5($data['password'])){
                    $this->success('登录成功！','/admin/Index/index',1,1);
                }else{
                    $this->error('密码错误！');
                }
            }
        }

        // 退出登录
        public function logout()
        {
            $res = session(null);
            $this->success('退出成功！','/admin/user/login',1,1);
        }
    }
