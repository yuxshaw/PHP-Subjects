<?php
    namespace app\index\controller;

    use app\index\controller\Base;
    use think\Request;

    class Index extends Base
    {
        public function index()
        {
            // return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
            $this->demo1();
            return 'halo<br/>';
        }

        public function hello($name = 'Alan',$age = 18)
        {
            return 'halo : '.$name.'! your are '.$age.' years old!';
        }

        public function demo2($name = 'Alan',$age = 18)
        {
            $data = array(
                'id' => 1,
                'name' => 'Alan',
                'hobby' => array()
            );
            $this->assign([
                'name' => $name,
                'age' => $age
            ]);
            return $this->fetch('hello');
//            return view('hello'); // 助手函数
        }

        private function test1(){
            echo 'This method is private!';
        }

        public function request()
        {
            $request = Request::instance();
            echo '当前域名是：'.$request->domain().'<br/>';
        }

        // 注入请求
        public function request1(Request $request)
        {
            //             获取当前域名
            echo 'domain: ' . $request->domain() . '<br/>';
//             获取当前入口文件
            echo 'file: ' . $request->baseFile() . '<br/>';
//             获取当前URL地址 不含域名
            echo 'url: ' . $request->url() . '<br/>';
//             获取包含域名的完整URL地址
            echo 'url with domain: ' . $request->url(true) . '<br/>';
//             获取当前URL地址 不含QUERY_STRING
            echo 'url without query: ' . $request->baseUrl() . '<br/>';
//             获取URL访问的ROOT地址
            echo 'root:' . $request->root() . '<br/>';
//             获取URL访问的ROOT地址
            echo 'root with domain: ' . $request->root(true) . '<br/>';
//             获取URL地址中的PATH_INFO信息
            echo 'pathinfo: ' . $request->pathinfo() . '<br/>';
//             获取URL地址中的PATH_INFO信息 不含后缀
            echo 'pathinfo: ' . $request->path() . '<br/>';
//             获取URL地址中的后缀信息
            echo 'ext: ' . $request->ext() . '<br/>';
        }

        public function response()
        {
            $data = [
                'id' => 1,
                'name' => 'Alan'
            ];
            return json($data);
        }

    }
