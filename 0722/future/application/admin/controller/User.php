<?php


    namespace app\admin\controller;


    use think\Controller;
    use app\admin\model\User as UserModel;
    use think\Request;
    use app\admin\validate\User as UserVal; // 自定义验证类
    use traits\think\Instance;
    use think\Db;
    use app\admin\controller\Base;

    class User extends Base
    {
        protected $checkLogin = ['login','check'];
        // 用户列表
        public function userIndex(){
            $user = new UserModel();
            $user_list = $user->paginate(10);
            $page = $user_list->render();       // 分页
            $data = array(
                'user_list' => $user_list,
                'page' => $page
            );
            $this->assign('data',$data);
            return $this->fetch();
        }

        // 添加用户
        public function userAdd(){
            return $this->fetch();
        }

        // 修改用户
        public function userEdit($id){
            $user_info = UserModel::get($id);
            $this->assign('user_info',$user_info);
            return $this->fetch();
        }

        // 更新用户
        public function userUpdate(){
            $user = input('post.');     // 助手函数
            $id = input('post.user_id');

            $val = new UserVal();
            if (!$val->check($user)) {
                $this->error($val->getError());
                exit;
            }
            $res = UserModel::update($user,['user_id' => $id])->save();
            if (!$res){
                $this->error('修改失败！');
            }else{
                $this->success('修改成功！','User/userIndex');
            }
        }

        public function userDel(){
            $id = input('get.id');

            $res = UserModel::destroy($id);     // 软删除
            // $res = UserModel::destroy($id,true);     // 直接从数据库删除

            if ($res){
                $this->success('删除成功！','/admin/user/userIndex');
            }else{
                $this->error('删除失败！');
            }
        }

        // 添加用户
        public function userInsert(Request $request){
            // $user = input();    // 助手函数获取
            $user_info = $request->post();

            // 验证
            $val = new UserVal();
            if (!$val->check($user_info)){      // 如果验证不通过
                $this->error($val->getError());
                exit;
            }
            $user = new UserModel($user_info);

            $res = $user->allowField(true)->save();
            if (!$res){
                $this->error('添加失败！');
            }else{
                $this->success('添加成功','User/userIndex');
            }
        }

        // 登录页面
        public function login(){
            return $this->fetch();
        }

        public function check()
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
                if ($user['password'] == md5($data['password'])){
                    session('name',$user['name']);
                    $this->success('登录成功！','/admin/Index/index',1,2);
                }else{
                    $this->error('密码错误！');
                }
            }
        }

        // 退出登录
        public function logout(){
            session(null);
            $this->success('退出成功！', '/admin/user/login', 1, 1);
        }

    }