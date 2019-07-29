<?php

	namespace app\admin\controller;

	//use think\Controller;
	use app\admin\controller\Base;

	use app\admin\model\User as UserModel;

	use think\Request;

	use app\admin\validate\User as UserVal; //自定义验证类

	class User extends Base
	{
		protected $checkLogin = ['login','check']; //存放不需要登录就能操作的方法 ，方法名需要小写
		//用户列表
		public function userIndex()
		{
			$user = new UserModel();
			$userlist = $user->paginate(3);
			$page = $userlist->render();

			$this->assign('data',[
				'userlist'=>$userlist,
				'page'=>$page
			]);
			return $this->fetch();
		}

		//添加用户页面
		public function userAdd()
		{
			return $this->fetch();
		}
		//用户添加
		public function userInsert(Request $request)
		{
			$user_info = $request->post(); //获取post的值
			//$user_info = input(); //助手函数获取post过来的值
			//验证

			$val = new UserVal();
			if(!$val->check($user_info)){ //如果验证不通过
				$this->error($val->getError());
				exit;
			}

			$user = new UserModel($user_info);
			$res = $user->allowField(true)->save();
			if(!$res){
				$this->error('添加用户失败！');
			}else{
				$this->success('添加用户成功','User/userIndex');
			}

		}

		//编辑用户
		public function userEdit($id)
		{
			$userinfo = UserModel::get($id);

			$this->assign('userinfo',$userinfo);

			return $this->fetch();
		}

		public function userUpdate()
		{
			$userinfo = input('post.'); //助手函数获取post所有参数
			$id = input('post.id');

			$val = new UserVal();
			if(!$val->check($userinfo)){
				$this->error($val->getError());
				exit;
			}
			$res = UserModel::update($userinfo,['id'=>$id]);
			if($res){
				$this->success('修改用户成功！','/admin/User/userIndex');
			}else{
				$this->error('修改用户失败！');
			}
		}




		//删除用户
		public function userDel()
		{
			$id = input('get.id'); //助手函数获取id

			//dump($id);die;

			$res = UserModel::destroy($id); //软删除
			//$res = UserModel::destroy($id,true); //直接从数据库删除
			if($res){
				$this->success('删除用户成功！','/admin/User/userIndex');
			}else{
				$this->error('删除用户失败！');
			}
		}

		//登录
		public function login()
		{
			return $this->fetch();
		}
		//登录验证
		public function check()
		{
			//验证码
			$code = input('post.code');
			if(!captcha_check($code)){
				//验证失败
				$this->error('验证码错误！');
				exit;
			};
			$data = input('post.');
			$user = UserModel::where('name',$data['name'])->find();
			if(!$user){
				$this->error('用户不存在！');
			}else{

				if($user['password'] == md5($data['password'])){

					session('name',$user['name']); // 开启session

					$this->success('登录成功！','/admin/Index/index',1,2);

				}else{

					$this->error('密码错误！');

				}
			}
		}


		//退出
		public function logout()
		{
			session(null);
			$this->success('退出','/admin/User/login',1,1);
		}
	}